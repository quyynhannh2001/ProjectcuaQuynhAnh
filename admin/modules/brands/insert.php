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
 		padding: 15px;
 		font-size: larger;
 		margin-top: 50px;

 	}
 	#insert-brands form{
 		margin: auto;
 		padding: 100px;
 		background-color: lightgray;
 		margin-left: 200px;
 		margin-right: 200px;
 		text-align: center;

 	}
 </style>
 <div id="insert-brands">
 	<form method="POST">
 		<label>
 			<b>Tên thương hiệu</b><br>
 			
 			<input type="text" name="name" required="" placeholder="Tên thương hiệu:" style="height: 25px; width: 250px;">
 		</label>
 		<br><br>
 		<label>
 			<b>Xuất xứ</b><br>
 			<input type="text" name="madein" required="" placeholder="Tên nước sản xuất:" style="height: 25px; width: 250px;">
 		</label>
 		<br><br>
 		<button type="submit" name="btn" style="height: 25px; width: 60px;"><b>Thêm</b></button>
 	</form>
 </div>




 <?php 
 require_once("layout/footer.php"); ?>