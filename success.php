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
                <p> Đơn hàng của bạn đã được đặt thành công. <br>
                    
                    <span style="font-weight: bold;">Thời gian giao hàng dự kiến từ 5-10 ngày</span><br>
                    
            <?php
             }}
            ?>
            
            </div>
            <div class="success-button">
                <a href="detaill.php"><button>XEM CHI TIẾT ĐƠN HÀNG</button></a>
                <a href="index.php"><button>TIẾP TỤC MUA SẮM</button></a>
            </div>

    </section>

     <!-- -------------------------Footer -->
<?php
include "footer.php"
?>