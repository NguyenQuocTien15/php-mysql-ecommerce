<?php
    session_start();
    $masanpham= $_GET['masanpham'];
    if(isset($_GET['masanpham'])){
       
        if(isset($_SESSION['cart'][$masanpham])){
            $_SESSION['cart'][$masanpham]++;
        }
        else{
            $_SESSION['cart'][$masanpham] = 1;
        }
    }
    header('location:addcart.php');
?>