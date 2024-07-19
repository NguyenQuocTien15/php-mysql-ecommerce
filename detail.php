<?php
include_once "sanphamDAO.php";
// trang chu truyen id detail truyen id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sanphamDao = new sanphamDAO();
    $sanpham = $sanphamDao->getSanPhamTheoMa($id);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/all.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="col-md-6">
        <div class="card" >
        <img class="card-img-top img-fluid" src="<?php echo "data:image;base64,".base64_encode($sanpham['hinh']) ?>" alt="...">
            <div class="card-body">
            <h5 class="card-title text-danger"><?php echo "Mã Sản Phẩm: ". $sanpham['masanpham']; ?></h5>
                <h5 class="card-title"><?php echo $sanpham['tensanpham']; ?></h5>
                <h5 class="card-title text-danger"><?php echo "Giá: " .number_format( $sanpham['gia']) ?></h5>
                <p class="card-text"><?php echo $sanpham['mota'] ?></p>
                <a href="cart.php?masanpham=<?php echo $sanpham['masanpham']; ?>" class="btn btn-primary">Thêm vào giỏ</a>
            </div>
        </div>
    </div>
    <a href="index.php">Trang Chu</a>
</body>
</html>