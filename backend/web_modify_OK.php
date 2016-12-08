<?php 
	require_once("connect_database.php");
	$id = $_POST["id"];
	$name = $_POST["name"];
	$url = $_POST["url"];
	$tw = $_POST["tw"];
	$jp = $_POST["jp"];
	$sql = "UPDATE `web` SET name='$name',url='$url',tw='$tw',jp='$jp' WHERE id = $id";
	mysql_query($sql);
	header("Location: web_check.php");
?>