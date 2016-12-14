<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>後台登入頁_拾美地產</title>
	<link rel="icon" type="image/svg" href="../images/logo_thumbs.svg">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/backend.css">
	<link rel="stylesheet" href="../css/form.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script>
		$(function(){
		   	var w = $(window).width();
    		if(w>700){
    			$(".logo_backend,.myForm").addClass("top80");
    		}else{
    			$(".logo_backend,.myForm").addClass("top60");
    		};
    		$(window).resize(function(){
    			var w = $(window).width();
	    		if(w>700){
	    			$(".logo_backend,.myForm").removeClass("top60");
	    			$(".logo_backend,.myForm").addClass("top80");
	    		}else{
	    			$(".logo_backend,.myForm").removeClass("top80");
	    			$(".logo_backend,.myForm").addClass("top60");
	    		};
	    	});
    	});
	</script>
</head>
<body>
	<?php include_once("nav.php") ?>
	<div class="logo_backend"></div>
	<form action="login_OK.php" method="post" class="myForm">
	<?php if(isset($_GET["error"]) && $_GET["error"] ==2) { ?>
		<h2 class="error">請輸入帳號密碼。</h2>
	<?php header("Refresh:1;url='login.php'"); ?>
	<?php } ?>
	<?php if(isset($_GET["error"]) && $_GET["error"] ==3) { ?>
		<h2 class="error">帳號或密碼有錯誤。</h2>
	<?php header("Refresh:1;url='login.php'"); ?>
	<?php } ?>
	<div>
			<label class="">Email：</label>
			<input type="email" placeholder="請輸入email" name="user" class="">
		</div>
		<div>
			<label class="">Password：</label>
			<input type="password" placeholder="請輸入密碼" name="password" class="">
		</div>
		<div class="button">
			<input type="submit" value="送出" class="">
			<input type="button" value="返回" class="" onclick="history.back()">
		</div>
		<!-- <div>
			<a href="add.php">申請帳號密碼</a>
			<a href="forget.php">忘記密碼</a>
		</div> -->
	</form>
	<?php include_once("footer_sticky.php"); ?>
</body>
</html>