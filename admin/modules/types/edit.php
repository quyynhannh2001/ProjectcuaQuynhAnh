<?php 
$name = "";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM types WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		echo "Error; ".mysqli_error($conn);
	}
	else if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_assoc($result);
		$name = $row['name'];
	}
}
if (isset($_POST['btn'])) {
	$name = $_POST['name'];
	$sql = "UPDATE types SET name = '$name' WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		echo "Error: ".mysqli_error($conn);
	}
	else{
		header("Location: index.php?module=types&action=list");
	}

}
 ?>


<?php 
$title = "Chỉnh sửa loại sản phẩm";
require_once("layout/header.php");
 ?>
  <style type="text/css">
 	#edit-types{
 		/*padding: 15px;*/
 		font-size: larger;
 		/*padding-left: 40px;*/


 		
 		/*margin-top: 50px;*/

 	}
 	#edit-types form{
 		/*margin: auto;*/
 		/*padding: 150px;*/
 		background-color: #EEEEEE;
 		text-align: center;
 		padding-top: 150px;
 		padding-bottom: 180px;

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
			
			var vName = document.getElementById('name');
			// var vPrice = document.getElementById('price');
			// var vUrl = document.getElementById('url');

			
			var vErname = document.getElementById('ername');
			// var vErprice = document.getElementById('erprice');
			// var vErurl = document.getElementById('erurl');

	
			var name = vName.value.trim();
			// var price = vPrice.value.trim();
			// var url = vUrl.value.trim();

		
			var flagN=false;
			// var flagP=false;
		
		
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
				vErname.innerHTML="Hãy nhập tên loại sản phẩm!";
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
			
			// if(url==""){
			// 	vErurl.innerHTML="Hãy chọn ảnh sản phẩm!";
			// 	vUrl.classList.add('err');
			// }
			// else{
			// 	flagU=true;
			// 	vUrl.classList.add('success');
			// }
			// if(price==""){
			// 	vErprice.innerHTML="Hãy nhập giá sản phẩm!";
			// 	vPrice.classList.add('err');
			// }
			// else{
			// 	flagP=true;
			// 	vPrice.classList.add('success');
			// }
			
			if(flagN==true)return true;
			else return false;
		}
</script>
<div id="edit-types">
	<form method="POST" onsubmit="return validatejs()">
 		 		<br><br><br>
 		<label>
 			<b>Tên loại sản phẩm:</b>
 			
 			<input type="text" name="name" id="name" style="width: 300px; height: 30px;" value="<?php echo $name; ?>">
 			<br>
 			<span id="ername" class="show"></span>
 		</label>
 		<br><br>
 		<button type="submit" name="btn" style="height: 38px; width: 100px;"><b>Cập nhật</b></button>

 	</form>
</div>
<?php 
require_once("layout/footer.php");
 ?>