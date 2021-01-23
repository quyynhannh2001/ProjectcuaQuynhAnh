<?php 
	$title = "Đăng nhập";
	$error = "";
	if (isset($_POST['btn'])){
		$user = $_POST['user'];
		$pass = md5($_POST['pass']);
		$sql = "SELECT id, name FROM customers WHERE (email = '$user' OR phone_no = '$user') AND password = '$pass'";
		$result = mysqli_query($conn, $sql);
		if (!$result){
			$error = mysqli_error($conn);
		}
		else{
			if(mysqli_num_rows($result)==1){
				$row = mysqli_fetch_assoc($result);
				$_SESSION['user']['id'] = $row['id'];
				$_SESSION['user']['name'] = $row['name'];
				header("Location:index.php");
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
<body style="background-color: black;" >
	<div id="tong">
		<div id="tren">
			<a href="index.php"><img src="../public/qac.png" style="width: 250px; height: 69px;"></a>
		</div>
		<br><br><br>
		<div id="giua">
			<h2 style="color: red"><?php echo "$error"; ?></h2>
			<form method="POST">
				<h1 style="font-size: 40px;">Đăng nhập</h1>
				<h2 style="color: red;"><?php echo $error; ?></h2>
				<br>
				<input type="text" name="user" placeholder="Email/Số điện thoại: " required="" style="height: 25px; width: 250px;">
				<br><br>
				<input type="password" name="pass" placeholder="Mật khẩu" required="" style="height: 25px; width: 250px;">
				<br><br>
				<button type="submit" name="btn" style="height: 25px;"><b>Đăng nhập</b></button>
<!-- 				<button style="height: 25px;"><a href="index.php?module=common&action=register" style="text-decoration: none; color: black;"><b>Đăng ký</b></a></button> -->
			</form>
			<br>
			Bạn chưa có tài khoản?<a href="index.php?module=common&action=register"><b>Đăng ký</b></a>
		</div>
	</div>
</body>
</html>