<?php
    include_once "nguoidungDAO.php";
    $id = $_POST['id'];
    $name = $_POST['ten'];
    $email = $_POST['email'];
    $pass=  $_POST['matkhau'];
    $add = new nguoidungDAO();
    $add->addNguoiDung($id,$name,$email,$pass);
    header("location:login.php");
?>