<?php

include "koneksi.php";


$email      = $_POST['email'];
$password   = $_POST['password'];


if ($password != $konfirmasi) :
    header('location:newpass.php?email='.$email.'&error=pass');
else :
    $cek =  mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_users 
                                                    WHERE email='$email'"));
if ($cek > 0){
    $pass = md5($_POST['password']);
    $insert= mysqli_query($koneksi, "UPDATE tbl_users SET password='$password' WHERE email='$email'");

    echo'Ubah password berhasil';

}else {
    
    header('location:newpass.php?email='.$email);
}
        
endif;


// una2024

