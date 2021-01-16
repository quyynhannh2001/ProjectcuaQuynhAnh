<?php 
		$error = "";
	if (isset($_POST['btn'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$pass = md5($_POST['pass']);
		$sql = "INSERT INTO customer VALUES (NULL,'$name','$address','$phone','$email','$pass')";
		$result = mysqli_query($conn, $sql);
		if (!$result){
			$error = mysqli_error($conn);
		}
		else{
			header("Location:index.php?module=products&action=home");
		}

	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Đăng ký tài khoản</title>
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
			margin-top: 50px;
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
			<a href="index.php"><img src="../public/qac.png" style="width: 250px; height: 69px;"></a>
		</div>
		<br>
		<div id="giua">
			<form method="POST">
				<h1 style="font-size: 40px;">Đăng ký</h1>
				<br>
				<h2 style="color: red"><?php echo $error; ?></h2>
				<input type="text" name="name" required="" placeholder="Họ tên:" style="height: 25px; width: 250px;">
				<br><br>
				<input type="text" name="address" required="" placeholder="Địa chỉ:" style="height: 25px; width: 250px;">
				<br><br>
				<input type="tel" name="phone" required="" placeholder="Số điện thoại:" style="height: 25px; width: 250px;">
				<br><br>
				<input type="email" name="email" required="" placeholder="Email:" style="height: 25px; width: 250px;">
				<br><br>
				<input type="password" name="pass" required="" placeholder="Mật khẩu:" style="height: 25px; width: 250px;">
				<br><br>
				<input type="password" name="repass" required="" placeholder="Nhập lại mật khẩu:" style="height: 25px; width: 250px;">
				<br><br>
				<button type="submit" name="btn" style="height: 25px;">Đăng ký</button>
			</form>
		</div>
	</div>
</body>
</html>




<!-- <!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
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
<body>
	<div id="tong">
		<div id="tren">
			<img src="../public/qac.png" style="width: 250px; height: 69px;">
		</div>
		<br><br><br>
		<div id="giua">
			<form method="POST">
				<input type="text" name="name" required="" placeholder="Họ tên:">
				<br><br>
				<input type="text" name="address" required="" placeholder="Địa chỉ:">
				<br><br>
				<input type="tel" name="phone" required="" placeholder="Số điện thoại:">
				<br><br>
				<input type="email" name="email" required="" placeholder="Email:">
				<br><br>
				<input type="password" name="pass" required="" placeholder="Mật khẩu:">
				<br><br>
				<input type="password" name="repass" required="" placeholder="Nhập lại mật khẩu:">
				<br><br>
				<button type="submit" name="btn">Đăng ký</button>
			</form>
		</div>
	</div>
</body>
</html> -->