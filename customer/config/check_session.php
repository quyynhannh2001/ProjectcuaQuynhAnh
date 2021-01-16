<?php 
	require_once("session.php");
	if (!isset($_SESSION['customer'])) {
		header("Location: index.php?module=common&action=login");
	}

 ?>