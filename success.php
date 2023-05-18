<?php
include "header.php";
$session_id = session_id();
?>
    <!-- -----------------------DELIVERY---------------------------------------------- -->
    <section class="success">
            <div class="success-top">
                <p>ĐẶT HÀNG THÀNH CÔNG</p>
            </div>
            <div class="success-text">
             <?php
                $show_cartC = $index -> show_cartC($session_id);
                if($show_cartC){while($result = $show_cartC->fetch_assoc()){
            ?> 
                <p>Chào <span  style="font-size: 20px; color: #378000;"><?php echo $result['customer_name'] ?></span>, đơn hàng của bạn đã được đặt thành công. <br>
                    Đơn hàng của bạn đã được xác nhận tự động. <br>
                    <span style="font-weight: bold;">Tthời gian giao hàng dự kiến từ 5-10 ngày</span><br>
                    <span style="color: red;">Đơn hàng đươc xử lý tự động và sẽ giao cho bạn trong thời sớm nhất)</span><br>
                    
            <?php
             }}
            ?>
            
            </div>
            <div class="success-button">
                <a href="detaill.php"><button>XEM CHI TIẾT ĐƠN HÀNG</button></a>
                <a href="index.php"><button>TIẾP TỤC MUA SẮM</button></a>
            </div>
            <p>Mọi thắc mắc quý khách vui lòng liên hệ hotline <span  style="font-size: 20px; color: red;">090113 </span> 
    </section>

     <!-- -------------------------Footer -->
<?php
include "footer.php"
?>