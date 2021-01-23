<?php 
$name = $madein = "";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM brands WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		echo "Error; ".mysqli_error($conn);
	}
	else if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_assoc($result);
		$name = $row['name'];
		$madein = $row['madein'];
	}
}
if (isset($_POST['btn'])) {
	$name = $_POST['name'];
	$madein = $_POST['madein'];
	$sql = "UPDATE brands SET name = '$name', madein = '$madein' WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	if (!$result) {
		echo "Error: ".mysqli_error($conn);
	}
	else{
		header("Location: index.php?module=brands&action=list");
	}

}
 ?>


<?php 
$title = "Chỉnh sửa thương hiệu";
require_once("layout/header.php");
 ?>
 <style type="text/css">
 	#edit-brands{
 		padding: 15px;
 		font-size: larger;
 		padding-left: 40px;
 		
 		/*margin-top: 50px;*/

 	}
 	#edit-brands form{
 		/*margin: auto;*/
 		padding: 150px;
 		background-color: #EEEEEE;
 		text-align: center;
 		padding-top: 150px;
 		/*padding-right: 20px;*/
 		

 	}
 </style>
<div id="edit-brands">
	<form method="POST">
 		<label>
 			<b>Tên thương hiệu</b><br>
 			
 			<input type="text" name="name" required="" placeholder="Tên thương hiệu:" style="height: 25px; width: 250px; text-align: center;" value="<?php echo $name; ?>">
 		</label>
 		<br><br>
 		<label>
 			<b>Xuất xứ</b><br>
 			<input type="text" name="madein" required="" placeholder="Tên nước sản xuất:" style="height: 25px; width: 250px; text-align: center;" value="<?php echo $madein; ?>">
 		</label>
 		<br><br>
 		<button type="submit" name="btn" style="height: 25px; width: 100px;"><b>Cập nhật</b></button>
 		
 	</form>
</div>
<?php 
require_once("layout/footer.php");
 ?>