<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{url('/about') }}">About</a>
        <a href="<?php echo route('book.idx'); ?>">Book List</a>
    </nav>

    <h1>รายชื่อหนังสือ</h1>
<table border = "1">
    <thead>
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อหนังสือ</th>
            <th>ผู้แต่ง</th>
            <th>ปีที่พิมพ์</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>The Hobbit</td>
            <td>J.R.R.Tolkien</td>
            <td>1937</td>
        </tr>
        <tr>
            <td>2</td>
            <td>1984</td>
            <td>George Orwell</td>
            <td>1949</td>
        </tr>
        <tr>
            <td>3</td>
            <td>To Kill a Mockingbird</td>
            <td>Harper Lee</td>
            <td>1960</td>
        </tr>
    </tbody>
</table>
</body>
</html>