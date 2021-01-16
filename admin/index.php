<?php 
$module = $action = "";
if (isset($_GET['module'])) {
	$module = $_GET['module'];
}
if (isset($_GET['action'])) {
	$action = $_GET['action'];
}
if ($module == "" || $action == "") {
	$module = "common";
	$action = "login";
}
$path = "modules/$module/$action.php";

if (file_exists($path)) {
	require_once("config/session.php");
	require_once("config/connect.php");
	require_once($path);
	require_once("config/close.php");
}
else{
	require_once("index.php?module=common&action=404.php");
}

 ?>
