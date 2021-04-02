<?php 
if (isset($_POST['btn'])) {
 	$name = $_POST['name'];
 	$madein = $_POST['madein'];
 	$sql = "INSERT INTO brands VALUES (NULL, '$name', '$madein')";
 	$result = mysqli_query($conn, $sql);
 	if (!$result) {
 		echo "Error: ".mysqli_error($conn);
 	}
 	else{
 		header("Location: index.php?module=brands&action=list");
 	}
 } ?>


<?php 
$title = "Thêm thương hiệu";
require_once("layout/header.php");
 ?>
 <style type="text/css">
 #insert-brands{
 		/*padding: 15px;*/
 		font-size: larger;
 		/*padding-left: 40px;*/
 		
 		/*margin-top: 50px;*/

 	}
 	#insert-brands form{
 		/*margin: auto;*/
 		/*padding: 150px;*/
 		background-color: #EEEEEE;
 		text-align: center;
 		padding-top: 120px;
 		padding-bottom: 170px;
 		/*padding-right: 20px;*/
 		

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
 <script type="text/javascript">
			

		function validatejs(){
			
			var vname = document.getElementById('name');
			var vmade = document.getElementById('made');

			
			var vername = document.getElementById('ername');
			var vermade = document.getElementById('ermade');

	
			var name = vname.value.trim();
		
			var made = vmade.value.trim();

		
			var flagN=false;
		
			var flagM=false;
		
			// const check=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
			
			

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
				vername.innerHTML="Hãy nhập tên thương hiệu!";
			 	vname.classList.add('err');
			}
			// else if(check.test(email)){
			// 	flagE=true;
			// 	vEmail.classList.add('success');
			// }
			else{
				// vErname.innerHTML="Email đăng ký không hợp lệ!";
			 // 	vEmail.classList.add('err');
			 flagN=true;
			 vname.classList.add('success');
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
			
			if(made==""){
				vermade.innerHTML="Hãy nhập xuất xứ!";
				vmade.classList.add('err');
			}
			else{
				flagM=true;
				vmade.classList.add('success');
			}
			
			if(flagN==true&&flagM==true)return true;
			else return false;
		}
</script>
 <div id="insert-brands">
 	<form method="POST" onsubmit="return validatejs()">
 		<label>
 			<b>Tên thương hiệu</b><br>
 			
 			<input type="text" name="name" id="name" placeholder="Tên thương hiệu:" style="height: 25px; width: 250px; text-align: center;">
 			<br>
 			<span id="ername" class="show"></span>
 		</label>
 		<br><br>
 		<label>
 			<b>Xuất xứ</b><br>
 			<input type="text" name="madein" id="made" placeholder="Tên nước sản xuất:" style="height: 25px; width: 250px; text-align: center;">
 			<br>
 			<span id="ermade" class="show"></span>
 		</label>
 		<br><br>
 		<button type="submit" name="btn" style="height: 25px; width: 60px;"><b>Thêm</b></button>

 	</form>
 	
 </div>




 <?php 
 require_once("layout/footer.php"); ?>