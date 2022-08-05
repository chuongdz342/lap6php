
<?php
 include('../connect.php');
 $sql = "SELECT * FROM loaisp WHERE MaLoai='$_GET[maloai]' LIMIT 1";
    $kq = $db->query($sql);


?>
<title>Sửa sản phẩm </title>
<table class='table table-striped table-bordered table-dark table-hover'>
    <form method="post" action="update_loaisp.php?maloai=<?php echo $_GET['maloai']?>">
       
        
        <thead>
            <tr>
                <th scope='col'>Mã Loại</th>
                <th scope='col'>Tên Loại</th>
                <th scope='col'>Thực hiện</th>
            </tr>
        </thead>

       <?php 
        // while ($row = $query->fetch(PDO::FETCH_BOTH)) {
            // while($edit = $kn->fetch()){
            ?>
             <?php
            while ($row = $kq->fetch()) {

            ?>
            <tbody>
                <tr>
                    <td><input type="text" value="<?php echo $row['MaLoai']?>" class="form-control" name="maloai"></td>
                    <td><input type="text" value="<?php echo $row['TenLoai']?>" class="form-control" name="tenloai"></td>
                    <td><button class="btn btn-info" name="sua"> Cập nhật</button></td>
                </tr>
            </tbody>

            <?php 
       }?>
      


    </form>
</table>