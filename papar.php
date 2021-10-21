<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>papar cookie</title>
</head>
<body>
    <?php
    if(count($_COOKIE)) {
        $nama_pelajar = $_COOKIE['nama_pelajar'];
        echo "Anda bernama $nama_pelajar";
    }else {
        echo'Tanpa nama';
    }
    ?>
</body>
</html>