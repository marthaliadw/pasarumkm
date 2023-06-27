<?php
    error_reporting(0);
    include 'db.php';
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

    <!-- Product -->
    <div class="section">
        <div class="container">
            <h3>Produk</h3>
            <div class="box">
                <?php
                    if($_GET['search'] != '' || $_GET['kat'] != ''){
                        $where = "AND product_name LIKE '%".$_GET['search']."%' AND category_id LIKE '".$_GET['kat']."%' ";
                    }
                    $product = mysqli_query($conn, "SELECT * FROM product WHERE product_status = 1 $where ORDER BY product_id DESC");
                    if(mysqli_num_rows($product) > 0){
                        while($p = mysqli_fetch_array($product)){
                ?>
                    <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                        <div class="col-4">
                            <img src="produk/<?php echo $p['product_image'] ?>">
                            <p class="nama"><?php echo substr($p['product_name'], 0, 50) ?></p>
                            <p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
                        </div>
                    </a>
                <?php }}else{ ?>
                    <p>Produk Tidak Ada</p>
                <?php } ?>
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