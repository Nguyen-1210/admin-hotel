<?php 

$server = new mysqli("localhost","root","","duan1_n_h");
session_start();
error_reporting(0);
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM account_admin WHERE email='$email' AND password='$password'";
	$result = mysqli_query($server, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		 $int = 'Rất tiếc! Email hoặc mật khẩu sai';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>ADMIN LOGIN</title>
    <link rel="shortcut icon" href="../admin/images/favicon.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="./css/form.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
			<img src="images/logo.png">
				<h2 class="title">Welcome Admin</h2>
				<h4> <?php echo $int ?></h4>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
							  <!-- <input type="email" class="input" name="email"
							  value="<?php echo $email; ?>" required> -->
							  <input type="email" class="input" name="email"
							 required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mật khẩu</h5>
						   <!-- <input type="password" class="input"  name="password"
						   value="<?php echo $_POST['password']; ?>"> -->
						   <input type="password" class="input"  name="password"
						  >
            	   </div>
            	</div>
				
            	<a href="forgot.php"style="margin-left: 230px;">Quên mật khẩu?</a>
				<input type="submit" value="Đăng nhập" name="submit" class="btn">

            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

