<?php
    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location.href="login.php";</script>';
    }
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
                <li><a href="dashboard.php" class="active">Beranda</a></li>
                <li><a href="category.php">Data Kategori</a></li>
                <li><a href="product.php">Data Produk</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div>
    </header>
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Beranda Admin</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->username ?> di Pasar UMKM</h4>
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