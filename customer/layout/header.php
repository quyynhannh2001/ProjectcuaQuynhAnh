
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../public/qaa.png" type="image/icon type">
<!-- 	<script src="https://kit.fontawesome.com/yourcode.js"></script> -->
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
			height: auto;
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
		#trai{
			width: 25%;
			height: 70px;
			float: left;
		}
		#giua{
			width: 55%;
			height: 70px;
			float: left;
			text-align: center;
		}
		#phai{
			width: 20%;
			height: 70px;
			float: left;
			text-align: right;
		}
		#tren a{
			color: white;
			font-size: large;
		}
		#gg{
			width: 95%;
			height: 420px;
			float: left;
			border-bottom: 1px solid black;
			border-left: 1px solid white;

		}
		#gg1{
			width: 100%;
			height: 60px;
			float: left;
			border-bottom: 2px solid black;
			background-color: black;
			border-bottom: 1px solid white;
		}
		#gg2{
			width: 25.1%;
			height: 360px;
			float: left;
			border-bottom: 2px solid black;
			background-color: black;
			text-align: white;
			border-right: 1px solid white;
		}
		#gg3{
			width: 74.9%;
			height: 360px;
			float: left;
			border-bottom: 2px solid black;
					}
		#gg4{
			width: 5%;
			height: 420px;
			background-color: black;
			float: left;
			border-right: 1px solid white;
			border-left: 1px solid white;
		}
		#o1{
			width: 25%;
			float: left;
		}
		#o2{
			width: 15%;
			float: left;
		}
		#o3{
			width: 15%;
			float: left;
		}
		#o4{
			width: 15%;
			float: left;
		}
		#o5{
			width: 15%;
			float: left;
		}
		#o6{
			width: 15%;
			float: left;
		}
		#gg1 a{
			line-height: 60px;
			display: block;
			text-align: center;
			text-decoration: none;
			font-size: larger;
			color: white;
			border-left: 1px solid white;

		}
		#gg2 ul{
			list-style-type: none;
		}
		#gg2 li{
			height: 60px;
			line-height: 60px;
			border-bottom: 1px solid white;
		}
		#gg2 a{
			text-decoration: none;
			color: white;
			padding-left: 15px;
			font-size: larger;
			display: block;
		}
		#gg1 a:hover{
			background-color: white;
			color: black;
		}
		#gg2 a:hover{
			background-color: white;
			color: black;
		}
		#gio{
			width: 5%;
			height: 105px;
			line-height: 105px;
			padding-left: 5px;

		}
		#fb{
			width: 5%;
			height: 105px;
			line-height: 105px;
			padding-left: 10px;

		}
		#ig{
			width: 5%;
			height: 105px;
			line-height: 105px;
			padding-left: 10px;

		}
		#ytb{
			width: 5%;
			height: 105px;
			line-height: 105px;
			padding-left: 8px;

		}
		#phai a{
			text-decoration: none;
			font-size: larger;


		}
		.active{
			background-color: #444444;
		
		}
		/*#phai li{
			position: relative;
		}
		.sub-menu{
			display: none;
			position: absolute;
			background-color: white;
		}

		#phai li:hover .sub-menu{
			display: block;

		}
		#phai a{
			color: black;
			display: block;
			text-decoration: none;
		}
		.absolute{
			right: 50px;
			padding: 15px;
			top: 50px;
		}
		
		
		
*/
/*		
	</style>
</head>
<body>
	<div id="tong">
		<div id="tren">
			<div id="trai">
				<a href="index.php"><img src="../public/qac.png" style="width: 250px; height: 69px;float: left;"></a>
			</div>
			<div id="giua">
				<input type="text" name="search" placeholder="Tìm kiếm" style="width: 350px; height: 25px;">
				<button style="height: 25px;">Tìm kiếm</button>
			</div>
			<div id="phai">
				
			
			<?php 
			if (isset($_SESSION['customer'])) {
				echo "<h3 style='float:left; color: white; padding-left: 20px;'>".$_SESSION['user']['name']."</h3>";
				echo "<a href='index.php?module=common&action=logout'><b style='color: white; font-size: 20px;float: right;'>Đăng xuất</b></a>";
			}
			else{
				echo "<a href='index.php?module=common&action=login'><b style='color: white; font-size: 20px;float: left; padding-left: 20px;'>Đăng nhập</b></a>";
				echo "<a href='index.php?module=common&action=register'><b style='color: white; font-size: 20px;float: right;'>Đăng ký</b></a>";
			}
		 ?>
				
			</div>
		</div>
		<div id="gg">
			<div id="gg1">
				<div id="o1">
					<b style="font-size: xx-large;color: white; line-height: 60px; padding-left: 55px;">Danh mục</b>
				</div>
				<div id="o2">
					<a class="<?php if($action=='home') echo 'active' ?>" href="index.php">Trang chủ</a>
				</div>
				<div id="o3">
					<a class="<?php if($action=='thuonghieu') echo 'active' ?>" href="#">Thương hiệu</a>
				</div>
				<div id="o4">
					<a class="<?php if($action=='khuyenmai') echo 'active' ?>" href="#">Khuyến mãi</a>
				</div>
				<div id="o5">
					<a class="<?php if($action=='tracuu') echo 'active' ?>" href="#">Tra cứu đơn</a>
				</div>
				<div id="o6">
					<a class="<?php if($action=='xuhuong') echo 'active' ?>" href="#">Xu hướng</a>
				</div>
			</div>
			<div id="gg2">
				<ul>
					<li>
						<a class="<?php if($action=='list_canhan') echo 'active' ?>" href="index.php?module=products&action=list_canhan">Chăm sóc cá nhân</a>
					</li>
					<li>
						<a class="<?php if($action=='list_sacdep') echo 'active' ?>" href="index.php?module=products&action=list_sacdep">Chăm sóc sắc đẹp</a>
					</li>
					<li>
						<a class="<?php if($action=='list_suckhoe') echo 'active' ?>" href="index.php?module=products&action=list_suckhoe">Chăm sóc sức khỏe</a>
					</li>
					<li>
						<a class="<?php if($action=='list_phaimanh') echo 'active' ?>" href="index.php?module=products&action=list_phaimanh">Dành cho phái mạnh</a>
					</li>
					<li>
						<a class="<?php if($action=='list_ttpk') echo 'active' ?>" href="index.php?module=products&action=list_ttpk">Thời trang & phụ kiện</a>
					</li>
					<li>
						<a class="<?php if($action=='list_damun') echo 'active' ?>" href="index.php?module=products&action=list_damun">Chăm sóc da mụn</a>
					</li>
				</ul>
			</div>
			<div id="gg3">
				<b>QUẢNG CÁO</b>
			</div>
		</div>
		<div id="gg4">
			<div id="gio">
				<a href="#"><i class="fa fa-cart-plus" style="font-size:36px; color: white"></i></a>
			</div>
			<div id="fb">
				<a href="#"><i class="fa fa-facebook-square" style="font-size:36px; color: white"></i></a>
			</div>
			<div id="ig">
				<a href="#"><i class="fa fa-instagram" style="font-size:36px; color: white"></i></a>
			</div>
			<div id="ytb">
				<a href="#"><i class="fa fa-youtube-play" style="font-size:36px; color: white"></i></a>
			</div>
		</div>
		<div id="content">
			
		
			