<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artworks</title>
</head>
<body>

    {{-- ตรวจสอบว่ามีตัวแปร $artwork (ชิ้นเดียว) ถูกส่งมาหรือไม่ --}}
    @if(isset($artwork))
        <h1>Edit Artwork</h1>

        {{-- ฟอร์มสำหรับแก้ไข Artwork --}}
        <form action="{{ route('artworks.update', $artwork->id) }}" method="POST">
            @csrf
            
            <p>
                Artwork Title
                <input type="text" name="title" value="{{ $artwork->title }}" required>
            </p>

            <p>
                Artist Name
                <select name="artist_id" required>
                    <option value="" selected>-- select artist --</option>
                    @foreach($artists as $artist)
                        <option value="{{ $artist->id }}" {{ $artwork->artist_id == $artist->id ? 'selected' : '' }}>{{ $artist->artists_name }}</option>
                    @endforeach
                </select>
            </p>

            <p>
                Exhibition Name
                <select name="exhibition_id" required>
                    <option value="" selected>-- select exhibition --</option>
                    @foreach($exhibitions as $exhibition)
                        <option value="{{ $exhibition->id }}" {{ $artwork->exhibition_id == $exhibition->id ? 'selected' : '' }}>{{ $exhibition->exhibition_name }}</option>
                    @endforeach
                </select>
            </p>
            
            <button type="submit">Update</button>
            <a href="{{ route('artworks') }}">
                <button type="button">Back to Create Form</button>
            </a>
        </form>
    @else
        <h1>Add Artwork</h1>

        {{-- ฟอร์มสำหรับเพิ่ม Artwork --}}
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
    @endif
    
    ---

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
            @if(isset($artworks) && count($artworks) > 0)
                @php $i = 1; @endphp
                @foreach($artworks as $artwork_item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $artwork_item->title ?? '-' }}</td>
                        <td>{{ $artwork_item->artist->artists_name ?? '-' }}</td>
                        <td>{{ $artwork_item->exhibition->exhibition_name ?? '-' }}</td>
                        <td>
                            <form action="{{ route('artworks.edit', $artwork_item->id) }}" method="GET">
                                <button type="submit">Edit</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" style="text-align: center;">ไม่พบข้อมูลผลงาน</td>
                </tr>
            @endif
        </tbody>
    </table>

</body>
</html>
