<?php 
	require_once("connect_database.php");
	$id = $_GET["id"];
	$sql = "SELECT * FROM `graphic` WHERE id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>修改平面設計作品_吳嘉皓作品集</title>
	<link rel="icon" type="image/png" href="../images/logo_thumbs.png">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/backend.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<style>
		.img_upload{
			margin: 10px 0;
		}
	</style>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<?php if (isset($_SESSION["USER"])){ ?>
		<?php if ($_SESSION["LEVEL"]==0) { ?>
			<?php require_once("nav.php"); ?>
			<div class="container backend graphic_modify">
				<h1>修正平面設計作品</h1>
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">縮圖</label>
						<?php if($row["small_img"]=="GG"){ ?>
							<form action="upload-graphic.php" method="post"  enctype="multipart/form-data">
								<input type="file" name="photo" class="col-md-2">
								<input type="hidden" name="i" value="1">
								<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
								<input type="submit" value="上傳" class="col-md-10 col-sm-12 col-xs-12 btn-default img_upload">
							</form>
						<?php }else{ ?>
								<img src="../images/graphic/<?php echo $row["small_img"]; ?>" class="thumb">
								<a href="delete-graphic.php?id=<?php echo $row["id"]; ?>&images=<?php echo $row["small_img"]; ?>&i=1" class="fa fa-times fa-lg"></a>
						<?php } ?>
					</div>
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">圖1</label>
						<?php if($row["images1"]=="GG"){ ?>
							<form action="upload-graphic.php" method="post"  enctype="multipart/form-data">
								<input type="file" name="photo" class="col-md-2">
								<input type="hidden" name="i" value="2">
								<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
								<input type="submit" value="上傳" class="col-md-10 col-sm-12 col-xs-12 btn btn-default img_upload">
							</form>
						<?php }else{ ?>
								<img src="../images/graphic/<?php echo $row["images1"]; ?>" class="thumb">
								<a href="delete-graphic.php?id=<?php echo $row["id"]; ?>&images=<?php echo $row["images1"]; ?>&i=2" class="fa fa-times fa-lg"></a>
						<?php } ?>
					</div>
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">圖2</label>
						<?php if($row["images2"]=="GG"){ ?>
							<form action="upload-graphic.php" method="post" enctype="multipart/form-data">
								<input type="file" name="photo" class="col-md-2">
								<input type="hidden" name="i" value="3">
								<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
								<input type="submit" value="上傳" class="col-md-10 col-sm-12 col-xs-12 btn btn-default img_upload">
							</form>
						<?php }else{ ?>
								<img src="../images/graphic/<?php echo $row["images2"]; ?>" class="thumb">
								<a href="delete-graphic.php?id=<?php echo $row["id"]; ?>&images=<?php echo $row["images2"]; ?>&i=3" class="fa fa-times fa-lg"></a>
						<?php } ?>
					</div>
				<form action="graphic_modify_OK.php" method="post" class="form-horizontal" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">名稱</label>
						<input type="text" name="name" class="col-md-10 col-sm-12 col-xs-12" value="<?php echo $row["name"]; ?>">
					</div>
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">請輸入中文說明</label>
						<textarea name="tw" class="col-md-10 col-sm-12 col-xs-12"><?php echo $row["tw"]; ?></textarea>
					</div>
					<div class="form-group">
						<label class="col-md-2 col-sm-12 col-xs-12">請輸入日文說明</label>
						<textarea name="jp" class="col-md-10 col-sm-12 col-xs-12"><?php echo $row["jp"]; ?></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="送出" class="btn btn-default col-md-4 col-md-offset-2 col-sm-6 col-xs-6">
						<input type="button" value="返回" class="btn btn-danger col-md-4 col-sm-6 col-xs-6" onclick="history.back()">
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