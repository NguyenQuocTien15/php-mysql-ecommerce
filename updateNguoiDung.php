<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/login_logout.css">
    <title>Document</title>
</head>
<body>
<form action="UpDateNguoiDung_Controller.php" method="post">
        <h1>UPDATE NGUOI DUNG</h1>
        <h2><input type="text" placeholder="Mã Người Dùng" name="ma"></h2>
        <h2><input type="text" placeholder="Tên" name="ten"></h2>
        <h2><input type="text" placeholder="email" name="email"></h2>
        <h2><input type="password" placeholder="Mat khau" name="matkhau" id=""></h2>
        <h2><input type="submit" value="UpDate"><br></h2>
    </form>
</body>
</html>