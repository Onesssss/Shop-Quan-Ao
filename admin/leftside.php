<?php
if(isset($_GET['admin_id'])){
    Session::destroyAdmin();
}
?>

<section class="admin-content row space-between">
        <div class="admin-content-left">
        <div class="header-top-left">
            <a href="index.php"></a>
        </div>
            <ul>
            <li><a  href="#"> <img style="width:20px" src="icon/hi.png" alt="">Hello:  <span style="color:blueviolet; font-size:22px"><?php echo Session::get('admin_name') ?></span></a>
                <li><a href="#"><img style="width:30px"  alt="">Đơn hàng</a>
                    <ul>
                        <li><a href="orderlist.php">Chưa hoàn thành</a></li>
                        <li><a href="orderlistdone.php">Đã hoàn thành</a></li>
                        <li><a href="orderlistall.php">Tất cả Đơn hàng</a></li>
                    </ul>
                </li>
                <li><a href="#"><img style="width:20px"  alt="">Danh Mục</a>
                    <ul>
                        <li><a href="cartegorylist.php">Danh sách</a></li>
                        <li><a href="cartegoryadd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><img style="width:20px"  alt="">Loại Sản Phẩm</a>
                    <ul>
                        <li><a href="brandlist.php">Danh sách</a></li>
                        <li><a href="brandadd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><img style="width:20px"  alt="">Màu sắc</a>
                    <ul>
                        <li><a href="colorlist.php">Danh sách</a></li>
                        <li><a href="coloradd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><img style="width:20px"  alt="">Sản phẩm</a>
                    <ul>
                        <li><a href="productlist.php">Danh sách</a></li>
                        <li><a href="productadd.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><img style="width:20px"  alt="">Ảnh Sản phẩm</a>
                    <ul>
                        <li><a href="anhsanphamlists.php">Danh sách</a></li>
                        <li><a href="anhsanphamadds.php">Thêm</a></li>
                    </ul>
                </li>
                <li><a href="#"><img style="width:20px"  alt="">Size Sản phẩm</a>
                    <ul>
                        <li><a href="sizesanphamlists.php">Danh sách</a></li>
                        <li><a href="sizesanphamadds.php">Thêm</a></li>
                    </ul>
                </li>

                <li><a href="#"><img style="width:20px"  alt="">Tài Khoản Khách Hàng</a>
                    <ul>
                        <li><a href="customerlist.php">Danh sách</a></li>
                    </ul>
                </li>

                <li><a href="?admin_id=<?php echo Session::get('admin_id') ?>"> <img style="width:20px"  alt="">Đăng Xuất</a>
                    
                </li>
            </ul>
        </div>