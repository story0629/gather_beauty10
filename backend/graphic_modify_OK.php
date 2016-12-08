<?php 
	require_once("connect_database.php");
	$id = $_POST["id"];
	$name = $_POST["name"];
	$tw = $_POST["tw"];
	$jp = $_POST["jp"];
	$sql = "UPDATE `graphic` SET name='$name' , tw='$tw' , jp='$jp' WHERE id = $id";
	mysql_query($sql);
	header("Location: graphic_check.php");
?>