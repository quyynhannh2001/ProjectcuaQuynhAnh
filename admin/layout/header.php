

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<link rel="icon" href="../public/qaa.png" type="image/icon type">
	<script type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;

		}
		body{
			background: url(../public/nen.png);
			background-repeat: no-repeat;
			background-size: 1370px 657px;
			background-attachment: fixed;
		}
		#tong{
			width: 1100px;
			height: 92.8vh;
			margin: auto;
			background-color: white;
			/*font-weight: 600;*/
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
			width: 930px;
			float: left;
			padding: 20px;
			
		}
		#menu ul{
			list-style-type: none;
		}
		#menu li{
			height: 16.44vh;
			line-height: 16.44vh;
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
		i{
			color: black;
		}
		#phai{
			position: relative;
			display: inline-block;
		}
		#phai ul{
			list-style-type: none;
		}
		#phai li{
			display: inline-block;
			width: 200px;
			height: 63px;
			line-height: 63px;
			background-color: black;
			border-bottom: 1px solid white;
			color: white;
			/*border-top: 1px solid white;*/
			/*border-left: 1px solid white;
			border-right: 1px solid white;*/


		}
		#phai a{
			display: block;
			text-align: center;
			text-decoration: none;
		}
		/*#phai a:hover{
			color:  black;
			background-color: white;
		}
		#phai a:active{
			/*color: white;*/
			/*background-color:  black;*/
		/*}*/
		#phai li{
			position: relative;
			background-color: #242323;
			text-align: center;
			/*color: white;*/
		}
		.sub-menu{
			display: none;
			position: absolute;
			/*z-index: 1;*/
			z-index: 5;
			/*background-color: #192433;*/

		}
		#phai li:hover .sub-menu{
			display: block;
			/*background-color: #192433;*/
		}
		#phai b{
			font-size: large;
			/*padding-top: 50px;*/
		}
		#phai h3{
			/*margin-top: -2px;*/
			/*padding-top: 10px;*/
			background-color: black;
			/*text-align: center;*/

		}
		#tren{
			width: 100%;
			float: left;
		}
		#trai{
			width: 50%;
			float: left;
		}
		#phai{
			/*width: 50%;*/
			float: left;
			left: 350px;
		}
			button, input{
			border: 0;
			border-radius: 20px;
			}
		input{
			/*width: 250px;*/
			border-bottom: 2px solid #444;
			padding: 12px 12px 12px 20px;
			/*height: 38px;*/
		}
		button{
			/*width: 250px;*/
			/*padding-right: 10px;*/
			margin-left: 5px;
		}
		input, button{
			font-size: 13.3333px;
			font-weight: 600;
		}
		button{
			color: #fff;
			background-image: linear-gradient(to right, #868686, black); 
			cursor: pointer;
		}
		input:focus, input:focus::placeholder, input:focus+i{
			color: black;
		}
		input:focus, button: focus{
			outline: 0;
		}
		a{
			color: blue;
			text-decoration: none;
		}

	</style>
</head>
<body>
	<div id="tong">
		<div id="tren">
			<div id="trai">
			<img src="../public/qac.png" style="width: 230px; height: 60px;float: left; padding-top: 10px;">
			</div>
			
			<!-- <a href="index.php?module=common&action=logout"><b style="color: white; font-size: 20px;float: right;">Đăng xuất</b></a> -->
			<!-- <b style="color: white; float: right;">|</b> -->
			<div id="phai">
			<?php 
			if (isset($_SESSION['admin'])) 
			// {
			// 	echo "<h3 style='float:right; color: white;'>".$_SESSION['admin']['name']."</h3>";
			// }
			 {
					
						echo "<li>";
							echo "<h3 style='color: white; text-align: center;'>&nbsp;&nbsp;Xin chào,&nbsp;".$_SESSION['admin']['name']."</h3>";
						
							echo "<ul class='sub-menu'>";
								// echo "<li class='phai'>";
								// 	echo "<a href='index.php?module=invoices&action=list'>Lịch sử mua hàng</a>";
								// echo "</li>";
								echo "<li class='tren'>";
									
									echo "<a href='index.php?module=common&action=logout' style ='color: white;'>Đăng xuất</a>";
								echo "</li>";
							echo "</ul>";
							
						echo "</li>";
				
						
				
			}
			else{
				header("Location: index.php?module=common&action=login");
			}

		 ?>
		 </div>
		</div>
		<div id="menu">
			<ul>
				<li>
					<a href="index.php?module=invoices&action=list">Hóa đơn</a>
				</li>
				<li>
					<a href="index.php?module=products&action=list">Sản phẩm</a>
				</li>
				
				<li>
					<a href="index.php?module=types&action=list">Loại</a>
				</li>
				<li>
					<a href="index.php?module=brands&action=list">Thương hiệu</a>
				</li>
				<li>
					<a href="index.php?module=customer&action=list">Khách hàng</a>
				</li>
				<!-- <li>
					<a href="#">Xu hướng</a>
				</li> -->
			</ul>
		</div>
		<div id="nd">