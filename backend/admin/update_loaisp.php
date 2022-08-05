<?php
 include('../connect.php');
 $maloai = $_POST['maloai'];
 $tenloai= $_POST['tenloai'];
 if(isset($_POST['sua'])){
 $sql = "UPDATE loaisp SET MaLoai='".$maloai."',TenLoai='".$tenloai."' WHERE MaLoai='$_GET[maloai]'";
    $kq = $db->query($sql);
 }
header('Location:../index.php');
?>