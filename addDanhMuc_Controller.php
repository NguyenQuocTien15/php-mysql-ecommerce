<?php
    include_once "danhmucDAO.php";
    $maLoai = $_POST['ma'];
    $tenLoai = $_POST['ten'];
    $ghichu = $_POST['ghichu'];
    $sql = new danhmucDAO();
    $add = $sql->addDanhMuc($maLoai,$tenLoai,$ghichu);
    header("location:ChucNangDanhMuc.php");
?>