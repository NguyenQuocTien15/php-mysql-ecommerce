ssinclude "danhmucDAO.php";
include_once "sanphamDAO.php";

$danhmucDAO = new danhmucDAO();
$sanphamDAO = new sanphamDAO();

$loaidanhmuc = "";
if (!empty($_GET['madanhmuc'])) {
    $loaidanhmuc = $_GET['madanhmuc'];
}

$danhSachDanhMuc = $danhmucDAO->getAllDanhMuc();
$danhSachSanPham = $sanphamDAO->getAllSanPhamtheoDanhMuc($loaidanhmuc);
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
    <title>Trang chủ</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="login.php"><i class="fa-solid fa-right-from-bracket"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="padding: 0px 20px;">
                            <a class="nav-link active" aria-current="page" href="taikhoan.php">Tai Khoan </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Trang chu </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="ChucNangDanhMuc.php">Danh Mục Sản Phẩm: </a>
                        </li>
                        <?php
                        foreach ($danhSachDanhMuc as $values) {
                        ?>
                            <li class="nav-item"><a class="nav-link" href="index2.php?madanhmuc=<?php echo $values['madanhmuc'] ?>"><?php echo $values['tendanhmuc'] ?></a></li>

                        <?php
                        }
                        ?>

                    </ul>
                    <form action="KetQuaTimKiem.php" method="GET" class="d-flex" role="search">
                        <input class="form-control me-2" name="timkiemsanpham" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="row">
        <div class="card-body">
            <a href="AddSanPham.php" class="btn btn-primary">Them</a>
            <a href="DelSanPham.php" class="btn btn-primary">Xoa</a>
            <a href="editSanPham.php" class="btn btn-primary">Sua</a>
        </div>               

        <div class="row">
            <?php
            foreach ($danhSachSanPham as $value) {
            ?>
                <div class="col-md-6">
                    <div class="card" style="width: 30rem;">
                        <div class="product-img w-100">
                            <img class="card-img-top img-fluid" src="<?php echo "data:image;base64,".base64_encode($value['hinh']) ?>" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-danger"><?php echo "Mã Sản Phẩm: ". $value['masanpham']; ?></h5>
                            <h5 class="card-title"> <a href='detail.php?id=<?php echo $value['masanpham']; ?>'><?php echo  $value['tensanpham'] ?></a></h5>
                            <h5 class="card-title text-danger"><?php echo "Giá: " .number_format( $value['gia']); ?></h5>

                            <p class="card-text"><?php echo substr($value['mota'], 0, 50) ?> <a href='detail.php?id=<?php echo $value['masanpham']; ?>'>[...]</a></p>
                            <a href="cart.php?masanpham=<?php echo $value['masanpham']; ?>" class="btn btn-primary">Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>