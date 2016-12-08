<?php
	require_once("connect_database.php");
	$name = $_POST["name"];
	$tw = $_POST["tw"];
	$jp = $_POST["jp"];
	$photo1 = $_FILES["photo"]["name"][0];
	$photo2 = $_FILES["photo"]["name"][1];
	$photo3 = $_FILES["photo"]["name"][2];

	$i = count($_FILES["photo"]["name"]);
	for($j=0;$j<$i;$j++){
		$photo = $_FILES["photo"]["name"][$j];
		$photo_tmp = $_FILES["photo"]["tmp_name"][$j];
		$error = $_FILES["photo"]["error"][$j];
		$IMGPATH = "../images/graphic/";
		$target = $IMGPATH.$photo;
		$target_final = iconv("utf-8","big5",$target);
		if($error==0){
			if(move_uploaded_file($photo_tmp,$target_final)){
				header("Location:graphic.php?success=true");				
			}else{
				echo "上船失敗";
			}
		}else if($error==4){
			echo "沒有檔案";
		}else{
			echo "上傳錯誤";
		}
	}
$sql = "INSERT INTO `graphic`(name,small_img,images1,images2,tw,jp)
		    	VALUES('$name','$photo1','$photo2','$photo3','$tw','$jp')";
	mysql_query($sql);
?>
