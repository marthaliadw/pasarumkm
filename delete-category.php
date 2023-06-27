<?php

    include 'db.php';

    if(isset($_GET['idk'])){
        $delete = mysqli_query($conn, "DELETE FROM category WHERE category_id = '".$_GET['idk']."' ");
        echo '<script>window.location="category.php"</script>';
    }

?>