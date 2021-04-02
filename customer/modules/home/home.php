

<?php
$title = "Trang chủ";
 require_once("layout/header.php");

?>
<style type="text/css">
	#list_sacdep table{
 		/*padding: 15px;*/
 		text-align: center;


 	}
 	#list_sacdep #item{
 		padding: 25px;
 		min-width: 265px;
 		text-align: center;
 	} 
 	#list_sacdep #item:hover{

		box-shadow: inset 10px 10px 5px #888888, 10px 10px 5px #888888;
 	}
 	mark{
 		background-color: #999999;
 	
 	}
 	h1{
 		text-align: center;
 		/*padding: 5px;*/

 	}
 	.them a{
 		text-decoration: none;
 		font-size: 25px;
 	}
 	/*#them button{
 		margin-top: 10px;
 	}*/
 	table{
 		margin: auto;
 	}
 	#them td{
 		padding-top: 20px;
 	}
 	#home img {
		border-radius:10%;
		/*-moz-border-radius:20%;
		-webkit-border-radius:20%;*/
		padding-bottom: 15px;
		width: 900px;
		height: 300px;

	}
	/*#home img: hover{
		box-shadow: inset 10px 10px 5px #888888, 10px 10px 5px #888888;
	}*/
	.map table{
		width: 80%;
		text-align: center;
	}
	.map p{
		font-size: large;
	}
	#home img{
		width: 340px;
		padding: 10px;
	}
	.img{
		position: relative;
		overflow: hidden;
		box-shadow: 0 0 2px #555;
	}
	/*.box img{
		width: 100%;
		height: auto;
	}*/
	
	}
	img {
    width: 100%;
    height: auto;
    transition: all ease-in-out ;
}
 
.img {
    /*width: 300px;
    height: 225px;*/
    position: relative;
   
    overflow: hidden;
}
 
.txt {
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.52);
    position: absolute;
    bottom:50px;
    text-align: center;
    color: white;
    padding:10px;
    box-sizing: border-box;
    opacity: 0;
}
.img:hover div.txt {
    opacity: 1;
    transform: translateY(50px);
    transition:ease-in-out 0.5s;
}
 
.img:hover img {
    transform: scale(1.5);
    transition: all ease-in-out 0.5s;
 
 
}
#home{
	border-bottom: 3px dashed black;
	/*background-image: linear-gradient(to right, #868686, black); */
	border-top: 3px dashed black;
}
#home table{
	margin: 20px;
}
.map{
	border-bottom: 3px dashed black;
}
.map1{
	border-bottom: 3px dashed black;

}
.map img{
	margin-left: 30px;
	margin-right: 30px;
	border-radius: 50%;
	margin-bottom: 10px;
	/*box-shadow: inset 10px 10px 5px #888888, 10px 10px 5px #888888;*/
}
#phongto {
transition: all 1s ease;
-webkit-transition: all 1s ease;
-moz-transition: all 1s ease;
-o-transition: all 1s ease;
}
 
