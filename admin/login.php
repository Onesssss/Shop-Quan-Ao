<?php
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'../admin/class/admin_class.php');
Session::init();

?>
<?php
$admin = new admin();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $userpassword = md5($_POST['userpassword']);
    // var_dump($_POST);
	$check_admin = $admin ->check_admin($username,$userpassword);
}

?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>

    <link rel="stylesheet" type="text/css" href="../admin/css/style.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<span><?php
			if(isset($check_admin)){
				echo $check_admin;
			}
			?></span>
			<div>
				<input type="text" placeholder="username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="password" required="" name="userpassword"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>