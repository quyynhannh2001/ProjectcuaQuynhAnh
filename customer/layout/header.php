<?php 
if(isset($_POST['btnSearch'])){
	$key=$_POST['key'];
	header("Location:index.php?module=home&action=result&key=$key");
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="icon" href="../public/qaa.png" type="image/icon type">
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
			height: auto;
			margin: auto;
			background-color: white;

		}
		#tren{
			width: 100%;
			height: 80px;
			float: left;
			background-color: black;
			border-bottom: 1px solid white;
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
			/*margin-tsop: 15px;*/

		}
		#tren a{
			color: white;
			font-size: large;
		}
		#gg{
			width: 95%;
			height: 420px;
			float: left;
			/*border-bottom: 1px solid black;*/
			border-left: 1px solid white;
			margin-bottom: 20px;

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
			/*border-bottom: 2px solid black;*/
			position: relative;
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
			width: 25%;
			float: left;
		}
		#o3{
			width: 25%;
			float: left;
		}
		#o4{
			width: 25%;
			float: left;
		}
	/*	#o5{
			width: 15%;
			float: left;
		}*/
		#o6{
			width: 18.75%;
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
		#content{
			padding: 20px;
		}
		/*.wraper {
    width: 100%;
    height: 100%;
    position: relative;
}*/
.slide {
    width: 100%;
    height: 100%;
}
 
.slide_1 {
    width: 100%;
    height: 100%;
    background-image: url(../public/qc1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    top:0;
    z-index: 1;
    opacity: 0;
}
.slide_2 {
    width: 100%;
    height: 100%;
    background-image: url(../public/anh3.png);
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    top:0;
    z-index: 2;
    opacity: 0;
}
.slide_3 {
    width: 100%;
    height: 100%;
    background-image: url(../public/anh4.png);
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    top:0;
    z-index: 3;
    opacity: 0;
}
.nut {
    position: absolute;
    left: 50%;
    bottom: 5%;
    transform: translateX(-50%);
    z-index: 999;
}
.nut ul li {
    width: 10px;
    height: 10px;
    border:2px solid white;
    display: inline-block;
    border-radius: 100%;
    cursor: pointer;
}
 
.nut ul li:hover {
    background-color: white;
}
.ra{
    transition: 1.5s;
    opacity: 1;
}
/*.menudc{
	width: 100px;
}
ul .root > li{
	list-style-type: none; 
	display: block;

}
ul .root > li a{
	text-decoration: none;
	display: block;
}
ul .root > li:hover{
	background: white;
	color: black;
}

ul .submenu {
	width: 100px;
	background: white;
	display: none;
}
ul .submenu li  {
	list-style-type: none;
	
}

ul .submenu li a {
text-decoration: none;
display: block;
border-bottom: 1px solid black;
}
ul .root li:hover .submenu{
	display: block;
}*/

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
		input, button, i{
			font-size: 13.3333px;
			font-weight: 600;
		}
		i{
			/*position: absolute;*/
			/*top: 15px;*/
			/*margin-top: 28px;*/
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
			margin-top: -2px;
			/*padding-top: 10px;*/
			background-color: black;
			/*text-align: center;*/

		}
		#mota{
			font-size: 17px;
		}
		td#item{
		width: 332px;
	}
		
	</style>
	
 <script type="text/javascript">
 	document.addEventListener("DOMContentLoaded",function(){
var nut = document.querySelectorAll('div.nut ul li');
var slides = document.querySelectorAll('div.slide div');
for(var i = 0 ; i < nut.length; i++){
nut[i].addEventListener('click',function(){
    var nutnay = this;
    var vitrislide = 0;
    console.log(nutnay.previousElementSibling);
    for(var i = 0;nutnay = nutnay.previousElementSibling; vitrislide++){
        //chay den khi nut nay  = null thi dung.
        // chay xong lenh nay khi click vao nut ta lay dc vitrislide
    }
    for(var i = 0; i < slides.length; i++){
        slides[i].classList.remove('ra');
    }
    for(var i = 0; i < slides.length; i++){
        slides[vitrislide].classList.add('ra');
    }
})
}
// Click chuyen slide
 
    auto();
    function auto(){
    var thoigian = setInterval(function(){
        var slide = document.querySelector('div.slide div.ra');
        var vitrislide = 0;
        for(var i = 0 ; slide = slide.previousElementSibling ; vitrislide ++){
        }
        for(var i = 0 ; i < slides.length; i++){
            slides[i].classList.remove('ra'); // remove hết những thằng đang có class 'ra'
        }
        if(vitrislide == slides.length - 1){
            slides[0].classList.add('ra');
                // Thằng này có nghĩa là sau khi tự động chuyển đến slide cuối cùng nó quay lại thằng 0
        }
        else{
        slides[vitrislide].nextElementSibling.classList.add('ra');
               // Đây là then chốt của auto slide nó sẽ chuyển sang cái thằng tiếp theo.
    }
    },2000)
// Tu dong chuyen slide
    for(var i = 0; i < 3; i++){
        nut[i].addEventListener('click',function () {
            clearInterval(thoigian);
                //Click vào một nút bất kì dừng auto chuyển slide
        })
    }
// Dung tu dong chuyen slide
}
 
var x = setInterval(function(){
console.log('dm');
},1000);
 
},false)
 </script>
