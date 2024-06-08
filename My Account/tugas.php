<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>



    <form action="" method="get">
        <table>
            <tr>
                <td><label>Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="nama costumer" id=""></td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td>:</td>
                <td><input type="text" name="alamat" placeholder="alamat" id=""></td>
            </tr>
            <tr>
                <td><label>Nomor Telp</label></td>
                <td>:</td>
                <td><input type="text" name="telp" placeholder="telp" id=""></td>
            </tr>
            <tr>
                <td><label>Nama Produk</label></td>
                <td>:</td>
                <td><input type="text" name="produk" placeholder="produk" id=""></td>
            </tr>
            <tr>
                <td><label>Jumlah Beli</label></td>
                <td>:</td>
                <td><input type="text" name="jumlah" placeholder="jumlah produk" id=""></td>
            </tr>
            <tr>
                <td><label>Harga Produk</label></td>
                <td>:</td>
                <td><input type="text" name="harga" placeholder="harga produk" id=""></td>
            </tr>
            <tr>
                <td><button>Simapan Data</button></td>
            </tr>
            
        </table>
    </form>

    <?php


    $nama = $_GET ['nama'];
    $alamat = $_GET['alamat'];
    $telp = $_GET['telp'];
    $produk = $_GET['produk'];
    $jumlah = $_GET['jumlah'];
    $harga = $_GET['harga'];
    $total = $_GET['jumlah'] * $_GET['harga'];


    if ($total > 200000){
        $diskon =10;
        $pot = ($diskon/100) * $total;
        $totbayar=$total - $pot;
    } elseif ($total > 500000) {
        $diskon =15;
        $pot = ($diskon/100) * $total;
        $totbayar=$total - $pot;
    } elseif ($total > 1000000) {
        $diskon =30;
        $pot = ($diskon/100) * $total;
        $totbayar=$total - $pot;
    }
    ?> 

    <table>

        <tr>
            <td>Nama Costumer</td>
            <td>:</td>
            <td> <?php echo $nama; ?> </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td> <?php echo $alamat; ?> </td>
        </tr>
        <tr>
            <td>Telp</td>
            <td>:</td>
            <td> <?php echo $telp; ?> </td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td> <?php echo $produk; ?> </td>
        </tr>
        <tr>
            <td>Jumlah Beli</td>
            <td>:</td>
            <td> <?php echo $jumlah; ?> </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td> <?php echo $harga; ?> </td>
        </tr>
        <tr>
            <td>Subtotal</td>
            <td>:</td>
            <td> <?php echo $total; ?> </td>
        </tr>
        <tr>
            <td>Potongan</td>
            <td>:</td>
            <td> <?php echo $pot; ?> </td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td> <?php echo $totbayar; ?> </td>
        </tr>

    </table>


</body>
</html>