<?php include("session_pengguna.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Dashboard</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hai kamu, <b><?=$_SESSION['login'];?></b>!</p>
        <p>Ini merupakan tampilan dashboard setelah pengguna melakukan login.</p>
        <p><a href="logout.php">Keluar dari akun</a></p>
    </div>
</body>
</html>