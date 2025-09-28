<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artworks</title>
</head>
<body>

    <h1>Create Artwork</h1>

    {{-- ฟอร์มสร้าง Artwork --}}
    <form action="{{ route('artworks.insert') }}" method="POST">
        @csrf
        <p>
            Artwork Title
            <input type="text" name="title" required>
        </p>

        <p>
            Artist Name
            <select name="artist_id" required>
                <option value="" selected>-- select artist --</option>
                @foreach($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->artists_name }}</option>
                @endforeach
            </select>
        </p>

        <p>
            Exhibition Name
            <select name="exhibition_id" required>
                <option value="" selected>-- select exhibition --</option>
                @foreach($exhibitions as $exhibition)
                    <option value="{{ $exhibition->id }}">{{ $exhibition->exhibition_name }}</option>
                @endforeach
            </select>
        </p>

        <button type="submit">Create</button>
    </form>

    <h1>List of Artworks</h1>

    {{-- ตารางแสดงผลงาน --}}
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Artwork Title</th>
                <th>Artist Name</th>
                <th>Exhibition Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1; @endphp
            @foreach($artworks as $artwork)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $artwork->title }}</td>
                    <td>{{ $artwork->artist->artists_name ?? '-' }}</td>
                    <td>{{ $artwork->exhibition->exhibition_name ?? '-' }}</td>
                    <td>
                        <form action="{{ route('artworks.edit', $artwork->id) }}" method="GET">
                            <button type="submit">Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
