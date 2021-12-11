<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php

        session_start();

        // Disaat pengguna klik submit, cek dan buat session login
        if (isset($_POST['submit'])) 
        {
            $email = mysqli_real_escape_string($con, stripslashes($_POST['email']));
            $password = mysqli_real_escape_string($con, stripslashes($_POST['password']));

            // Cek nama pengguna ada atau tidak. Dan katasandinya benar atau salah.
            $result = mysqli_query($con, "SELECT email, nama_pengguna, kata_sandi FROM `pengguna` WHERE email='$email'") or die(mysql_error());
            $fetch = mysqli_fetch_object($result);

            // Cek pengguna dan katasandinya
            if (mysqli_num_rows($result) == 1 && password_verify($password, $fetch->kata_sandi) > 0)
            {
                $_SESSION['login'] = $fetch->nama_pengguna;

                // Redirect pengguna ke halaman dashboard
                header("Location: dashboard.php");
            }
            else 
            {
                echo "<div class='form'>
                        <h3>Nama pengguna atau kata sandi salah.</h3><br/>
                        <p class='link'>Klik disini untuk <a href='login.php'>Login</a> lagi.</p>
                      </div>";
            }
        }
        else { ?>

            <form class="form" method="post" name="login">
                <h1 class="login-title">Masuk</h1>
                <input type="text" class="login-input" name="email" placeholder="Alamat Email" autofocus="true"/>
                <input type="password" class="login-input" name="password" placeholder="Kata Sandi"/>
                <input type="submit" value="Login" name="submit" class="login-button"/>

                <p class="link">Belum memiliki akun? <a href="register.php">Daftar Sekarang</a></p>
            </form>

    <?php } ?>
</body>
</html>