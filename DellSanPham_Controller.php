<?php
    include_once "sanphamDAO.php";
    $ma = $_POST['ma'];
    $sql = new sanphamDAO();
    $del = $sql->dellSanPham($ma);
    header("location:index.php");
?>