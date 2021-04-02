<?php

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "UPDATE invoices SET status = 1 WHERE id = '$id' ";
	$result = mysqli_query($conn, $sql);
	if($result == false){
		echo "Error: ".mysqli_error($conn);
	}
	else{
		header("Location: index.php?module=invoices&action=list");
		die();
	}
}
else{
	header("Location: index.php");
	die();
 }
?>


