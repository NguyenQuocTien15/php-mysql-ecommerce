<?php
    include_once "danhmucDAO.php";
    $maLoai = $_POST['ma'];
    $tenLoai = $_POST['ten'];
    $ghiChu = $_POST['ghichu'];
    $sql = new danhmucDAO();
    $update = $sql->updateDanhMuc($maLoai,$tenLoai,$ghiChu);
    header("location:ChucNangDanhMuc.php");
?>