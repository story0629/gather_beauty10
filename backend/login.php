<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-9">
	<title>作品集登入頁_吳嘉皓作品集</title>
	<link rel="icon" type="image/png" href="../images/logo_thumbs.png">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/backend.css">
	<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
	<?php require_once("nav.php"); ?>
		<?php if(isset($_GET["error"]) && $_GET["error"] ==2) { ?>
		<h2 class="error">請輸入帳號密碼。アカウントとパスワードをご入力ください。</h2>
		<?php header("Refresh:1;url='login.php'"); ?>
		<?php } ?>
		<?php if(isset($_GET["error"]) && $_GET["error"] ==3) { ?>
		<h2 class="error">帳號或密碼有錯誤。アカウントやパスワードが間違っています。</h2>
		<?php header("Refresh:1;url='login.php'"); ?>
		<?php } ?>
	<div class="container clearfix">
		<div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 logo_backend"><img src="../images/logo.png"></div>
		<form action="login_OK.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">Account：</label>
				<input type="text" placeholder="人材採用専門_banana" name="user" class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			</div>
			<div class="form-group">
				<label class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">Password：</label>
				<input type="password" placeholder="人材採用専門_banana" name="password" class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			</div>
			<div class="clearfix">
				<input type="submit" value="送出" class="btn btn-default col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-3">
				<input type="button" value="返回" class="btn btn-danger col-md-3 col-sm-3 col-xs-3" onclick="history.back()">
			</div>
		</form>
	</div>
	<?php require_once("footer_sticky.php"); ?>
</body>
</html>