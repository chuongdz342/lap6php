<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lí sản phẩm SGM</title>
</head>
<style>
.main {
    width: 50%;
    margin: 0 auto;
}

.menu {
    list-style: none;
    display: flex;
    height: 50px;
    background-color: aquamarine;
    line-height: 50px;
    text-align: center;
}

nav {}

nav li a {
    text-decoration: none;
    padding: 10px 10px;

}
</style>

<body>

    <div class="main">
        <header style="text-align: center;">
            <h1>Trang quản lí sản phẩm SGM</h1>
        </header>
        <nav>
            <ul class="menu">
                <li><a href="?act=loai">Quản lí loại</a></li>
                <li><a href="?act=sp">Quản lí sản phẩm</a></li>
                <li><a href="">Quản lí khách hàng</a></li>
                <li><a href="">Quản lí đơn hàng</a></li>
                <li><a href="">Logout</a></li>
            </ul>
        </nav>
        <article>
            <?PHP 
    require("./connect.php");
    if(isset($_GET["act"])){
        $atc = $_GET["act"];
    }
    else {
        $atc = "loai";
        
    }
    switch($atc){
        case "loai";
        include("./loaisp.php");
        break;
        echo "vui long cho";
        
        case "sp";
        include("./admin/sanpham/qlsp.php");
        break;
        echo "vui long cho";
        default:

    }
    
    ?>
        </article>
        <footer>Design By Chuong 2K12</footer>
    </div>

</body>

</html>