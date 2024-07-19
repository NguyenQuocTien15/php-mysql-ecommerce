<?php
include_once "nguoidungDAO.php";
$sql = new nguoidungDAO();
$danhsach = $sql->getAllNguoiDung();
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
                <th scope="col">Mã Tài Khoản</th>
                <th scope="col">Tên Tài Khoản</th>
                <th scope="col">Email</th>
                <th scope="col">Mật Khẩu</th>
                <th scope="col">function</th>
            </tr>
        </thead>
        <div class="row">
            <?php
            foreach ($danhsach as $value) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $value['ma'] ?></td>
                        <td><?php echo $value['ten'] ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td><?php echo $value['matkhau'] ?></td>
                        <td>
                            <div class="card-body">
                                <a href="delNguoiDung.php?ma=<?php echo $value['ma'] ?>"class="btn btn-primary"> Xoa</a>
                                <a href="updateNguoiDung.php?ma=<?php echo $value['ma'] ?>"class="btn btn-primary">UpDate</a>
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
</body>
</html>