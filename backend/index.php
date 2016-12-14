<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>後台首頁_拾美地產</title>
	<link rel="icon" type="image/svg" href="../images/logo_thumbs.svg">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/backend.css">
	<link rel="stylesheet" href="../css/form.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script>
		$(function(){
			var h = $(window).height();
    		var navH = $("nav").height();
    		var footerH = $("footer").height(); 
    		$(".select").css("height",h-navH-footerH);
		   	var w = $(window).width();
    		if(w>700){
    			$(".select").addClass("top80");
    		}else{
    			$(".select").addClass("top60");
    		};
    		$(window).resize(function(){
    			var h = $(window).height();
    			var navH = $("nav").height();
    			var footerH = $("footer").height(); 
    			$(".select").css("height",h-navH-footerH);
    			var w = $(window).width();
	    		if(w>700){
	    			$(".select").removeClass("top60");
	    			$(".select").addClass("top80");
	    		}else{
	    			$(".select").removeClass("top80");
	    			$(".select").addClass("top60");
	    		};
	    	});
    	});
	</script>
</head>
<body>
	<?php include_once("nav.php"); ?>
	<div class="select fixed-width">
		<a href="javascript:;">新增&修改建案內容</a>
		<a href="javascript:;">新增&修改最新消息</a>
		<a href="javascript:;">修改關於拾美</a>
		<a href="javascript:;">查看會員資料</a>
	</div>
	<?php include_once("footer_sticky.php"); ?>
</body>
</html>