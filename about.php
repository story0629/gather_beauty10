<?php 
	require_once("connect_database.php");
	$sql = "SELECT * FROM `about` WHERE id=1";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>關於拾美地產</title>
	<link rel="icon" type="image/svg" href="images/logo_thumbs.svg">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<?php include_once("nav.php"); ?>	
	<?php echo $row["name"]; ?>
	<?php include_once("footer.php"); ?>	
</body>
</html>