<?php
    include_once "nguoidungDAO.php";
    $ma = $_GET['ma'];
    $sql = new nguoidungDAO();
    $del = $sql->dellNguoiDung($ma);
    header('location:taikhoan.php');
?>