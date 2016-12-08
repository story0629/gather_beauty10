<?php 
	require_once("connect_database.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>新增平面設計作品_吳嘉皓作品集</title>
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
		<?php if ($_SESSION["LEVEL"]==0) { ?>
					<?php require_once("nav.php"); ?>
			<div class="container backend graphic_add">
				<h1>新增平面設計作品</h1>
				<form action="graphic_add_OK.php" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">名稱</label>
						<input type="text" name="name" class="col-md-10 col-sm-12 col-xs-12">
					</div>
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">請上傳縮圖</label>
						<input type="file" name="photo[]" class="col-md-10 col-sm-12 col-xs-12">
					</div>
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">請上傳圖1</label>
						<input type="file" name="photo[]" class="col-md-10 col-sm-12 col-xs-12">
					</div>
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">請上傳圖2</label>
						<input type="file" name="photo[]" class="col-md-10 col-sm-12 col-xs-12">
					</div>
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">請輸入中文說明</label>
						<textarea name="tw" class="col-md-10 col-sm-12 col-xs-12"></textarea>
					</div>
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">請輸入日文說明</label>
						<textarea name="jp" class="col-md-10 col-sm-12 col-xs-12"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="送出" class="btn btn-danger col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
					</div>
				</form>
			</div>
		<?php require_once("footer.php"); ?>

		<?php }else{ header("Location:graphic_check.php"); } ?>
	<?php
		}else{
			header("Location:login.php");
		}
	?>
</body>
</html>