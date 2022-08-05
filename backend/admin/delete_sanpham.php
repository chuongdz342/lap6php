<?php
 include_once("../connect.php");
 print_r(isset($_GET['id']));
    if(isset($_GET['id']) && $_GET['atc']=='xoa'){
        $sql = "DELETE FROM loaisp WHERE maloai =".$_GET['id'];
        $res = $db->exec($sql);
        header('Location: ../index.php');
    }

