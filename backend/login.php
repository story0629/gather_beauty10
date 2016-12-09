<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>後台登入頁_拾美地產</title>
	<link rel="icon" type="image/svg" href="../images/logo_thumbs.svg">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/backend.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script>
		$(function(){
		   	var w = $(window).width();
    		if(w>700){
    			$("").addClass("top80");
    		}else{
    			$("").addClass("top60");
    		};
    		$(window).resize(function(){
    			var w = $(window).width();
	    		if(w>700){
	    			$(".logo_backend").removeClass("top60");
	    			$(".logo_backend").addClass("top80");
	    		}else{
	    			$(".logo_backend").removeClass("top80");
	    			$(".logo_backend").addClass("top60");
	    		};
	    	});
    	});
	</script>
</head>
<body>
	<?php include_once("nav.php"); ?>
	<div class="logo_backend"><img src="../images/logo.svg"></div>
	<form action="login_OK.php" method="post" class="">
		<div>
			<label class="">Email：</label>
			<input type="email" placeholder="請輸入email" name="email" class="">
		</div>
		<div>
			<label class="">Password：</label>
			<input type="password" placeholder="請輸入密碼" name="password" class="">
		</div>
		<div>
			<input type="submit" value="送出" class="">
			<input type="button" value="返回" class="" onclick="history.back()">
		</div>
	</form>
	<?php include_once("footer_sticky.php"); ?>
</body>
</html>