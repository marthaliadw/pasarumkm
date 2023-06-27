<?php
    session_start();
    include 'db.php';
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
                <li><a href="dashboard.php">Beranda</a></li>
                <li><a href="category.php" class="active">Data Kategori</a></li>
                <li><a href="product.php">Data Produk</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div>
    </header>
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Tambah Kategori Baru</h3>
            <div class="box">
            <form action="" method="POST">
                <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
            <?php
                if(isset($_POST['submit'])){

                    $nama = ucwords($_POST['nama']);

                    $insert = mysqli_query($conn, "INSERT INTO category VALUES(
                                    null,
                                    '".$nama."') ");
                    if($insert){
                        echo '<script>alert("Category Added")</script>';
                        echo '<script>window.location="category.php"</script>';
                    }else{
                        echo 'Error' .mysqli_error($conn);
                    }
                }
            ?>
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