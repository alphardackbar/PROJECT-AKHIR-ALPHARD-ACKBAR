<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#8 : Sistem template blade engine Laravel</title>
</head>
<body>
    <header>
        <h2>Alphard Ackbar</h2>
        <nav>
            <a href="/blog">HOME</a>
            <a href="/blog/tentang">TENTANG</a>
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>
    <hr/>
    <br/>
    <br/>

    <!--bagian judul halaman blog-->
    <h3>@yield("Blog_Teknologi")</h3>

    <!--bagian konten blog -->
    @yield("konten")

    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; <a href="https://www.malasngoding.com">web belajar</a> 2021-2022</p>
    </footer>
    
</body>
</html>