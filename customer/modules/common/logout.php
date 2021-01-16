<?php 
if(isset($_SESSION['customer'])){
	unset($_SESSION['customer']);
}
session_destroy();
header("Location:index.php?module=common&action=login");
?>