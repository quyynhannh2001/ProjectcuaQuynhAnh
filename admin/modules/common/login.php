<?php 
	$error = "";
	if (isset($_POST['btn'])){
		$email = $_POST['email'];
		$pass = md5($_POST['pass']);
		$sql = "SELECT id, name FROM admins WHERE email = '$email' AND password = '$pass'";
		$result = mysqli_query($conn, $sql);
		if (!$result){
			$error = mysqli_error($conn);
		}
		else{
			if(mysqli_num_rows($result)==1){
				$row = mysqli_fetch_assoc($result);
				$_SESSION['admin']['id'] = $row['id'];
				$_SESSION['admin']['name'] = $row['name'];
				header("Location:index.php?module=products&action=list");
			}
			else{
				$error = "Thông tin tài khoản không chính xác";
			}
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập Admin</title>
	<meta charset="utf-8">

	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
		}
		#tong{
			width: 1100px;
			height: 100vh;
			margin: auto;
		}
		#tren{
			width: 100%;
			height: 70px;
			float: right;

		}
		#giua{
			background-color:white;
			margin-left: 300px;
			margin-top: 90px;
			text-align: center;
			margin-right: 300px;
			padding-top: 100px;
			padding-bottom: 100px;
			border-top-right-radius: 30%;
    		border-bottom-left-radius: 30%;
    		border-top-left-radius: 30%;
    		border-bottom-right-radius: 30%;
		}
		
	</style>
	
	
</head>
<body style="background-color: black;" >
	<div id="tong">
		<div id="tren">
			<img src="../public/qac.png" style="width: 250px; height: 69px;">
		</div>
		<br><br><br>
		<div id="giua">
			<form method="POST">
				<h1 style="font-size: 40px;">Đăng nhập</h1>
				<h2 style="color: red;"><?php echo $error; ?></h2>
				<br>
				<input type="email" name="email" placeholder="Email:" required="" style="height: 25px; width: 250px;">
				<br><br>
				<input type="password" name="pass" placeholder="Mật khẩu" required="" style="height: 25px; width: 250px;">
				<br><br>
				<button type="submit" name="btn" style="height: 25px;"><b>Đăng nhập</b></button>
			</form>
		</div>
	</div>
</body>
</html>