<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM customers WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);
	if (!$result) {
		echo "Error: ".mysqli_error($conn);
	}
	else{
		header("Location: index.php?module=customer&action=list");
	}
}
 ?>