<?php
include "header.php";
include "leftside.php";

 ?>
<?php
$brand = new brand;
if (isset($_GET['loaisanpham_id'])|| $_GET['loaisanpham_id']!=NULL){
    $loaisanpham_id = $_GET['loaisanpham_id'];
    }
    $delete_brand = $brand -> delete_brand($loaisanpham_id);
    header('Location:brandlist.php');
?>
