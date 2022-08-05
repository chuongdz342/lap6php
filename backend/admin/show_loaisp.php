<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quản lí sp</title>
</head>

<?PHP 
include_once("../connect.php");
$sql1 = "select * from sanpham";
$result1 = $db -> query($sql1);



?>
<body>
    <table class="table">
        <tr>
            <td scope="col">Mã sp</td>
            <td scope="col">Tên sp</td>
            <td scope="col">Anh đại diện</td>
            <td scope="col">Giá Cũ </td>
            <td scope="col">Giá mới</td>
            <td scope="col">Loại SP</td>
        </tr>
        <?PHP 
        while($row = $result1->fetch()){
            ?>
            <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row["TenSP"]; ?></td>
            <td><img src="<?PHP ?>" alt=""></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row['LoaiSP']; ?></td>
        </tr>
        <?PHP } ?>
        
        
    </table>
</body>
</html>