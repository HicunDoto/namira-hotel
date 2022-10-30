<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/email')}}" method="post">
        <input type="text" placeholder="Title" name="title" id="">
        <input type="text" placeholder="Keterangan" name="body" id="">
        <input type="text" placeholder="Nama" name="nama" id="">
        <input type="text" placeholder="Subject" name="subject" id="">
        <input type="text" placeholder="Phone" name="phone" id="">
        <input type="email" placeholder="Email" name="email" id="">
        <button type="submit">Submit</button>
    </form>
</body>
</html>