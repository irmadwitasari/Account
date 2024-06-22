<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Domain Expansion</a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_tgl = $result['tgl_daftar'];
                $res_id = $result['Id'];
                $days_since_creation = floor((time() - strtotime($res_tgl)) / (60 * 60 * 24));
            }
            
            echo "<a href='edit.php?Id=$res_id'>Ubah Profil</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Keluar</button> </a>

        </div>
    </div>
    <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Halo <b><?php echo $res_Uname ?></b>, Selamat Datang</p>
            </div>
            <div class="box">
                <p>Email yang kamu gunakan <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>akun ini dbuat pada tanggal/waktu <b><?php echo $res_tgl ?> </b> (<?php echo $days_since_creation?> hari yang lalu).</p> 
            </div>
          </div>
       </div>

    </main>
</body>
</html>