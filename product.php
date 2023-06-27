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
                <li><a href="category.php">Data Kategori</a></li>
                <li><a href="product.php" class="active">Data Produk</a></li>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div>
    </header>
    
    <!-- content -->
    <div class="section">
        <h3>Daftar Produk</h3>
        <div class="box">
            <p><a href="add-product.php">Tambah Data Produk</a></p>
            <table border="1" cellspacing="0" class="table">
                <thead>
                    <tr>
                        <th width="60px">No</th>
                        <th>Kategori</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $product = mysqli_query($conn, "SELECT * FROM product LEFT JOIN category USING (category_id) ORDER BY product_id DESC");
                        if(mysqli_num_rows($product) > 0){
                        while($row = mysqli_fetch_array($product)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['category_name'] ?></td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td>Rp. <?php echo number_format($row['product_price'])  ?></td>
                        <td><a href="produk/<?php echo $row['product_image'] ?>" target="_blank"><img src="produk/<?php echo $row['product_image'] ?>" width="100px"></a></td>
                        <td><?php echo ($row['product_status'] == 0)? 'Tidak Aktif':'Aktif'; ?></td>
                        <td>
                            <a href="edit-product.php?id=<?php echo $row['product_id'] ?>">Edit</a> || <a href="
                            delete-product.php?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('Kamu Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php }}else{ ?>
                        <tr>
                            <td colspan="8">Tidak Ada Data</td>
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