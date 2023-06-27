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
            <h3>Tambah Data Produk</h3>
            <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <select class="input-control" name="category" required>
                    <option value="">--Pilih Kategori--</option>
                    <?php
                        $category = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
                        while($r = mysqli_fetch_array($category)){
                    ?>
                    <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category_name'] ?></option>
                    <?php } ?>
                </select>

                <input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
                <input type="text" name="harga" class="input-control" placeholder="Harga Produk" required>
                <input type="file" name="gambar" class="input-control" required>
                <input type="text" name="kontak" class="input-control" placeholder="Kontak Penjual" required>
                <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea><br>
                <select class="input-control" name="status">
                    <option value="">--Pilih Status Produk--</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
            <?php
                if(isset($_POST['submit'])){

                    // print_r($_FILES['gambar']);
                    // menampung inputan dari form
                    $category   = $_POST['category'];
                    $nama       = $_POST['nama'];
                    $harga      = $_POST['harga'];
                    $kontak     = $_POST['kontak'];
                    $deskripsi  = $_POST['deskripsi'];
                    $status     = $_POST['status'];

                    // menampung data file yang diupload
                    $filename   = $_FILES['gambar']['name'];
                    $tmp_name   = $_FILES['gambar']['tmp_name'];

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
                        // jika format file sesuai dengan yang ada di dalam array tipe yang diizinkan
                        // proses upload file sekaligus insert database
                        move_uploaded_file($tmp_name, './produk/' .$newname);

                        $insert = mysqli_query($conn, "INSERT INTO product VALUES (
                                    null,
                                    '".$category."',
                                    '".$nama."',
                                    '".$harga."',
                                    '".$deskripsi."',
                                    '".$newname."',
                                    '".$status."',
                                    '".$kontak."',
                                    null
                                        ) ");

                        if($insert){
                            echo '<script>alert("Tambah Data Berhasil")</script>';
                            echo '<script>window.location="product.php"</script>';
                        }else{
                            echo 'Gagal' .mysqli_error($conn);
                        }

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