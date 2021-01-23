

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
			height: 92.8vh;
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
			height: 82.2vh;
			width: 170px;
			background-color: black;
			float: left;
			border-left: 1px solid white;
		}
		#nd{
			height: 82.2vh;
			width: 900px;
			float: left;
			padding: 20px;
			
		}
		#menu ul{
			list-style-type: none;
		}
		#menu li{
			height: 90px;
			line-height: 90px;
			border-bottom: 2px solid white;
		}
		#menu a{
			text-decoration: none;
			color: white;
			font-size: 20px;
			display: block;
			padding-left: 15px;
			text-align: left;

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
			<img src="../public/qac.png" style="width: 250px; height: 69px;float: left;">
			
			<a href="index.php?module=common&action=logout"><b style="color: white; font-size: 20px;float: right;">Đăng xuất</b></a>
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
					<a href="index.php?module=products&action=list">Sản phẩm</a>
				</li>
				<li>
					<a href="index.php?module=invoices&action=list">Hóa đơn</a>
				</li>
				<li>
					<a href="index.php?module=types&action=list">Loại</a>
				</li>
				<li>
					<a href="index.php?module=brands&action=list">Thương hiệu</a>
				</li>
				<li>
					<a href="#">Khuyến mãi</a>
				</li>
				<li>
					<a href="#">Xu hướng</a>
				</li>
			</ul>
		</div>
		<div id="nd">