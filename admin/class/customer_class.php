<?php

?>

<?php
class customer
{

   private $db;
   private $fm;

   public function __construct()
   {
       $this ->db = new Database();
   }
   public function show_customer(){
    $query = "SELECT * FROM tbl_customer ORDER BY makhachhang DESC";
    $result = $this -> db ->select($query);
    return $result;
    }

    public function delete_customer($makhachhang){
        $query = "DELETE  FROM tbl_customer WHERE makhachhang = '$makhachhang'";
        $result = $this -> db ->delete($query);
        if($result) {$alert = "<span class = 'alert-style'> Delete Thành công</span> "; return $alert;}
        else {$alert = "<span class = 'alert-style'> Delete Thất bại</span>"; return $alert;}
      
 
 
    }
    }