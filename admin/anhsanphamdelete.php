<?php
include "header.php";
include "leftside.php";

 ?>
<?php
$product = new product();
if (isset($_GET['sanpham_anh_id'])|| $_GET['sanpham_anh_id']!=NULL){
    $sanpham_anh_id = $_GET['sanpham_anh_id'];
    }
    $delete_anh_sanpham = $product -> delete_anh_sanpham($sanpham_anh_id);
    header('Location:productlist.php?');
?>
