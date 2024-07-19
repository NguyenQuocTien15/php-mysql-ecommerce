<?php
session_start();
include_once "sanphamDAO.php";
$sanphamDAO = new sanphamDAO();
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
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th scope="col">Mã Sản Phẩm</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">So Luong</th>
                <th scope="col">Gia</th>
                <th scope="col">Add And Minus</th>
                <th scope="col">Del</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <?php
        if (isset($_SESSION['cart'])) {
            $tong = 0;
            foreach ($_SESSION['cart'] as $maProduct => $value) {
                $sanpham = $sanphamDAO->getSanPhamTheoMa($maProduct);
                $tong = $tong + $sanpham['gia'] * $value;    

        ?>
            <div class="row">
                <tbody>
                    <tr>
                        <?php $tongTungMon = $value * $sanpham['gia']; ?>
                        <td><?php echo $sanpham['masanpham'] ?></td>
                        <td><?php echo $sanpham['tensanpham'] ?></td>
                        <td><?php echo $value ?></td>
                        <td><?php echo $sanpham['gia'] ?></td>
                        <td>
                        <div class="card-body">
                                <a href="giam.php?masanpham=<?php echo $maProduct ?>" class="btn btn-primary">-</a>   <a href="them.php?masanpham=<?php echo $maProduct ?>" class="btn btn-primary">+</a>
                            </div>
                        </td>
                        </td>
                        <td>
                        <div class="card-body">
                                <a href="delGiohang.php?masanpham=<?php echo $sanpham['masanpham']; ?>" class="btn btn-primary">Xoa</a>
                            </div>
                        </td>
                        <td><?php echo number_format( $tongTungMon) ; ?></td>
                    </tr>
                </tbody>

            </div>
            <?php }?>
        <?php }
        ?>
    </table>
    <div class="card-body">

        <a href="index.php" class="btn btn-primary">Trang Chu</a>
    </div>
    <?php
    echo "Tong Tien: " . $tong;
    ?>
<!--  -->

</body>

</html>