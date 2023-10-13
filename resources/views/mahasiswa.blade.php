<html>
    <body>
        <h1>BIODATA SISWA</h1>
        <form action="/mahasiswa/tambah">
        <table border="1">
            <tr>
                <th>NAMA</th>
                <th>UMUR</th>
                <th>KOTA</th>
                <th>OPSI</th>
</tr>
@foreach($mahasiswa as $mhs)
<tr>
    <td>{{ $mhs->nama }}</td>
    <td>{{ $mhs->umur }}</td>
    <td>{{ $mhs->kota }}</td>
    <td>
        <a href="/mahasiswa/edit/{{ $mhs->id }}">EDIT</a>
        <a href="/mahasiswa/hapus/{{ $mhs->id }}">HAPUS</a>
    </td>
</tr>
@endforeach
</table>
<br>
<input type="submit" value="Tambah Data">
</body>
</html>