<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div id="form">
        <form action="proses_reg.php" method="post">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 0) {
                    echo '<div class="alert">Email sudah ada</div>';
                } elseif ($_GET['error'] == 1) {
                    echo '<div class="alert">Password tidak sama</div>';
                }
            }
            ?>
            <h4>Selamat Datang</h4>
            <p>Silahkan buat akun anda</p>
            <div class="form-login">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" placeholder="masukkan nama anda">
            </div>
            <div class="form-login">
                <label for="">Nomor Telp</label>
                <input type="text" name="nomor" placeholder="08xxxxxxxxx">
            </div>
            <div class="form-login">
                <label for="">Email</label>
                <input type="text" name="username" placeholder="masukkan email">
            </div>
            <div class="form-login">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="masukkan password">
            </div>
            <div class="form-login">
                <label for="">Konfirmasi Password</label>
                <input type="password" name="konfirmasi" placeholder="masukkan password">
            </div>
            <div class="form-login">
                <button>Daftar Sekarang</button>
            </div>
            <center><a href="index.php">Sudah punya akun? Login Sekarang</a></center>
        </form>
    </div>
</body>

</html>