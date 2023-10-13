<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($mahasiswa as $mhs)
    <form action="/home/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $mhs->id }}"><br>
        Nama <input type="text" name="nama" required="required" value="{{ $mhs->nama }}"><br>
        Umur <input type="number" name="umur" required="required" value="{{ $mhs->nama }}"><br>
        Kota <input type="text" name="kota" required="required" value="{{ $mhs->nama }}"><br>
        <input type="submit" value="simpan data">
    </form>
    @endforeach
</body>
</html>