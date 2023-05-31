<?php
include "header.php";
include "leftside.php"
?>
<?php
if (isset($_GET['loaisanpham_id'])|| $_GET['loaisanpham_id']!=NULL){
    $loaisanpham_id = $_GET['loaisanpham_id'];
    }
    $get_loaisanpham = $index -> get_loaisanpham($loaisanpham_id);
   
?>

<div class="cartegory-right">
                    <div class="cartegory-right-top row">
                        <div class="cartegory-right-top-item ">
                        <?php  
                        $get_loaisanphamA = $index -> get_loaisanphamA($loaisanpham_id);
                        if($get_loaisanphamA){$result = $get_loaisanphamA ->fetch_assoc();} 
                        ?>
                            <p><?php if(isset($result['loaisanpham_ten'])) {echo $result['loaisanpham_ten'];}else {echo "Hiện tại chưa có loại sản phẩm nào";}?></p>
                        </div>
                        
                        <div class="cartegory-right-top-item">
                            <select  id="" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                <option value="">Sắp xếp</option>
                                <option value="">Giá cao đến thấp</option>
                                <option value="">Giá thấp đến cao</option>
                            </select>
                        </div>
                    </div>
                    <div class="cartegory-right-content row">
                        <?php
                       if($get_loaisanpham){while($resultB = $get_loaisanpham ->fetch_assoc()){
                        ?>
                        <div class="cartegory-right-content-item">
                            <a href="product.php?sanpham_id=<?php echo $resultB['sanpham_id']?>"><img src="admin/uploads/<?php echo $resultB['sanpham_anh']?>" alt=""></a>
                            <a href="product.php?sanpham_id=<?php echo $resultB['sanpham_id']?>"> <h1><?php echo $resultB['sanpham_tieude']?></h1></a>
                            <p><?php $resultA = number_format($resultB['sanpham_gia']); echo $resultA?><sup>đ</sup></p>
                           
                        </div>
                        <?php
                        }}
                        ?>
                    </div>
                    <div class="cartegory-right-bottom row">
                        <div class="cartegory-right-bottom-items">
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------Footer -->
<?php
include "footer.php"
?>