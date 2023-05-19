<?php
include "header.php";
include "leftside.php";

 ?>
<?php
$customer = new customer();
if (!isset($_GET['makhachhang'])|| $_GET['makhachhang']==NULL){
    echo "<script>window.location = 'customerlist.php'</script>";
	 }
else {$makhachhang = $_GET['makhachhang'];
    }
    $delete_customer = $customer  -> delete_customer($makhachhang);
    header('Location:customerlist.php');
?>