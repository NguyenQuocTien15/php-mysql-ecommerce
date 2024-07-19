<?php
    $ten = $_POST['ten'];
    $pass = $_POST['matkhau'];
    $db = mysqli_connect("localhost","root","","project");
    $sql = "SELECT * FROM `nguoidung` WHERE `ten`='{$ten}' AND `matkhau`='{$pass}'";
    $rs = mysqli_query($db,$sql);
    if(mysqli_num_rows($rs)>0){
        header("location:index.php");
    }
    else{
        header("location:login.php");
      
    }
   
?>