<?php

include "koneksi.php";

$nama       = $_POST['nama'];
$email      = $_POST['username'];
$nomor      = $_POST['nomor'];
$password   = $_POST['password'];
$konfirmasi = $_POST['konfirmasi'];

if ($password != $konfirmasi) :
    header('location:register.php?error=1');
else :
    $cek =  mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_users 
                                                    WHERE email='$email'"));
    if ($cek > 0) {
        header('location:register.php?error=0');
    } else {
        $pass = md5($_POST['password']);
        $insert = mysqli_query($koneksi, "INSERT INTO tbl_users VALUES(NULL,
                                                                        '$nama',
                                                                        '$email',
                                                                        '$pass',
                                                                        '$nomor','0')");

        echo 'Registrasi berhasil';
    }
endif;


// una2024