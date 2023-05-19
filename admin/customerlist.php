<?php
include "header.php";
include "leftside.php";

$customer = new customer;
$show_customer = $customer -> show_customer()
?>
       <div class="admin-content-right">
            <div class="table-content">
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>Tài Khoản</th>
                        <th>Mật Khẩu</th>
                        <th>Họ Tên </th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    if($show_customer){$i=0; while($result= $show_customer->fetch_assoc()){
                        $i++
                   
                    ?>
                    <tr>
                        <td> <?php echo $i ?></td>
                        <td> <?php echo $result['taikhoan'] ?></td>
                        <td> <?php echo $result['matkhau']  ?></td>
                        <td> <?php echo $result['customer_name']  ?></td>
                        <td><a href="customerdelete.php?makhachhang=<?php echo $result['makhachhang'] ?>">Xóa</a></td>
                    </tr>
                    <?php
                     }}
                    ?>
                   
                </table>
               </div>        
        </div>
    </section>
    <section>
    </section>
    <script src="js/script.js"></script>
</body>
</html>  