<?php
    error_reporting(0);
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT contact_seller FROM product WHERE product_id = '".$_GET['id']."' ");
    $a = mysqli_fetch_object($kontak);
    $product = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($product);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pasar UMKM</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1>Pasar UMKM</h1>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="produk.php" class="active">Produk</a></li>
            </ul>
        </div>
    </header>

    <!-- Search -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search']?>" >
                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                <input type="submit" name="cari" value="Cari">
            </form>
        </div>
    </div>

    <!-- Product Detail -->
    <div class="section">
        <div class="container">
            <h3>Detail Produk</h3>
            <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->product_image ?>" width="100%">
                </div>
                <div class="col-2">
                    <h3><?php echo $p->product_name ?></h3>
                    <h4>Rp. <?php echo number_format($p->product_price) ?></h4>
                    <p>Deskripsi Produk :
                    <?php echo $p->product_description ?>
                    </p>
                    <p><a href="https://api.whatsapp.com/send/?phone=<?php echo $a->contact_seller ?>&text=Halo, saya tertarik dengan produk Anda." target="_blank"><img src="img/walogo.png" width="25px">Hubungi Via Whatsapp</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2023 - Pasar UMKM</small>
        </div>
    </footer>
</body>        
</html>