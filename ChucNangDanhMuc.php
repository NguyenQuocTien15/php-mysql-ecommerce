<?php
include_once "danhmucDAO.php";
$sql = new danhmucDAO();
$danhsach = $sql->getAllDanhMuc();
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
    <!-- <div class="row"></div> -->
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Mã Loại Sản Phẩm</th>
                <th scope="col">Tên Loại Sản Phẩm</th>
                <th scope="col">Ghi Chú</th>
                <th scope="col">Chức Năng</th>
            </tr>
        </thead>
        <div class="row">
            <?php
            foreach ($danhsach as $value) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $value['madanhmuc'] ?></td>
                        <td><?php echo $value['tendanhmuc'] ?></td>
                        <td><?php echo $value['ghichu'] ?></td>
                        <td>
                            <div class="card-body">
                                <a href="dellDanhMuc.php?madanhmuc=<?php echo $value['madanhmuc']; ?>" class="btn btn-primary">Xoa</a>
                                <a href="UpDateDanhMuc.php?maLoai=<?php echo $value['madanhmuc']; ?>" class="btn btn-primary">Sua</a>
                            </div>

                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
            <div class="card-body">
                
                <a href="index.php" class="btn btn-primary">Trang Chu</a>
            </div>
        </div>
    </table>
    <div class="card-body">
        <a href="addDanhMuc.php?id=<?php echo $value['madanhmuc']; ?>" class="btn btn-primary">Insert</a>
        
    </div>
</body>
</html>