<?php
include "header.php";

if(isset($_SESSION['logged']) && !empty($_SESSION['logged'])){
    header("Location: index.php");  
    die();
}
?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $taikhoan = $_POST['uname'];
        $matkhau = $_POST['psw'];
        $matkhau2 = $_POST['psw2'];    
        $customer_name = $_POST['fname'];  
        $err = "";
        $success = "";

        if($matkhau == $matkhau2){
            if($index->checkUserName($taikhoan) == false){
                if($index->insertUser($taikhoan, $matkhau, $customer_name)){
                    $success = "Thành công! Vui lòng <a style='color: #4caf50; text-decoration: underline;' href='login.php'>Đăng Nhập!</a>";
                }else{
                    $err = "Thất bại! Vui lòng kiểm tra lại.";
                }
            }else{
                $err = "Tài khoản đã tồn tại, vui lòng đăng ký tài khoản khác! Hoặc <a style='color: red; text-decoration: underline;' href='login.php'>Đăng Nhập Ngay!</a>"; 
            }
        }else{
            $err = "Mật khẩu nhập lại không trùng khớp!";
        }
    }
?>

<form method="POST" class="form">
    <div class="container">
        <?php if(isset($success) && !empty($success)){ ?>
            <p style="color: #4caf50; font-weight: bold; text-align: center;"><?php echo $success; ?></p>
            <br>
        <?php } ?>
        <?php if(isset($err) && !empty($err)){ ?>
            <p style="color: red; font-weight: bold; text-align: center;"><?php echo $err; ?></p>
            <br>
        <?php } ?>
        <label for="uname"><b>Tài khoản</b></label>
        <input type="text" placeholder="Nhập tài khoản" name="uname" required>
        <br>
        <br>        
        <label for="psw"><b>Mật khẩu</b></label>
        <input type="password" placeholder="Nhập mật khẩu" name="psw" required>
        <br>
        <br>
        <label for="psw"><b>Nhập lại mật khẩu</b></label>
        <input type="password" placeholder="Nhập lại mật khẩu" name="psw2" required>
        <br>
        <br>        
        <label for="psw"><b>Họ tên</b></label>
        <input type="text" placeholder="Nhập họ tên" name="fname" required>
        <br>
        <br>
        <a href="login.php"><button type="submit">Đăng Ký</button></a>  
        <br>
        <br>
        <div style="width: 100%;">
            <a href="login.php" style="float: right;">Bạn đã có tài khoản? Đăng Nhập</a>
        </div>
    </div>
    
</form>

<style>
    /* Các style cho form */
      .form {
        margin: auto;
        margin-top: 250px;
        width: 50%;
        padding: 20px;
        border: 3px solid #f1f1f1;
      }

      /* Các style cho input */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      /* Các style cho button đăng nhập */
      .form button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      /* Các style cho button hủy */
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }

      /* Các style cho container chứa các item */
      .container {
        padding: 16px;
      }

      /* Đặt kích thước tối đa cho form trên các màn hình nhỏ */
      @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
      }
</style>