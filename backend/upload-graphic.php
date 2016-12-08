<?php 
	require_once("connect_database.php");
	$photo = $_FILES["photo"]["name"];
	$tmp_name = $_FILES["photo"]["tmp_name"];
	$error = $_FILES["photo"]["error"];
	$target = "../images/graphic/".$photo;
	$target_final = iconv("utf-8","big5",$target);
	if($error==0){
		if(move_uploaded_file($tmp_name, $target_final)){
			switch($_POST["i"]){
				case 1:
				$sql = "UPDATE `graphic` SET small_img='$photo' WHERE id=".$_POST["id"];
				mysql_query($sql);
				header("Location:graphic_modify.php?id=".$_POST["id"]);
				break;
				case 2:
				$sql = "UPDATE `graphic` SET images1='$photo' WHERE id=".$_POST["id"];
				mysql_query($sql);
				header("Location:graphic_modify.php?id=".$_POST["id"]);
				break;
				case 3:
				$sql = "UPDATE `graphic` SET images2='$photo' WHERE id=".$_POST["id"];
				mysql_query($sql);
				header("Location:graphic_modify.php?id=".$_POST["id"]);
				break;			
			}
		}
	}

 ?>