<?php 
	require_once("connect_database.php");

	switch ($_GET["i"]) {
		case 1:
		$sql = "UPDATE `graphic` SET small_img='GG' WHERE id=".$_GET["id"];
		mysql_query($sql);
		unlink("../images/graphic/".$_GET["images"]);
		header("Location:graphic_modify.php?id=".$_GET["id"]);
		break;
		case 2:
		$sql = "UPDATE `graphic` SET images1='GG' WHERE id=".$_GET["id"];
		mysql_query($sql);
		unlink("../images/graphic/".$_GET["images"]);
		header("Location:graphic_modify.php?id=".$_GET["id"]);
		break;
		case 3:
		$sql = "UPDATE `graphic` SET images2='GG' WHERE id=".$_GET["id"];
		mysql_query($sql);
		unlink("../images/graphic/".$_GET["images"]);
		header("Location:graphic_modify.php?id=".$_GET["id"]);
		break;
	}

 ?>