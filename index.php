<?php
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
                <li><a href="index.php" class="active">Beranda</a></li>
                <li><a href="produk.php">Produk</a></li>
            </ul>
        </div>
    </header>

    <!-- Search -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk">
                <input type="submit" name="cari" value="Cari">
            </form>
        </div>
    </div>

    <!-- Category -->
    <div class="section">
        <div class="container">
            <h3>Kategori</h3>
            <div class="box">
                <?php
                    $category = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
                    if(mysqli_num_rows($category) > 0){
                        while($k = mysqli_fetch_array($category)){
                ?>
                    <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
                        <div class="col-5">
                            <img src="img/category_icon.png" width="50px" style="margin-bottom:7px">
                            <p><?php echo $k['category_name'] ?></p>
                        </div>
                    </a>
                <?php  }}else{ ?>
                    <p>Kategori Tidak Ada</p>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- New Product -->
    <div class="section">
        <div class="container">
            <h3>Produk Terbaru</h3>
            <div class="box">
                <?php
                    $product = mysqli_query($conn, "SELECT * FROM product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
                    if(mysqli_num_rows($product) > 0){
                        while($p = mysqli_fetch_array($product)){
                ?>
                    <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                        <div class="col-4">
                            <img src="produk/<?php echo $p['product_image'] ?>">
                            <p class="nama"><?php echo $p['product_name'] ?></p>
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