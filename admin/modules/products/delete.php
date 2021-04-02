<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE FROM products WHERE id = '$id'";
		$result = mysqli_query($conn,$sql);
	if (!$result) {
		echo "Error: ".mysqli_error($conn);
	}
	
	else{
		header("Location: index.php?module=products&action=list");
	}
}
 ?>