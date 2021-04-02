<?php 
if(isset($_POST['btnSearch'])){
	$key=$_POST['key'];
	header("Location:index.php?module=home&action=result&key=$key");
}

 ?>
<?php 
	if (!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_SESSION['cart'][$id])) {
			if(isset($_GET['up'])) $_SESSION['cart'][$id] += 1;
			if(isset($_GET['down'])) {
				$_SESSION['cart'][$id] -= 1;
				if ($_SESSION['cart'][$id] <1){

				 	$_SESSION['cart'][$id] = 0;
				 	unset($_SESSION['cart']);
				 }

					
				}
		}
		else{
			$_SESSION['cart'][$id] = 1;
		}
		header("Location: index.php?module=invoices&action=cart");
	}
// echo var_dump($_SESSION['cart']);
 ?>
<?php 
$title = "Giỏ hàng";
// require_once("layout/header.php");
 ?>
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
			font-family: Helvetica;

		}
		body{
			background: url(../public/nen.png);
			background-repeat: no-repeat;
			background-size: 1370px 657px;
			background-attachment: fixed;
		}
		#tong{
			width: 1100px;
			/*height: auto;*/
			margin: auto;
			background-color: white;

		}
		#tren{
			width: 100%;
			height: 80px;
			float: left;
			background-color: black;
			/*border-bottom: 1px solid white;*/
			/*line-height: 70px;*/
			padding-top: 15px;

		}
		#trai{
			width: 25%;
			height: 80px;
			float: left;
		}
		#giua{
			width: 55%;
			height: 80px;
			float: left;
			text-align: center;
			padding-top: 10px;

		}
		#phai{
			width: 20%;
			height: 80px;
			float: left;
			text-align: right;
			margin-top: 15px;

		}
		#tren a{
			color: white;
			font-size: large;
		}
 	.cart{
 		padding: 20px;
 		/*width: 900px;*/
 		height: 80vh;
 		/*margin-top: 100px;*/
 		/*width: 1140px;*/
 		margin-left: 105px;
 		margin-right: 105px;
 		/*padding-bottom: 50px;*/
 	}
 	.cart table{
 		width: 100%;
 		text-align: center;
 		background-color: white;
 		/*height: 70vh;*/
 		/*width: 1100px;*/
 		/*margin-left: 105px;*/
 		/*margin-right: 300px;*/
 		/*font-size: large;*/
 		/*padding-bottom: 50px;*/


 	}
 	table,th,tr,td{
 		border: 1px solid black;
 		border-collapse: collapse;
 		padding: 10px;
 		/*margin-top: 50px;*/
 	}
 	th{
 		font-size: larger;

 	}
 	td{
 		font-size: 20px;
 	}
 	/*.tt{
 		height: 63vh;
 	}*/
 	#dat{
 		/*padding-top: 50px;*/
 		 position:absolute; 
  bottom:0; 
  width:100%; 
  height:100px; 
  position: fixed;
 	}
 	input, button{
			border: 0;
			border-radius: 20px;
		}
		input{
			/*width: 250px;*/
			border-bottom: 2px solid #444;
			padding: 12px 40px 12px 20px;
		}
		/*button{
			width: 250px;
			padding-right: 10px;
			margin-left: 13px;
		}*/
		input, button {
			font-size: 13.3333px;
			font-weight: 600;
		}
		/*i{
			position: absolute;
			top: 15px;
			margin-top: 28px;
		}*/
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
			height: 65px;
			line-height: 65px;
			background-color: black;
			border-bottom: 1px solid white;
			/*border-top: 1px solid white;*/
			/*border-left: 1px solid white;
			border-right: 1px solid white;*/


		}
		#phai a{
			display: block;
			text-align: center;
			text-decoration: none;
			/*padding: 10px;*/
		}
		#phai a:hover{
			color:  black;
			background-color: white;
		}
		#phai a:active{
			color: white;
			background-color:  black;
		}
		#phai li{
			position: relative;
			background-color: #242323;
			text-align: center;
			/*height: 60px;*/
			top: -14px;
			/*padding: 5px;*/
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
			margin-bottom: 15px;
			/*padding-top: 10px;*/
			background-color: black;
			/*text-align: center;*/

		}
 </style>

