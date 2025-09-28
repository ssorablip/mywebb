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
    
    <h1>เกี่ยวกับผู้จัดทำ</h1>
    <p></p><b>ชื่อ-นามสกุล: </b>ภณณัฐ ธรรมาลัยวิโรจน์</p>
    <p><b>รหัสนักศึกษา: </b>673380232-3<br></p>
    <p><b>หลักสูตร: </b>เทคโนโลยีสารสนเทศ<br></p>
    <p><b>มหาวิทยาลัย: </b>มหาวิทยาลัยขอนแก่น<br></p>
    <p><b>อีเมล: </b>phonnut.t@kkumail.com</p>
</body>
</html>