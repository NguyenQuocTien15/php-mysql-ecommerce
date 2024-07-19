



<?php
    include_once  "sanphamDAO.php";
    $ma = $_POST['ma'];
	$ten = $_POST['ten'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
	$hinh = addslashes(file_get_contents($_FILES['hinh']['tmp_name']));
	$maloai = $_POST['maloai'];
    $sql = new sanphamDAO();
    $add = $sql->addSanPham($ma,$ten,$gia,$mota,$hinh,$maloai);
    header("location:index.php");
?>