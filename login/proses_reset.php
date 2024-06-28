<?php

include "koneksi.php";
$email = $_POST['username'];
$cek =  mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_users 
WHERE email='$email'"));
if ($cek > 0) {
    header('location:newpass.php?error=0&email=' . $email);
} else {
    header('location:reset.php?error=0');
}
