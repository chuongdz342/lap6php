<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<?PHP 
include_once("connect.php");
$sql1 = "select * from sanpham";
$result1 = $db -> query($sql1);


?>

<body>
<button type="button" class="btn btn-lg btn-primary" disabled>Thêm</button>
<button type="button" class="btn btn-secondary btn-lg" disabled>Xóa</button>
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
        <?PHP 
        while($row = $result1->fetch()){
            ?>
        <tr>
            <td><?php echo $row['MaSP']; ?></td>

            <td><?php echo $row['TenSP']; ?></td>
            <td><img src="<?PHP echo $row['HinhDaiDien']; ?>" style="width:70px;height:70px;" alt=""></td>

            <td><?php echo $row['GiaCu']; ?></td>
            <td><?php echo $row['GiaMoi']; ?></td>

            <td><?php echo $row['LoaiSP']; ?></td>
            <td><?php echo $row['MoTa']; ?></td>
            <td>
                            <a style="color: red;" href="">Fix</a>|
                            <a style="color: red;" href="./qlloai/delete.php?query=delete&maloai=<?php echo $row['maloai'] ?>" onclick="alert('Are you sure delete')">Delete</a>
                        </td>
        <?PHP } ?>

    </table>
</body>

</html>