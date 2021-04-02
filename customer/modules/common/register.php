<?php 
		$error = "";
	if (isset($_POST['btn'])){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$pass = md5($_POST['pass']);
		$sql = "INSERT INTO customers VALUES (NULL,'$name','$address','$phone','$email','$pass')";
		$result = mysqli_query($conn, $sql);
		if (!$result){
			$error = mysqli_error($conn);
		}
		else{
			// echo "Đăng ký thành công. <a href='index.php?module=common&action=login'>Đăng nhập</a>";
			header("Location:index.php?module=common&action=login");
		}
        

	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Đăng ký tài khoản</title>
	<meta charset="utf-8">
	<link rel="icon" href="../public/qaa.png" type="image/icon type">
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
			padding: 15px;

		}
		#giua{
			background-color:white;
			margin-left: 300px;
			margin-top: 50px;
			text-align: center;
			margin-right: 300px;
			padding-top: 50px;
			padding-bottom: 50px;
			border-top-right-radius: 30%;
    		border-bottom-left-radius: 30%;
    		border-top-left-radius: 30%;
    		border-bottom-right-radius: 30%;
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
		button{
			width: 250px;
			/*padding-right: 10px;*/
			margin-left: 13px;
		}
		input, button, i{
			font-size: 13.3333px;
			font-weight: 600;
		}
		i{
			position: absolute;
			/*top: 15px;*/
			margin-top: 8px;
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
		body:before, body:after{
			content: "";
			position: absolute;
			height: 300px;
			width: 900px;
		}
		body:before{
			background-image: linear-gradient(to right, #D9D9D9, black); 
			bottom: 0;
			left: 0;
			clip-path: polygon(0 0, 0 100%, 100% 100%);
			opacity: 50%;
		}
		body:after{
			background-image: linear-gradient(to right, black, #D9D9D9); 
			top: 0;
			right: 0;
			clip-path: polygon(100% 0, 0 0, 100% 100%);
			opacity: 50%;
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
			font-size: 14px;
		}
		
	</style>
	<script type="text/javascript">
		
		function validatejs(){
			var vName = document.getElementById('name');
			var vEmail = document.getElementById('email');
			var vPhone = document.getElementById('phone');
			var vAddress = document.getElementById('address');
			var vPass = document.getElementById('pass');
			var vRepass = document.getElementById('repass');

			var vErname = document.getElementById('ername');
			var vErmail = document.getElementById('ermail');
			var vErphone = document.getElementById('erphone');
			var vEraddress = document.getElementById('eraddress');
			var vErpass = document.getElementById('erpass');
			var vErrp = document.getElementById('errp');

			var name =  vName.value.trim();
			var email = vEmail.value.trim();
			var phone = vPhone.value.trim();
			var address = vAddress.value.trim();
			var pass = vPass.value.trim();
			var repass = vRepass.value.trim();

			var flagN=false;
			var flagE=false;
			var flagP=false;
			var flagA=false;
			var flagPW=false;
			var flagRPW=false;
			const RegE=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
			const RegP=/^(\+84|0)[0-9]{9}$/g;
			

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

			if(name==""){
				vErname.innerHTML="Hãy nhập họ và tên của bạn!";
			 	vName.classList.add('err');
			}
			else{
				flagN=true;
				vName.classList.add('success');
			}
			if(email==""){
				vErmail.innerHTML="Hãy nhập email của bạn!";
			 	vEmail.classList.add('err');
			}
			else if(RegE.test(email)){
				flagE=true;
				vEmail.classList.add('success');
			}
			else{
				vErmail.innerHTML="Email đăng ký không hợp lệ!";
			 	vEmail.classList.add('err');
			}
			if(phone==""){
				vErphone.innerHTML="Hãy nhập số điện thoại của bạn!";
			 	vPhone.classList.add('err');
			}
			else if(RegP.test(phone)){
				flagP=true;
				vPhone.classList.add('success');
			}
			else{
				vErphone.innerHTML="Số điện thoại đăng kí không hợp lệ!";
			 	vPhone.classList.add('err');
			}
			if(address==""){
				vEraddress.innerHTML="Hãy nhập địa chỉ của bạn!";
				vAddress.classList.add('err');
			}
			else{
				flagA=true;
				vAddress.classList.add('success');
			}
			if(pass==""){
				vErpass.innerHTML="Hãy nhập mật khẩu của bạn!";
				vPass.classList.add('err');
			}
			else{
				flagPW=true;
				vPass.classList.add('success');
			}
			if(repass!=pass){
				vErrp.innerHTML="Mật khẩu nhập lại phải trùng với mật khẩu bạn đã đặt!";
				vRepass.classList.add('err');
				
				
			}
			else if(repass == ""){
				vErrp.innerHTML="Hãy nhập lại mật khẩu!";
				vRepass.classList.add('err');
				
			}
			else{
				flagRPW=true;
				vRepass.classList.add('success');
			}
			if(flagPW==true&&flagA==true&&flagP==true&&flagE==true&&flagN==true&&flagRPW==true)return true;
			else return false;

		}
	// 	function confirmRegister(){
	// 		// return confirm("Đăng ký tài khoản thành công. Hãy đăng nhập lại!");
	// 		// alert('Hãy đăng nhập lại');
	// }
	
	</script>

	
</head>
<body style="background-color: black;" >
	<div id="tong">
		<div id="tren">
			<a href="index.php"><img src="../public/qac.png" style="width: 240px; height: 50px;"></a>
		</div>
		<br>
		<div id="giua">
			<form method="POST" onsubmit="return validatejs()">
				<h1 style="font-size: 40px;">Đăng ký</h1>
				<br>
				<h2 style="color: red"><?php echo $error; ?></h2>
				<input type="text" name="name" id="name" placeholder="Họ tên:" style="height: 38px; width: 300px;">
				<br>
				<span id="ername" class="show"></span>
				<br>
				<input type="text" name="address" id="address" placeholder="Địa chỉ:" style="height: 38px; width: 300px;">
				<br>
				<span id="eraddress" class="show"></span>
				<br>
				<input type="tel" name="phone" id="phone" placeholder="Số điện thoại:" style="height: 38px; width: 300px;">
				<br>
				<span id="erphone" class="show"></span>
				<br>
				<input type="email" name="email" id="email" placeholder="Email:" style="height: 38px; width: 300px;">
				<br>
				<span id="ermail" class="show"></span>
				<br>
				<input type="password" name="pass" id="pass" placeholder="Mật khẩu:" style="height: 38px; width: 300px;">
				<br>
				<span id="erpass" class="show"></span>
				<br>
				<input type="password" name="repass" id="repass" placeholder="Nhập lại mật khẩu:" style="height: 38px; width: 300px;">
				<br>
				<span id="errp" class="show"></span>
				<br>
				<button type="submit" name="btn" style="height: 38px;" onclick = 'return confirmRegister()'>Đăng ký</button>
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