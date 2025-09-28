<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exhibition Management</h1>

<table border = "1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Exhibition name</th>
            <th>Start date</th>
            <th>End date</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
        @foreach{$exhibitions as $exhibition}
        <tr>
            {{$exhibition -> id}}
            {{$exhibition -> exhibitions_name}}
            {{$exhibition -> staret_date}}
            {{$exhibition -> end_date}}
            {{$exhibition -> location}}
            
        </tr>
        @endforeach
    </tbody>
    
</table>
    
</body>
</html>