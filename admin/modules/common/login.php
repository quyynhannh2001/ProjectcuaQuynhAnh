<?php 
	$error = "";
	if (isset($_POST['btn'])){
		$admin = $_POST['admin'];
		$pass = md5($_POST['pass']);
		$sql = "SELECT id, name FROM admins WHERE (email = '$admin' OR phone = '$admin') AND password = '$pass'";
		$result = mysqli_query($conn, $sql);
		if (!$result){
			$error = mysqli_error($conn);
		}
		else{
			if(mysqli_num_rows($result)==1){
				$row = mysqli_fetch_assoc($result);
				$_SESSION['admin']['id'] = $row['id'];
				$_SESSION['admin']['name'] = $row['name'];
				header("Location:index.php?module=invoices&action=list");
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
	<title>Đăng nhập Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../public/qaa.png" type="image/icon type">
	<meta charset="utf-8">

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
		/*#tong{
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
		}*/
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
			/*padding-bottom: 20px;*/
			

		}
		#giua{
			background-color:white;
			margin-left: 300px;
			margin-top: 50px;
			text-align: center;
			margin-right: 300px;
			padding-top: 120px;
			padding-bottom: 115px;
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
	</style>
	<!-- <script type="text/javascript">
		function ValidateJS(){
			let vAdmin = document.getElementById('admin');
			let vPass = document.getElementById('pass');
			if (vAdmin.value=="") {
				vAdmin.focus();
				vAdmin.placeholder="Hãy nhập Email hoặc số điện thoại";
				return false;
			}
			else if (vPass.value=="") {
				vPass.focus();
				vPass.placeholder="Hãy nhập mật khẩu!";
				return false;
			}
			else{
				if (vAdmin.value=="0921143167" || vAdmin.value=="admin@gmail.com" && vPass=.value=="1"){
					return true;
			}
			else{
				alert("Thông tin đăng nhập không chính xác. Vui lòng đăng nhập lại!");
				return false;
			}
		}
	</script> -->

	<script type="text/javascript">
			

		function validatejs(){
			
			var vEmail = document.getElementById('email');
			var vPass = document.getElementById('pass');

			
			var vErmail = document.getElementById('ermail');
			var vErpass = document.getElementById('erpass');

	
			var email = vEmail.value.trim();
		
			var pass = vPass.value.trim();

		
			var flagE=false;
		
			var flagPW=false;
		
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
			
			if(pass==""){
				vErpass.innerHTML="Hãy nhập mật khẩu của bạn!";
				vPass.classList.add('err');
			}
			else{
				flagPW=true;
				vPass.classList.add('success');
			}
			
			if(flagPW==true&&flagE==true)return true;
			else return false;
		}
</script>
	
</head>
<body style="background-color: black;" >
	<div id="tong">
		<div id="tren">
			<img src="../public/qac.png" style="width: 250px; height: 69px;">
		</div>
		<br><br><br>
		<div id="giua">
			<form method="POST" onsubmit="return validatejs()">
				<h1 style="font-size: 40px;">Đăng nhập</h1>
				<h2 style="color: red;"><?php echo $error; ?></h2>
				<br>
				<input type="text" name="admin" placeholder="Email hoặc số điện thoại:" style="height: 38px; width: 250px;" id="email"><i class="fa fa-user-circle-o" style="font-size:25px"></i>
				<br>
				<span id="ermail" class="show"></span><br>
				<input type="password" name="pass" placeholder="Mật khẩu"  style="height: 38px; width: 250px;" id="pass"><i class="fa fa-lock" style="font-size:25px"></i>
				<br>
				<span id="erpass" class="show"></span><br>
				<button type="submit" name="btn" style="height: 38px; width: 250px;" id="btn"><b>Đăng nhập</b></button>
			</form>
		</div>
	</div>
</body>
</html>