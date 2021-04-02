<?php 
if (isset($_POST['btn'])) {
	$name = $_POST['name'];
	$price = $_POST['price'];
	$status = $_POST['status'];
	$description = $_POST['description'];
	$id_type = $_POST['type'];
	$id_brand = $_POST['brand'];
	if ($_FILES['url']['size'] > 0) {
		$folder ="../public/";
		$img = $_FILES['url']['name'];
		$url = $folder.$img;
		move_uploaded_file($_FILES['url']['tmp_name'], $url);
			}
	$sql = "INSERT INTO products VALUES (NULL,'$name','$url','$price','$description','$status','$id_type','$id_brand')";
	$result = mysqli_query($conn,$sql);
	if (!$result) {
		echo "Error: ".mysqli_error($conn);
	}
	else{
		header("Location: index.php?module=products&action=list");
	}
	
}

 ?>
<?php
$title = "Thêm sản phẩm";
require_once("layout/header.php");
?>
  <style type="text/css">
	#insert-products{
		/*padding: 15px;*/
		text-align: center;
		font-size: large;
		background-color: #EEEEEE;
		/*margin-right: 150px;*/
		/*margin-left: 30px;*/
		/*margin-top: 20px;*/
		/*margin-bottom: 20px;*/
		margin: auto;
	}
	#i1{
		width: 100%;
		height: 10vh;
		float: left;
	}
	#t1{
		width: 33%;
		float: left;
	}
	#g1{
		width: 34%;
		float: left;
	}
	#p1{
		width: 33%;
		float: left;
	}
	#i2{
		width: 100%;
		height: 10vh;
		float: left;
	}
	#t2{
		width: 33%;
		float: left;
	}
	#g2{
		width: 34%;
		float: left;
	}
	#p2{
		width: 33%;
		float: left;
	}
	#i4{
		width: 100%;
		
	}
			button, input, select{
			border: 0;
			border-radius: 20px;
			}
		input{
		
			border-bottom: 2px solid #444;
			padding: 12px 12px 12px 20px;
			
		}
		button{
			
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
	/*	div#g1{
			height: 68px;
		}*/
		
</style>
<script type="text/javascript">
	function validatejs(){
			
			var vName = document.getElementById('name');
			var vPrice = document.getElementById('price');
			var vUrl = document.getElementById('url');

			
			var vErname = document.getElementById('ername');
			var vErprice = document.getElementById('erprice');
			var vErurl = document.getElementById('erurl');

	
			var name = vName.value.trim();
			var price = vPrice.value.trim();
			var url = vUrl.value.trim();

		
			var flagN=false;
			var flagP=false;
			var flagU=false;
		
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
				vErname.innerHTML="Hãy nhập tên sản phẩm!";
			 	vName.classList.add('err');
			}
			// else if(check.test(email)){
			// 	flagE=true;
			// 	vEmail.classList.add('success');
			// }
			else{
				// vErname.innerHTML="Email đăng ký không hợp lệ!";
			 // 	vEmail.classList.add('err');
			 flagN=true;
			 vName.classList.add('success');
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
			
			if(url==""){
				vErurl.innerHTML="Hãy chọn ảnh sản phẩm!";
				vUrl.classList.add('err');
			}
			else{
				flagU=true;
				vUrl.classList.add('success');
			}
			if(price==""){
				vErprice.innerHTML="Hãy nhập giá sản phẩm!";
				vPrice.classList.add('err');
			}
			else{
				flagP=true;
				vPrice.classList.add('success');
			}
			
			if(flagN==true&&flagP==true&&flagU==true)return true;
			else return false;
		}
</script>
<div id="insert-products">
	<form method="POST" enctype="multipart/form-data" onsubmit="return validatejs()"> 
		<div id="i1">
			<div id="t1">
		<label>
			<b>Sản phẩm</b><br>
			<input type="text" name="name" id="name" placeholder="Tên sản phẩm" style="height: 25px; width: 250px; text-align: center;">
			<br>
			<span id="ername" class="show"></span>
		</label>
			</div>
		<div id="g1">
		<label>
			<b>Hình ảnh</b><br>
			<input type="file" name="url" id="url" accept="*/images" style="border: 0; border-radius: 0; font-weight: 0; height: 30px;">
			<br>
			<span id="erurl" class="show"></span>
		</label>
			</div>
			<div id="p1">
		<label>
			<b>Giá NY</b><br>
			<input type="number" step="1" name="price" id="price" placeholder="Giá sản phẩm:" style="height: 25px; width: 250px; text-align: center;">
			<br>
			<span id="erprice" class="show"></span>
		</label>
		</div>
		</div>
		<div id="i2">
			
		<div id="t2">
		<label>
			<b>Tình trạng</b><br>
			<select name="status" style="height: 25px; width: 250px; text-align: center;">
				<option value="1" selected="">Còn hàng</option>
				<option value="0">Hết hàng</option>
				<option value="2">Đang về hàng</option>
				<option value="-1">Ngừng kinh doanh</option>
			</select>
		</label>
		</div>
		<div id="g2">
		<label>
			<b>Thương hiệu</b><br>
			<select name="brand" style="height: 25px; width: 250px; text-align: center;">
				<?php 
					$sql = "SELECT id,name FROM brands";
					$result = mysqli_query($conn,$sql);
					if (!$result) {
						echo "Error: ".mysqli_error($conn);		
					}
					else if(mysqli_num_rows($result)>0){
						foreach($result as $row){
							$id_brand = $row['id'];
							echo "<option value = '$id_brand'>".$row['name']."</option>";
						}
					}
				 ?>
			</select>
		</label>
		</div>
		<div id="p2">
			<label>
			<b>Loại sản phẩm</b><br>
			<select name="type" style="height: 25px; width: 250px; text-align: center;">
				<?php 
					$sql = "SELECT id,name FROM types";
					$result = mysqli_query($conn,$sql);
					if (!$result) {
						echo "Error: ".mysqli_error($conn);		
					}
					else if(mysqli_num_rows($result)>0){
						foreach($result as $row){
							$id_type = $row['id'];
							echo "<option value = '$id_type'>".$row['name']."</option>";
						}
					}
				 ?>
			</select>
		</label>
		</div>
		</div>
		<div id="i4">		<label>
			<b>Mô tả sản phẩm</b><br>
			<textarea name="description" id="editor1" required=""></textarea>
			<script>    CKEDITOR.replace( 'editor1' );</script>
		</label>
		</div>
		<br>
		<button name="btn" type="submit" style="height: 25px; width: 60px;"><b>Thêm</b></button>


	</form>

</div>

<?php 
require_once("layout/footer.php");
 ?>