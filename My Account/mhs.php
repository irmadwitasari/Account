<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="nama" placeholder="nama lengkap" id=""><br>
        <input type="text" name="nilai_uts" placeholder="nilai uts" id=""><br>
        <input type="text" name="nilai_uas" placeholder="nilai uas" id="">
        <button>kirim data</button>
    </form>

    <?php


    $nama = $_GET ['nama'];
    $nilai_uts = $_GET['nilai_uts'];
    $nilai_uas = $_GET['nilai_uas'];
    $total = ($_GET['nilai_uts'] + $_GET['nilai_uas']);


    if ($total > 90){
        $nilai ='A';
    } elseif ($total > 80) {
        $nilai ='B';
    } elseif ($total > 70) {
        $nilai ='C';
    } elseif ($total > 60){
        $nilai = 'D';
    } elseif ($total <= 60) {
        $nilai = 'E';
    }


    echo 'nama: '.$nama; 
    echo '<br>';
    echo ' Nilai uts: '.$nilai_uts;
    echo '<br>';
    echo ' Nilai uas: '.$nilai_uas;
    echo '<br>';
    echo ' Total nilai: '.$total;
    echo '<br>';
    echo ' Predikat nilai: '.$nilai;

    ?>    
</body>
</html>