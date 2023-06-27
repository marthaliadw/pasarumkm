<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location.href="login.php";</script>';
    }

    $product = mysqli_query($conn, "SELECT * FROM product WHERE product_id ='".$_GET["id"]."' ");
    if(mysqli_num_rows($product) == 0){
        echo '<script>window.location="product.php"</script>';
    }
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
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
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
        <div class="container">
            <h3>Edit Data Produk</h3>
            <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <select class="input-control" name="category" required>
                    <option value="">--Pilih Kategori--</option>
                    <?php
                        $category = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
                        while($r = mysqli_fetch_array($category)){
                    ?>
                    <option value="<?php echo $r['category_id'] ?>" <?php echo ($r['category_id'] == $p->category_id)? 'selected':''; ?>><?php echo $r['category_name'] ?></option>
                    <?php } ?>
                </select>

                <input type="text" name="nama" class="input-control" placeholder="Nama Produk" value="<?php echo $p->product_name ?>" required>
                <input type="text" name="harga" class="input-control" placeholder="Harga Produk" value="<?php echo $p->product_price ?>" required>
                <input type="text" name="kontak" class="input-control" placeholder="Kontak Penjual" value="<?php echo $p->contact_seller ?>" required>
                
                <img src="produk/<?php echo $p->product_image ?>" width="100px">
                <input type="hidden" name="foto" value="<?php echo $p->product_image ?>">
                <input type="file" name="gambar" class="input-control">
                <textarea class="input-control" name="deskripsi" placeholder="Deskripsi" ><?php echo $p->product_description ?></textarea><br>
                <select class="input-control" name="status">
                    <option value="">--Pilih Status Produk--</option>
                    <option value="1" <?php echo ($p->product_status == 1)? 'selected':''; ?>>Aktif</option>
                    <option value="0" <?php echo ($p->product_status == 0)? 'selected':''; ?>>Tidak Aktif</option>
                </select>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
            <?php
                if(isset($_POST['submit'])){

                    // data inputan dari form
                    $category   = $_POST['category'];
                    $nama       = $_POST['nama'];
                    $harga      = $_POST['harga'];
                    $kontak     = $_POST['kontak'];
                    $deskripsi  = $_POST['deskripsi'];
                    $status     = $_POST['status'];
                    $foto       = $_POST['foto'];

                    // data gambar yang baru
                    $filename   = $_FILES['gambar']['name'];
                    $tmp_name   = $_FILES['gambar']['tmp_name'];

                    

                    // jika admin ganti gambar
                    if($filename != ''){
                        $type1  = explode('.', $filename);
                        $type2  = $type1[1];

                        $newname    = 'produk'.time().'.'.$type2;

                    // menampung data format file yang diizinkan
                    $file_type = array('jpg', 'jpeg', 'png', 'gif');

                        // validasi format file
                        if(!in_array($type2, $file_type)){

                        // jika format file tidak ada di dalam tipe yang diizinkan
                        echo '<script>alert("Format file tidak diizinkan")</script>';

                        }else{
                            unlink('./produk/'.$foto);
                            move_uploaded_file($tmp_name, './produk/' .$newname);
                            $namagambar = $newname;
                        }
                    
                    }else{
                        // jika admin tidak ganti gambar
                        $namagambar = $foto;
                    }

                    // query update data produk
                    $update = mysqli_query($conn, "UPDATE product SET
                                            category_id = '".$category."',
                                            product_name = '".$nama."',
                                            product_price = '".$harga."',
                                            product_description = '".$deskripsi."',
                                            product_image = '".$namagambar."',
                                            product_status = '".$status."',
                                            contact_seller = '".$kontak."'
                                            WHERE product_id = '".$p->product_id."' ");
                    if($update){
                        echo '<script>alert("Tambah Data Berhasil")</script>';
                        echo '<script>window.location="product.php"</script>';
                    }else{
                        echo 'Gagal' .mysqli_error($conn);
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
    <script>
        CKEDITOR.replace( 'deskripsi' );
    </script>
</body>        
</html>