</head>
<body>
	<div id="tong">
		<div id="tren">
			<div id="trai">
				<a href="index.php"><img src="../public/qac.png" style="width: 240px; height: 50px;float: left;"></a>
			</div>
			<div id="giua">
				<!-- <form method="GET">
					<input type="text" name="key" placeholder="Nhập sản phẩm cần tìm" style="width: 400px; height: 30px; font-size: 15px;" autocomplete="off">
					<button style="padding-bottom: 4px;" type="submit" name="btnSearch" ><i class="fa fa-search" style="font-size: 25px; height: 25px;"></i></button>
				</form> -->
				<form method="POST">
					<input type="text" name="key" placeholder="Nhập sản phẩm cần tìm" style="width: 400px; height: 30px; font-size: 15px;" autocomplete="off">
					<button style="padding-bottom: 4px;" type="submit" name="btnSearch" ><i class="fa fa-search" style="font-size: 25px; height: 25px;"></i></button>
				</form>
				
			</div>
			<div id="phai">
				
			
			<?php 
			if (isset($_SESSION['user'])) {
					
						echo "<li>";
							echo "<h3 style='color: white; text-align: left;'>&nbsp;&nbsp;Xin chào,&nbsp;".$_SESSION['user']['name']."</h3>";
						
							echo "<ul class='sub-menu'>";
								echo "<li class='phai'>";
									echo "<a href='index.php?module=invoices&action=list'>Lịch sử mua hàng</a>";
								echo "</li>";
								echo "<li class='phai'>";
									
									echo "<a href='index.php?module=common&action=logout'>Đăng xuất</a>";
								echo "</li>";
							echo "</ul>";
							
						echo "</li>";
				
						
				
			}
			else{
				echo "<a href='index.php?module=common&action=login'><b style='color: white; font-size: 20px;float: left; padding-left: 20px; padding-top: 15px;'>Đăng nhập</b></a>";
				echo "<a href='index.php?module=common&action=register'><b style='color: white; font-size: 20px;float: right; padding-top: 15px;'>Đăng ký</b></a>";
			}
		 ?>
				
			</div>
		</div>
		<!--  -->
		</div>
		<div id="content">
			
		
			
<div class="cart">
	<table>
		<tr>
			<th>STT</th>
			<th>Sản phẩm</th>
			<th>Đơn giá</th>
			<th>Số lượng</th>
			<th>Thành tiền</th>
		</tr>
		<?php 
		$stt = 0;
		$total = 0;
			foreach ($_SESSION['cart'] as $id => $quantity) {
				$stt ++;
				$sql = "SELECT name, price, url FROM products WHERE id = '$id'";
				$result = mysqli_query($conn,$sql); 
				if ($result == false) echo "Error: ".mysqli_error($conn); 
				else {
					$row = mysqli_fetch_assoc($result);
					$name = $row['name'];
					$price = $row['price'];
					$url = $row['url'];
					echo "<tr>";
						echo "<td>".$stt."</td>";
						echo "<td>";
							echo $name."<br><br>";
							$url = $row['url'];
							echo "<img src='$url' width = '200px'>";
						echo "</td>";
							// $price = $row['price'];
						echo "<td>".$price."<u>đ</u></td>";
						echo "<td>";
							echo "<a href = 'index.php?module=invoices&action=cart&id=$id&down'><i class='fa fa-minus-square-o' style='font-size:20px'></i></a>";
							echo "&nbsp;".$quantity."&nbsp;";
							echo "<a style = 'font-size: large;' href = 'index.php?module=invoices&action=cart&id=$id&up'><i class='fa fa-plus-square-o' style='font-size:20px'></i></a>";
						echo "</td>";
						echo "<td>".($price * $quantity)."</td>";
					echo "</tr>";
					$total += $price * $quantity;
				}
			}
			$_SESSION['total_amount'] = $total;
			echo "<tr class = 'tt'>";
				echo "<th colspan = '5' style = 'font-size: 30px; text-align:center;'>Tổng tiền:&nbsp;<span style='color: red'>".$total."<u>đ</u></span></th>";
				// echo "<th style = 'font-size: 30px; color: red'>".$total."<u>đ</u></th>";
			echo"</tr>";

	 	?>
	</table>
</div>
</div>

  <div id="dat">
  	<button type="input" name="btn" style="height: 50px; width: 280px; font-size: larger; margin-top: 50px; margin-left: 950px;"><a href="index.php?module=invoices&action=checkout" style="color: white; text-decoration: none; font-size: larger;">Đặt hàng</a></button>
  	
  </div>
  
  <!-- require_once("layout/footer.php")  -->
  
 