<?php
    $server = 'localhost'; //server
    $host   = 'adit';       //hostname
    $pass   = '1234';       //password
    $db     = 'coba';       //database

    $conn = mysqli_connect($server, $host, $pass, $db);

    if($conn == false) {
        echo 'gagal';
        die();
    } else {
        echo 'koneksi berhasil';
    }
?>
