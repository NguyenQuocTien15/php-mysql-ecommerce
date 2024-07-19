<?php
    session_start();
    if(isset($_GET['masanpham'])){
        $masanpham = $_GET['masanpham'];
        unset($_SESSION['cart'][$masanpham]);
    }
    else{
        unset($_SESSION['cart']);
    }
    header("location:addcart.php");
?>