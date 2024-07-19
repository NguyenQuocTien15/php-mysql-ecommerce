<?php session_start();
if(isset($_GET['masanpham'])) {
    $masanpham = $_GET['masanpham'];
    if(isset($_SESSION['cart'][$masanpham]) && $_SESSION['cart'][$masanpham]>1){
        $_SESSION['cart'][$masanpham]--;
        //de hien thong bao
        header('location:addcart.php');
    }
       
    else{
        header("location:delGiohang?masanpham={$_GET['masanpham']}");
    }
       
}