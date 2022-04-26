<!--Menghubungkan dengan view template master-->
@extends("master")

<!--isi bagian judul halaman-->
<!--cara penulisan isi section yang pendek-->
@section("Blog_Teknologi", "Halaman Kontak")

<!--isi bagian konten-->
<!--cara penulisan section yang panjang-->
@section("konten")

<p>Ini Adalah Halaman Kontak</p>

<table border="1">
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>uaigaming@gmail.com</td>
    </tr>
    <tr>
        <td>Hp</td>
        <td>:</td>
        <td>0829-9107-5816</td>
    </tr>

</table>

@endsection