</head>
<body>
	<div id="tong">
		<div id="tren">
			<div id="trai">
				<a href="index.php"><img src="../public/qac.png" style="width: 240px; height: 50px;float: left;"></a>
			</div>
			<div id="giua">
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
		<div id="gg">
			<div id="gg1">
				<div id="o1">
					<b style="font-size: x-large;color: white; line-height: 60px; padding-left: 65px;">Danh mục</b><i class="fa fa-bars" style="font-size:25px; color: white; padding-left: 10px;"></i>
				</div>
				<div id="o2">
					<a class="<?php if($action=='home') echo 'active' ?>" href="index.php"><i class="fa fa-home" style="font-size:30px; color: white;"></i></a>
				</div>
				<div id="o3">
					<a class="<?php if($action=='khuyenmai') echo 'active' ?>" href="index.php?module=home&action=gioithieu">About QACARE</a>
				</div>
				<div id="o4">
					<a class="<?php if($action=='thuonghieu') echo 'active' ?>" href="index.php?module=home&action=lienhe">Liên hệ</a>
				</div>
				
				<!-- <div id="o6">
					<a class="<?php if($action=='xuhuong') echo 'active' ?>" href="#">Xu hướng</a>
				</div> -->
				 
				<!-- // if(isset($_SESSION['user'])){
					// echo "<div id='o5'>";
					// echo "<a href = 'index.php?module=invoices&action=list'>Lịch sử</a>";
				// echo "</div>";
				// }
				 -->
				
				
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
			<div id="gg3"  >
				<!-- class="tong" id="qc" style="background: url(../public/qc1.png); position: relative;" -->
		
					<!-- <img src="../public/qc1.png" style="width: 782px;"> -->
				
					<!-- <button onclick="prev()"><i class="fa fa-chevron-circle-left" id="text1" style="font-size:25px; position: absolute; text-align: left; color: #999999;" ></i></button>
					<button onclick="next()"><i class="fa fa-chevron-circle-right" id="text2" style="font-size:25px; position: absolute; margin-left: 740px; color: #999999"></i></button>
					 -->
					  <div class="slide">
				            <div class="slide_1 ra">
				                
				            </div>
				            <div class="slide_2">
				                
				            </div>
				            <div class="slide_3">
				                
				            </div>
				        </div>
				        <div class="nut">
				            <ul>
				                <li></li>
				                <li></li>
				                <li></li>
				            </ul>
				        </div>
				
			</div>
		</div>
		<div id="gg4">
			<div id="gio">
				<a href="index.php?module=invoices&action=cart"><i class="fa fa-cart-plus" style="font-size:36px; color: white"></i></a>
			</div>
			<div id="fb">
				<a href="https://www.facebook.com/quyynhannhxiinhlaam/"><i class="fa fa-facebook-square" style="font-size:36px; color: white"></i></a>
			</div>
			<div id="ig">
				<a href="https://www.instagram.com/_quyynhannh/"><i class="fa fa-instagram" style="font-size:36px; color: white"></i></a>
			</div>
			<div id="ytb">
				<a href="#"><i class="fa fa-youtube-play" style="font-size:36px; color: white"></i></a>
			</div>
		</div>
		<div id="content">
			
		
			