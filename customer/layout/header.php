
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../public/qa.png" type="image/icon type">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
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
		#trai{
			width: 25%;
			height: 70px;
			float: left;
		}
		#giua{
			width: 50%;
			height: 70px;
			float: left;
			text-align: center;
		}
		#phai{
			width: 25%;
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
				<a href="index.php?module=common&action=logout"><b style="color: white; font-size: 20px;float: right;">Đăng xuất</b></a>
			<b style="color: white; float: right;">|</b>
			<?php 
			if (isset($_SESSION['customer'])) {
				echo "<h3 style='float:right; color: white;'>".$_SESSION['customer']['name']."</h3>";
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
					<a href="#">Trang chủ</a>
				</div>
				<div id="o3">
					<a href="#">Thương hiệu</a>
				</div>
				<div id="o4">
					<a href="#">Khuyến mãi</a>
				</div>
				<div id="o5">
					<a href="#">Tra cứu đơn</a>
				</div>
				<div id="o6">
					<a href="#">Xu hướng</a>
				</div>
			</div>
			<div id="gg2">
				<ul>
					<li>
						<a href="#">Chăm sóc cá nhân</a>
					</li>
					<li>
						<a href="#">Chăm sóc sắc đẹp</a>
					</li>
					<li>
						<a href="#">Chăm sóc sức khỏe</a>
					</li>
					<li>
						<a href="#">Dành cho phái mạnh</a>
					</li>
					<li>
						<a href="#">Thời trang & phụ kiện</a>
					</li>
					<li>
						<a href="#">Chăm sóc da mụn</a>
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
	</div>
			