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
    <form action="editSanPham_controller.php" method="post" enctype="multipart/form-data">
        <h1>UPDATE SAN PHAM</h1>
        <h4> <input type="text" placeholder="Ma San Pham" name="ma" id="ma"></h4>
        <h4><input type="text" placeholder="ten San Pham" name="ten" id="ten"></h4>
        <h4><input type="text" placeholder="Gia" name="gia" id="gia"></h4>
        <h4><input type="text" placeholder="Mo Ta" name="mota" id="mota"></h4>
        <h4><input type="file"  name="hinh" id="hinh"></h4>
        <h4><input type="text" placeholder="Ma Loai San Pham" name="maloai" id="maloai"></h4>
        <input type="submit"  name ="submit">
    </form>
</body>
</html>