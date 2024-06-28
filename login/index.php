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
        <form action="login.php" method="post">
            <h4>Selamat Datang</h4>
            <p>Silahkan masukkan email dan password</p>
            <div class="form-login">
                <label for="">Email</label>
                <input type="text" name="username" placeholder="masukkan email">
            </div>
            <div class="form-login">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="masukkan password">
            </div>
            <a href="reset.php">Lupa password?</a>
            <div class="form-login">
                <button>Login Sekarang</button>
            </div>
            <center><a href="register.php">Belum punya akun? Daftar Sekarang</a></center>
        </form>
    </div>
</body>

</html>