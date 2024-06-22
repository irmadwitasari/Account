<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
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
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $status = $_POST['status'];
         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>Email ini sudah digunakan, Silakan Coba yang lain!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Kembali</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Password,Status) VALUES('$username','$email','$password', '$status')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registrasi Berhasil!</p>
                  </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Sekarang</button>";
         

         }

         }else{
         
        ?>

            <header>Registrasi</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                    <span class="toggle-password" onclick="togglePasswordVisibility()">&#128065;</span>
                </div>


                <input type="hidden" name="status" value="1">
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Sudah Punya akun? <a href="index.php">Silahkan Login</a>
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
