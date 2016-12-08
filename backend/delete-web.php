<?php 
	require_once("connect_database.php");

	switch ($_GET["i"]) {
		case 1:
		$sql = "UPDATE `web` SET small_img='GG' WHERE id=".$_GET["id"];
		mysql_query($sql);
		unlink("../images/web/".$_GET["images"]);
		header("Location:web_modify.php?id=".$_GET["id"]);
		break;
		case 2:
		$sql = "UPDATE `web` SET images1='GG' WHERE id=".$_GET["id"];
		mysql_query($sql);
		unlink("../images/web/".$_GET["images"]);
		header("Location:web_modify.php?id=".$_GET["id"]);
		break;
		case 3:
		$sql = "UPDATE `web` SET images2='GG' WHERE id=".$_GET["id"];
		mysql_query($sql);
		unlink("../images/web/".$_GET["images"]);
		header("Location:web_modify.php?id=".$_GET["id"]);
		break;
	}

 ?>