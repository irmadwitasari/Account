<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
    <style>
        .field {
            position: relative;
            display: inline-block;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 65%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
      <div class="container">
        <div class="box form-box">
            <?php 
             
              include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    // Memeriksa apakah pengguna aktif
                    if($row['status'] == 1){
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['id'] = $row['Id'];
                        header("Location: home.php");
                    } else {
                        echo "<div class='message'>
                                  <p>Akun Anda tidak aktif. Silakan hubungi administrator.</p>
                              </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Kembali</button>";
                    }
                } else {
                    echo "<div class='message'>
                              <p>Username atau password salah</p>
                          </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Kembali</button>";
                }
            } else {

            
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                    <span class="toggle-password" onclick="togglePasswordVisibility()">&#128065;</span>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Belum punya akun? <a href="register.php">Daftar Sekarang</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>
<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var icon = document.querySelector(".toggle-password");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.innerHTML = "&#128064;"; // Mengganti ikon menjadi "Sembunyikan Password"
        } else {
            passwordInput.type = "password";
            icon.innerHTML = "&#128065;"; // Mengganti ikon menjadi "Tampilkan Password"
        }
    }
</script>