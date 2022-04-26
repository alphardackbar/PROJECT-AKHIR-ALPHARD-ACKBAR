<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>membuat pagination dan crud pada laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset("/css/app.css") }}">

    
        
    
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
    
   
    
    <h2 class="text-center"><a href="www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data pegawai</h3>

    <p>Cari Data Pegawai :</p>
    <div class="form-group">
    
    </div>
    <form action="/pegawai/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Pegawai.." value="{{ old("cari") }}">
        <input type="submit" value="CARI">
    </form>

    <br/>

    <a href="/pegawai/tambah">+tambah pegawai baru</a>

    <br/>
    <br/>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach($pegawais as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a class="btn btn-warning  btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
                <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
    
    Halaman : {{ $pegawais->currentPage() }} <br/>
    Jumlah Data : {{ $pegawais->total() }} <br/>
    Data Per Halaman : {{ $pegawais->perPage() }} <br/>

    <h5>
    {{ $pegawais->links() }}
    </h5>
            </div>
        </div>
    </div>


</body>
</html>