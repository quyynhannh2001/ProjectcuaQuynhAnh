<?php if (!isset($_SESSION['admin'])) {
	header("Location: index.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;

		}
		body{
			background-color: black;
		}
		#tong{
			width: 1100px;
			height: 100vh;
			margin: auto;
			background-color: white;
		}
		#tren{
			width: 100%;
			height: 70px;
			float: left;
			background-color: black;
			border-bottom: 1px solid white;
			line-height: 75px;
		}
		#menu{
			height: 90vh;
			width: 250px;
			background-color: black;
			float: left;
			border-left: 1px solid white;
		}
		#nd{
			height: 90vh;
			width: 850px;
			float: left;
		}
		#menu ul{
			list-style-type: none;
		}
		#menu li{
			height: 90px;
			line-height: 90px;
			border-bottom: 1px solid white;
		}
		#menu a{
			text-decoration: none;
			color: white;
			font-size: 20px;
			display: block;
			padding-left: 15px;

		}
		#menu a:hover{
			background-color: white;
			color: black;
		}
	</style>
</head>
<body>
	<div id="tong">
		<div id="tren">
			<a href="index.php"><img src="../public/qac.png" style="width: 250px; height: 69px;float: left;"></a>
			
			<a href="index.php?module=common&action=login"><b style="color: white; font-size: 20px;float: right;">Đăng xuất</b></a>
			<b style="color: white; float: right;">|</b>
			<?php 
			if (isset($_SESSION['admin'])) {
				echo "<h3 style='float:right; color: white;'>".$_SESSION['admin']['name']."</h3>";
			}
		 ?>
		</div>
		<div id="menu">
			<ul>
				<li>
					<a href="index.php?module=products&action=list">Quản lý sản phẩm</a>
				</li>
				<li>
					<a href="index.php?module=invoices&action=list">Quản lý hóa đơn</a>
				</li>
				<li>
					<a href="index.php?module=types&action=list">Quản lý loại</a>
				</li>
				<li>
					<a href="index.php?module=brands&action=list">Quản lý thương hiệu</a>
				</li>
			</ul>
		</div>
		<div id="nd">