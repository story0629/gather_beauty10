<?php require_once("connect_database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>網頁設計作品_吳嘉皓作品集</title>
	<link rel="icon" type="image/png" href="../images/logo_thumbs.png">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/backend.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<?php if (isset($_SESSION["USER"])){ ?>
	<?php require_once("nav.php"); ?>
			<?php if(isset($_GET["success"]) && $_GET["success"]==true){ ?>
			<h2>上傳成功</h2>
			<?php header("Refresh:1;url='web.php'"); ?>
			<?php } ?>
		<div class="container backend">
			<a href="web_add.php" class="web_add col-md-6 col-sm-6 col-xs-6 button">新增||新規登録</a>
			<a href="web_check.php" class="web_check col-md-6 col-sm-6 col-xs-6 button">修改||修正</a>
		</div>
	<?php require_once("footer_sticky.php"); ?>
	<?php
		}else{
			header("Location:login.php");
		}
	?>
</body>
</html>