<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>
<?PHP 
include_once("../connect.php");
if(isset($_POST["btnthem"])){
    $tenloai = $_POST["txtLoaiSP"];
    if($tenloai!=""){
        $sql = "INSERT INTO `loaisp`(`MaLoai`, `TenLoai`) VALUES (null,'$tenloai')";
            $r = $db->exec($sql);
        if($r == true){
             header("location:../index.php");
        }
    }
    else {
        echo "vui long them gi do";
    }
}


?>
<body>
    <form action="" method="post">
        Tên loại sp: <input type="text" name="txtLoaiSP" id="">
        <input type="submit" name="btnthem" value="Thêm">
    </form>
</body>
</html>