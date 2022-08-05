<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
include_once '../connect.php';
$sql = "SELECT * FROM sanpham ORDER BY loaisp";
$kq = $db->query($sql);
?>
<table class="table">
        <tr>
            <td scope="col">Mã Sản Phẩm</td>
            <td scope="col">Tên Sản Phẩm</td>
            <td scope="col">Ảnh Đại Diện</td>
            <td scope="col">Giá Cũ</td>
            <td scope="col">Giá Mới</td>
            <td scope="col">Loại Sản Phẩm</td>
            <td scope="col">Mô Tả</td>
            <td scope="col">Chỉnh Sữa</td>

        </tr>
        <?php
                while($row = $kq->fetch()) {
                ?>
                <tbody>
                <td>
                    <input type="text" name="masp" value="<?php echo $_GET['MaSP'] ?>">
                </td>
                <td>
                    <input type="text" name="tensp" value="<?php echo $row['TenSP'] ?>">
                </td>
                <td>
                    <input type="text" name="giacu" value="<?php echo $row['GiaCu'] ?>">
                </td>
                <td>
                    <input type="text" name="giamoi" value="<?php echo $row['GiaMoi'] ?>">
                </td>
                <td>
                    <input type="text" name="hinhdaidien" value="<?php echo $row['HinhDaiDien'] ?>">
                </td>
                <td>
                    <input type="text" name="maloai" value="<?php echo $row['LoaiSP'] ?>">
                </td>
                <td>
                    <input type="text" name="mota" value="<?php echo $row['MoTa'] ?>">
                </td>
                <td>
                    <button name="update">Update</button>
                </td>
            </tbody>
            <?php } ?>
    
</body>
</html>