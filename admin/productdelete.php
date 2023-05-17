<?php
include "header.php";
include "leftside.php";

 ?>
<?php
$product = new product();
if (!isset($_GET['sanpham_id'])|| $_GET['sanpham_id']==NULL){
    echo "<script>window.location = 'productlist.php'</script>";
	 }
else {$sanpham_id = $_GET['sanpham_id'];
    }
    $delete_product = $product  -> delete_product($sanpham_id);
    $delete_product_anh =  $product -> delete_product_anh($sanpham_id);
    header('Location:productlist.php');
?>