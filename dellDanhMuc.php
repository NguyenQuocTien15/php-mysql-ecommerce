<?php
    include_once "danhmucDAO.php";
    $id = $_GET['madanhmuc'];
    $sql = new danhmucDAO();
    $dell = $sql->dellDanhMuc($id);
    header("location:ChucNangDanhMuc.php");
?>