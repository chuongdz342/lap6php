<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loại sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<?php
    include_once("connect.php");
    $sql = "select * from loaisp";
    $results = $db->query($sql);        
    // while($row = $results->fetch()){
    //     echo $row["MaLoai"]."--->".$row["TenLoai"]."<br>";
    // }
    
    ?>

<body>

    <table class="table table-collapse">

        <tr>

            <td class="col-md-3">Mã Loại    </td>
            <td class="col-md-3">Loại Sản Phẩm</td>
            <td class="col-md-3"><a href="./admin/insert_loaisp.php">Thêm</a></td>


        </tr>

        <?PHP

while ($row = $results->fetch())

{ ?>

        <tr>

            <td>
                <?PHP echo $row[0]; ?>
            </td>
            <td>
                <?PHP echo $row[1]; ?>
            </td>
            <td><a href="./admin/edit_loaisp.php?query=edit&maloai=<?php echo $row['MaLoai'] ?>">Sửa</a> - <a href="./admin/delete_sanpham.php?atc=xoa&id=<?php echo $row['MaLoai']?>">Xóa</a></td>

        </tr> <?php



} ?>

    </table>

</body>

</html>