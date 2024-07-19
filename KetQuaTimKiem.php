<?php
include_once "sanphamDAO.php";
$tukhoa = "";
if (isset($_GET['timkiemsanpham'])) {
    $tukhoa = $_GET['timkiemsanpham'];
}
$sanphamDAO = new sanphamDAO();
$timkiemsanphamDAO = $sanphamDAO->searchSanPham($tukhoa);
$prepage = 2;
$page = 1;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
$danhSachPhantrang = $sanphamDAO->searchSanPham_PhanTrang($tukhoa, $prepage, $page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/all.min.css">
    <title>Document</title>
</head>
<body>
<div class="row">
    <?php
    foreach ($danhSachPhantrang as $value) {    
    ?>
       
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="product-img">
                    <img class="card-img-top img-fluid" src="<?php echo "data:image;base64,".base64_encode($value['hinh']) ?>" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-danger"><?php echo "Mã Sản Phẩm: " . $value['masanpham']; ?></h5>
                        <h5 class="card-title"> <a href='detail.php?id=<?php echo $value['masanpham']; ?>'><?php echo  $value['tensanpham'] ?></a></h5>
                        <h5 class="card-title text-danger"><?php echo number_format( $value['gia']); ?></h5>

                        <p class="card-text"><?php echo substr($value['mota'], 0, 50) ?> <a href='detail.php?id=<?php echo $value['masanpham']; ?>'>[...]</a></p>
                        <a href="cart.php?id=<?php echo $value['masanpham']; ?>" class="btn btn-primary">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>

        <?php
    }
        ?>
</div>
        <?php
            $url = $_SERVER['PHP_SELF']."?timkiemsanpham=".$tukhoa;
            // lay danh sach san pham 
            $total = count($timkiemsanphamDAO);
            echo $sanphamDAO ->hienThiPhanTrang($url,$total,$prepage);
        ?>
        <br>
    <a href="index.php"><button>Trang chu</button></a>
</body>
</html>