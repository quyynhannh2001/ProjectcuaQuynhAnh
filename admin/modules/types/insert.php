<?php 
if (isset($_POST['btn'])) {
 	$name = $_POST['name'];
 	$sql = "INSERT INTO types VALUES (NULL, '$name')";
 	$result = mysqli_query($conn, $sql);
 	if (!$result) {
 		echo "Error: ".mysqli_error($conn);
 	}
 	else{
 		header("Location: index.php?module=types&action=list");
 	}
 } ?>


<?php 
$title = "Thêm loại sản phẩm";
require_once("layout/header.php");
 ?>
 <style type="text/css">
 	#insert-types{
 		padding: 15px;
 		font-size: larger;
 		margin-top: 50px;

 	}
 	#insert-types form{
 		margin: auto;
 		padding: 100px;
 		background-color: lightgray;
 		margin-left: 200px;
 		margin-right: 200px;
 		text-align: center;

 	}
 </style>
 <div id="insert-types">
 	<form method="POST">
 		<label>
 			<b>Tên loại sản phẩm:</b>
 			
 			<input type="text" name="name" required="" placeholder="Tên loại sản phẩm:" style="height: 25px; width: 250px;">
 		</label>
 		<br><br>
 		<button type="submit" name="btn" style="height: 25px; width: 60px;"><b>Thêm</b></button>
 	</form>
 </div>




 <?php 
 require_once("layout/footer.php"); ?>