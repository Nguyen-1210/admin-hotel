
<?php 
ob_start();
session_start();
$error = array();

$server = new mysqli("localhost","root","","duan1_n_h");
include_once ("email.php");
	$mode = "enter_email";
	if(isset($_GET['mode'])){
		$mode = $_GET['mode'];
	}
	//something is posted
	if(count($_POST) > 0){
		switch ($mode) {

			/// gởi mã otp về email
			case 'enter_email':
				// code...
				$email = $_POST['email'];
				//validate email
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$error[] = "Nhập email hợp lệ";
				}elseif(!valid_email($email)){
					// không tìm thấy emial trên csdl
					$error[] = "Không tìm thấy email";
				}else{
					// đúng
					echo '<script>alert("Mã xác minh đã được gửi đến địa chỉ email"'.$email.'"Vui lòng xác minh.")</script>';
					send_email($email);
					// send_mail($email,$subject,$message);
					// send_mail($subject,$message);
					$_SESSION['forgot']['email'] = $email;
					header("Location:forgot.php?mode=enter_code");
					die;
				}
				break;
				//
			case 'enter_code':
				// code...
				$code = $_POST['code'];
				$result = is_code_correct($code);
				if($result == "Mã đúng"){
					$_SESSION['forgot']['code'] = $code;
					header("Location: forgot.php?mode=enter_password");
					die;
				}else{
					$error[] = $result;
				}
				break;
			case 'enter_password':
				// code...
				$password = $_POST['password'];
				$password2 = $_POST['password2'];
				if($password !== $password2){
					$error[] = "Mã không khớp";
				}elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
					header("Location:forgot.php");
					die;
				}else{
					
					save_password($password);
					if(isset($_SESSION['forgot'])){
						unset($_SESSION['forgot']);
					}
					header("Location: login.php");
					die;
				}
				break;
			
			default:
				// code...
				break;
		}
	}
	
	function send_email($email){
		global $server;
		$expire = time() + (50 * 1);
		$code = rand(10000,99999);
	$subject = 'Reset N-FURNITURE-H login password';
	$content ='<h2 style="text-align: center;
	font-size: 10px"> Xin chào admin, đây quyền thiết lập lại mật khẩu cho tài khoản admin. <br>
Mã để cập nhật lại mật khẩu của bạn <span style="color: red; font-size: 15px">'.$code.'</span>
Hãy nhập mã xác nhận để cập nhật lại mật khẩu.
	</h2>';
		$email = addslashes($email);
		$query = "insert into codes (email,code,expire) value ('$email','$code','$expire')";
		mysqli_query($server,$query);
		//send email here
		 send_mail($email,$subject,$content);
	}
	function save_password($password){
		global $server;
		
		$email = addslashes($_SESSION['forgot']['email']);
		$query = "update account_admin set password = '$password' where email = '$email' limit 1";
		mysqli_query($server,$query);
	}
	function valid_email($email){
		global $server;
		$email = addslashes($email);
		$query = "select * from account_admin where email = '$email' limit 1";		
		$result = mysqli_query($server,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				return true;
 			}
		}
		return false;
	}
	function is_code_correct($code){
		global $server;
		$code = addslashes($code);
		$expire = time();
		$email = addslashes($_SESSION['forgot']['email']);

		$query = "select * from codes where code = '$code' && email = '$email' order by id desc limit 1";
		$result = mysqli_query($server,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_assoc($result);
				if($row['expire'] > $expire){

					return "Mã đúng";
				}else{
					return "Mã đã hết hạn";
				}
			}else{
				return "Mã không chính xác";
			}
		}
		return "Mã không chính xác";
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forgot - PASSWORD</title>
	<link rel="stylesheet" type="text/css" href="./css/form.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
<style>
	.form-gap {
    padding-top: 70px;
}
</style>

</head>
<body>
	

		<?php 

			switch ($mode) {
				case 'enter_email':
					// code...
					?>

	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/bg.svg">
		</div>
		<div class="login-content">
			<form id="register-form" role="form" autocomplete="off" class="form" method="post" action="forgot.php?mode=enter_email">

			<img src="images/logo.png">
				<h2 class="title">Đặt lại mật khẩu</h2>
           	<h4 style="text-align: center;
    line-height: 50px;
    display: block;
	font-size: 1.2rem;">Nhập email để nhập mã OTP</h4>
				 <h4 style="color: red;">

				 
				   <?php 
				   foreach ($error as $err) {
					   // code...
					   echo $err . "<br>";
				   }
			   ?>
			   </h4>  
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
							
							  <input id="email" name="email"  class="input"  type="email">

           		   </div>
           		</div>
           		
				   <a href="login.php" style="margin-left: 330px;">Đăng nhập</a>
				
				<input name="recover-submit" class="btn" value="Tiếp theo" type="submit">

            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

					<?php				
					break;

				case 'enter_code':
					// code...
					?>

	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/bg.svg">
		</div>
		<div class="login-content">
			<form id="register-form" role="form" autocomplete="off" class="form" method="post" action="forgot.php?mode=enter_code">

			<img src="images/logo.png">
				
				<h2 class="title">Đặt lại mật khẩu?</h2>
           		<h4 class="title">Nhập code để reset mật khẩu</h4>
				
			   <h4 style="color: red;">

				 
<?php 
foreach ($error as $err) {
	// code...
	echo $err . "<br>";
}
?>
</h4>  
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Code</h5>
							  <input id="code"  class="input"  name="code" type="text"  required>

							
							
           		   </div>
           		</div>
           		
				<a href="login.php" style="margin-left: 330px;">Đăng nhập</a>
				<input  class="btn" value="Tiếp tục" type="submit">
				<a href="forgot.php" class="btn" >
					<h5 style="text-align: center;
    line-height: 50px;
    display: block;
	font-size: 1.2rem;">Trở về</h5>
				</a>




            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
   
					<?php
					break;

				case 'enter_password':
					// code...
					?>
			<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/bg.svg">
		</div>
		<div class="login-content">
			<form id="register-form" role="form" autocomplete="off" class="form" method="post" action="forgot.php?mode=enter_password">

				<img src="images/logo.png">
				
				<h2 class="title">Forgot Password?</h2>
           		<h4 class="title">Nhập mật khẩt</h4>
           		<div class="input-div one">
					<!-- <?php 
					foreach ($error as $err) {
						// code...
						echo $err . "<br>";
					}
				?> -->
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nhập mật khẩu</h5>
							  <input id="password"  class="input" name="password"type="text"  required>	
           		   </div>
           		</div>
				   <div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Nhập lại mật khẩu</h5>

						 <input class="input" type="text" name="password2" ><br>

				 </div>
			  </div>
           		
				<a href="login.php">Login</a>

	<input  class="btn" value="Next" type="submit">
				<a href="forgot.php">
					<input type="button" value="Start Over" class="btn">
				</a>


            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
					<?php
					break;
				
				default:
					// code...
					break;
			}

		?>


</body>
</html>