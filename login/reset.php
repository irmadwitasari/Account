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
        <form action="proses_reset.php" method="post">
            <h4>Selamat Datang</h4>
            <p>Silahkan masukkan email dan password</p>
            <div class="form-login">
                <label for="">Email</label>
                <input type="text" name="username" placeholder="masukkan email">
            </div>
            <div class="form-login">
                <button>Reset Sekarang</button>
            </div>
            <center><a href="register.php">Belum punya akun? Daftar Sekarang</a></center>
        </form>
    </div>
</body>

</html>