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
        $err = "";

        if($index ->checkLogin($taikhoan, $matkhau) == false){
            $err = "Sai tài khoản hoặc mật khẩu!";
        }else{
            $_SESSION["logged"] = true;
            $_SESSION["username"] = $taikhoan;
            header("Location: index.php");  
        }
    }
?>

<form method="POST" class="form">
    <div class="container">
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
        <button type="submit">Đăng nhập</button>
        <br>
        <br>
        <div style="width: 100%;">
            <a href="register.php" style="float: right;">Đăng Ký Tài Khoản</a>
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