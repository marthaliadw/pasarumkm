<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Pasar UMKM</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" class="input-control">
            <input type="password" name="password" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="login" class="btn">
        </form>
        <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'db.php';

                $username = mysqli_real_escape_string($conn, $_POST['username']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);

                $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
                if(mysqli_num_rows($cek) > 0){
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    $_SESSION['id'] = $d->id;
                    echo '<script>window.location="dashboard.php"</script>';
                }else{
                    echo 'Username atau Password Salah !';
                }
            
            }   
        ?>
    </div>         
</body>        
</html>