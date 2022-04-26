<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/formulir/proses" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token()?> ">

        NAMA :
        <input type="text" name="nama"> <br/>

        UMUR :
        <input type="text" name="umur"> <br/>
        

        ALAMAT :
        <input type="text" name="alamat"> <br/>
        <input type="submit" value="Simpan">
    </form>    
</body>
</html>