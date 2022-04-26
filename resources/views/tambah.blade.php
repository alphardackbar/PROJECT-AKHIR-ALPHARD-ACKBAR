<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud tambah</title>
    
</head>
<body>
    <h2><a href="https://www.malasngoding.com">web belajar</a></h2>
    <h3>Data pegawai</h3>

    <a href="/pegawai">kembali</a>
    <br/>
    <br/>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama<input type="text" name="nama" required="required"><br/>
        Jabatan<input type="text" name="jabatan" required="required"><br/>
        Umur<input type="text" name="umur" required="required"><br/>
        Alamat<input type="text" name="alamat" required="required"><br/>
        <input type="submit" value="Simpan data">
    </form>
</body>
</html>