#phongto:hover {
transform: scale(1.5,1.5);
-webkit-transform: scale(1.5,1.5);
-moz-transform: scale(1.5,1.5);
-o-transform: scale(1.5,1.5);
-ms-transform: scale(1.5,1.5);
}
#cs{
	font-size: larger;
	/*font-weight: 100px;*/

}
.checked {
  color: orange;
}
.map1 img{
	border-radius: 50%;
	width: 80px;
	height: 80px;
}
.vien{
	border-bottom: 1px solid gray;
	padding: 5px;
}
.map1 tr, td{
	padding: 5px;
}
.err{
			border-color: red;
			/*border-width: 5px;*/
		}
		.success{
			border-color: green;
			/*border-width: 5px;*/
		}
		
		.show{
			color: red;
			font-style: italic;
			font-size: 17px;
</style>
<!-- <audio src="https://zingmp3.vn/tim-kiem/bai-hat?q=q=v%C3%AC+t%C3%B4i+c%C3%B2n+s%E1%BB%91ng.mp3" autoplay></audio> -->
<!-- <iframe scrolling="no" width=640 height=180 src=https://zingmp3.vn/embed/song/ZW7WFOU6?start=true frameborder="0" allowfullscreen="true"/> -->
<script type="text/javascript">
	function validatejs(){
			
			var vEmail = document.getElementById('email');
			var vName = document.getElementById('name');
			var vBox = document.getElementById('box');

			
			var vErmail = document.getElementById('ermail');
			var vErname = document.getElementById('ername');
			var vErbox = document.getElementById('erbox');

	
			var email = vEmail.value.trim();
		
			var name = vName.value.trim();

			var box = vBox.value.trim();

		
			var flagE=false;
		
			var flagN=false;
			var flagB=false;
		
			const check=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
			
			

			var classErr = document.getElementsByClassName('err');
            var i;
            for(i = 0; i< classErr.length; i++){
            	classErr[i].classList.remove('err');
            }
            var classSuccess = document.getElementsByClassName('success');
            for(i = 0; i< classSuccess.length; i++){
            	classSuccess[i].classList.remove('success');
            }       
            
            var classShowErr = document.getElementsByClassName('show');
            for(i = 0; i< classShowErr.length; i++){
            	classShowErr[i].innerHTML = "";
            } 

			if(email==""){
				vErmail.innerHTML="Hãy nhập email của bạn!";
			 	vEmail.classList.add('err');
			}
			else if(check.test(email)){
				flagE=true;
				vEmail.classList.add('success');
			}
			else{
				vErmail.innerHTML="Email đăng ký không hợp lệ!";
			 	vEmail.classList.add('err');
			}
			// if(phone==""){
			// 	vErphone.innerHTML="Hãy nhập số điện thoại của bạn!";
			//  	vPhone.classList.add('err');
			// }
			// else if(RegP.test(phone)){
			// 	flagP=true;
			// 	vPhone.classList.add('success');
			// }
			// else{
			// 	vErphone.innerHTML="Số điện thoại đăng kí không hợp lệ!";
			//  	vPhone.classList.add('err');
			// }
			
			if(name==""){
				vErname.innerHTML="Hãy nhập tên của bạn!";
				vName.classList.add('err');
			}
			else{
				flagN=true;
				vName.classList.add('success');
			}
			
			if(flagN==true&&flagE==true)return true;
			else return false;
			// if (flagN==false&&flagE==false) {
			// 	return false;
				
			// }
			// else{
			// 	return true;
			// 	// alert("Gửi thư thành công");
			// 	document.write("Gửi thư thành công");
			// }
		}
</script>
 <audio src="../public/nhac (2).mp3" autoplay="" ></audio>
 <marquee><b style="font-size: larger;">QACARE - Tự hào là nhà cung cấp sản phẩm chất lượng - uy tín số 1 Việt Nam</b></marquee>
<div id="home">

	<!-- <iframe scrolling="no" width=640 height=180 src=https://zingmp3.vn/embed/song/ZW7WFOU6?start=true frameborder="0" allowfullscreen="true"/> -->
	<table>
		<tr>
			<a href="index.php?module=products&action=list_canhan">
			<td>
				<div class="img"><a href="index.php?module=products&action=list_canhan">
			<img src="../public/top.jpg">
				
				<div class="txt">
					<h2>Chăm sóc cá nhân</h2>
				</div>
			</div>
				
			</td>
			</a>
			<a href="index.php?module=products&action=list_sacdep">
			<td>
				<div class="img"><a href="index.php?module=products&action=list_sacdep">
			<img src="../public/top2.jpg">
				
				<div class="txt">
					<h2>Chăm sóc sắc đẹp</h2>
				</div>
			</div>
				
			</td>
			</a>
			<a href="index.php?module=products&action=list_suckhoe">
			<td>
				<div class="img"><a href="index.php?module=products&action=list_suckhoe">
			<img src="../public/top3.jpg">
				
				<div class="txt">
					<h2>Chăm sóc sức khỏe</h2>
				</div>
			</div>
				
			</td>
			</a>
		</tr>
		<tr>
			
			<a href="index.php?module=products&action=phaimanh">
			<td>
				<div class="img"><a href="index.php?module=products&action=phaimanh">
			<img src="../public/top4.jfif">
				
				<div class="txt">
					<h2>Góc phái mạnh</h2>
				</div>
			</div>
				
			</td>
			</a>
			<a href="index.php?module=products&action=list_ttpk">
			<td>
				<div class="img"><a href="index.php?module=products&action=list_ttpk">
			<img src="../public/top5.jpg">
				
				<div class="txt">
					<h2>Thời trang & phụ kiện</h2>
				</div>
			</div>
				
			</td>
			</a>
				<a href="index.php?module=products&action=list_damun">
			<td>
				<div class="img"><a href="index.php?module=products&action=list_damun">
			<img src="../public/top6.png">
				
				<div class="txt">
					<h2>Chăm sóc da mụn</h2>
				</div>
			</div>
				
			</td>
			</a>
		</tr>
		
	</table>
	<!-- <div id="canhan">
		<a href="index.php?module=products&action=list_canhan">
			<img src="../public/anh1.png">
		</a>
	</div>
	<div id="sacdep">
		<a href="index.php?module=products&action=list_sacdep">
			<img src="../public/anh2.png">
		</a>
	</div> -->
</div>
<div class="map">
	<br>
<table>
	<tr >
		<td colspan="3">
			<h1>Danh sách cửa hàng</h1>
			<br>
		</td>
		<!-- <tr>
			<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3263865566732!2d105.9421163144072!3d21.01962259346729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a96d57466dd3%3A0x84f058e3ba736ad5!2zTmjDoCB0aGkgxJHhuqV1IEdpYSBMw6Jt!5e0!3m2!1svi!2s!4v1615836989840!5m2!1svi!2s" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<p>Quản lý CS1:</p>
				<p>SĐT:</p>
			</td>
			<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14896.48291609703!2d105.93122432117535!3d21.027854804813018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a8ebf78b9df9%3A0xa703f262426f885!2zTmjDoCBWxINuIEjDs2EgVGjDtG4gQ2Ft!5e0!3m2!1svi!2s!4v1615836867058!5m2!1svi!2s" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<p>Quản lý CS2:</p>
				<p>SĐT:</p>
			</td>
		</tr>
		<tr>
			<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509167.682012511!2d-123.79975055493215!3d37.1929955926075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2zQ2FsaWZvcm5pYSwgSG9hIEvhu7M!5e0!3m2!1svi!2s!4v1615837462420!5m2!1svi!2s" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				<p>Quản lý CS3:</p>
				<p>SĐT:</p></td>
				<td>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6631964.154235301!2d123.37963626725144!3d35.74432163251678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356455ebcb11ba9b%3A0x91249b00ba88db4b!2zSMOgbiBRdeG7kWM!5e0!3m2!1svi!2s!4v1615837539274!5m2!1svi!2s" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					<p>Quản lý CS4:</p>
					<p>SĐT:</p>
				</td>
		</tr> -->

	</tr>
	<tr>
		<td>
			<a href="https://goo.gl/maps/LgufCqRgVpgjpuVM7">
				<img src="../public/cs1.jpg" id="phongto" width="280px" height="280px">
			</a>
			<i class="fa fa-home" style="font-size:36px"></i><b id="cs">Cơ sở 1: Việt Nam</b>
		</td>
		<td>
			<a href="https://goo.gl/maps/hp9P82rh6T5afFsRA">
				<img src="../public/cs2.jpg" id="phongto" width="280px" height="280px">
			</a>
			<i class="fa fa-home" style="font-size:36px"></i><b id="cs">Cơ sở 2: Hàn Quốc</b>
		</td>
		<td>
			<a href="https://goo.gl/maps/dzrBnVYSJwxVfF6Q8">
				<img src="../public/cs3.jpg" id="phongto" width="280px" height="280px;">
			</a>
			<i class="fa fa-home" style="font-size:36px"></i><b id="cs">Cơ sở 3: Trung Quốc</b>
		</td>
	</tr>

</table>
<br>
</div>
<div class="map1">
	<table width="100%">
		<tr>
			<td colspan="2"><h1> Đánh giá khách hàng về QACARE</h1></td>
		</tr>
		<tr >
			<td>
				<img src="../public/khach1.jpg" width="80px" align="left">

			</td>
			<td class="vien">
				<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span> Sản phẩm tốt, chất lượng, giá cả phù hợp nhưng vì vẫn ế nên cho 4 sao nhé shop =))))
			</td>
		</tr>
		<tr>
			<td>
				<img src="../public/khach 2.jpg">
			</td>
			<td class="vien">
				<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span> Shop ngay gần nhà, sản phẩm dụng tốt, date dài, nhân viên thân thiện, tư vấn tốt <3
			</td>
		</tr>
		<tr>
			<td>
				<img src="../public/khach3.jpg">
			</td>
			<td class="vien">
				<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span> Sản phẩm tốt, có thể check được mã vạch, có bán phụ kiện rất xinh
			</td>
		</tr>
		<tr>
			<td>
				<img src="../public/khach4.jpg">
			</td>
			<td class="vien">
				<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span> Mình hay đặt onl, không như nhưng shop khác thường ship đồ tồn kho cho khách, QACARE luôn ship đồ mới, hsd dài và luôn tặng quà cho mình <3 <3 
			</td>
		</tr>
	</table>
</div>
<div class="map">
	<h1 style="padding-bottom: 20px; padding-top:20px;">Đăng ký nhận thông tin</h1>
	<form method="POST" onsubmit="return validatejs()" style="text-align: center; padding: 50px; background-color: lightgray; margin-left: 100px; margin-right: 100px; margin-bottom: 20px;">
		<label>Họ tên
			<br>
			<input type="text" name="name" id="name" style="width: 500px;">
			<br>
			<span id="ername" class="show"></span>
		</label>
		<br>
		<br>
		<label>Email
			<br>
			<input type="text" name="email" id="email" style="width: 500px;">
			<br>
			<span id="ermail" class="show"></span>
		</label>
		<br>
		<br>
		 <input type="checkbox" id="box" name="box" checked="" >
  <label for="vehicle2"> Tôi muốn nhận thông báo về các sản phẩm mới</label><br>
  <br>
  <span id="erbox" class="show"></span>
  <br>
  <br>
  <button type="submit" style="width: 200px; height: 38px;">Gửi</button>
	</form>
</div>


<?php require_once("layout/footer.php")  ?>