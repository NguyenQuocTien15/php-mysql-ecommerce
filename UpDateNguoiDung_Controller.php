<?php
    include_once "nguoidungDAO.php";
    $ma = $_POST['ma'];
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $sql = new nguoidungDAO();
    $update = $sql->updateNguoiDung($ma,$ten,$email,$matkhau);
    header('location:taikhoan.php');
?>