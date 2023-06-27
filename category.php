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
        <h3>Daftar Kategori</h3>
        <div class="box">
            <p><a href="add-category.php">Tambah Data Kategori</a></p>
            <table border="1" cellspacing="0" class="table">
                <thead>
                    <tr>
                        <th width="60px">No</th>
                        <th>Data Kategori</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $category = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
                        if(mysqli_num_rows($category) > 0){
                        while($row = mysqli_fetch_array($category)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['category_name'] ?></td>
                        <td>
                            <a href="edit-category.php?id=<?php echo $row['category_id'] ?>">Edit</a> || <a href="
                            delete-category.php?idk=<?php echo $row['category_id'] ?>" onclick="return confirm('Kamu Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php }}else{ ?>
                        <tr>
                            <td colspan="3">Tidak Ada Data</td>
                        </tr>
                    <?php } ?>    
                </tbody>
            </table>
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