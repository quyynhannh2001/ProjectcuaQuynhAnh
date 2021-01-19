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
 		padding: 15px;
 		font-size: larger;
 		margin-top: 50px;

 	}
 	#edit-types form{
 		margin: auto;
 		padding: 100px;
 		background-color: lightgray;
 		margin-left: 200px;
 		margin-right: 200px;
 		text-align: center;

 	}
 </style>
<div id="edit-types">
	<form method="POST">
 		<label>
 			<b>Tên loại sản phẩm</b><br>
 			
 			<input type="text" name="name" required="" placeholder="Tên loại sản phẩm:" style="height: 25px; width: 250px;" value="<?php echo $name; ?>">
 		</label>
 		<br><br>
 		<button type="submit" name="btn" style="height: 25px; width: 100px;"><b>Cập nhật</b></button>
 	</form>
</div>
<?php 
require_once("layout/footer.php");
 ?>