<?php session_start();
if(isset($_GET['masanpham'])):
    $masanpham = $_GET['masanpham'];
    if(isset($_SESSION['cart'][$masanpham])):
        $_SESSION['cart'][$masanpham]++;
    else:
        $_SESSION['cart'][$masanpham] = 1;
    endif;
endif;
header('location:addcart.php');