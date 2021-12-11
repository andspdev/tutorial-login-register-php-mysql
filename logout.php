<?php

session_start();

// Hapus atau destroy session masuk pengguna
if (session_destroy()) {
    // Redirect user ke halaman login
    header("Location: login.php");
}

?>