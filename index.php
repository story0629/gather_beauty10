<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta itemprop="image" content="http://www.kingary-sewing.com/tommy/images/graphic/thumb_logo.png">
	<meta name="description" content="吳嘉皓的個人作品集，個人較擅長的是平面設計&網頁設計，請多多指教。">
	<meta name="og:description" content="吳嘉皓的個人作品集，個人較擅長的是平面設計&網頁設計，請多多指教。" />
	<meta property="og:title" content="吳嘉皓的作品集"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.kingary-sewing.com/tommy/"/>
	<meta property="og:image" content="http://www.kingary-sewing.com/tommy/images/osakajyou.jpg"/>
	<meta property="og:site_name" content="吳嘉皓的作品集" />
	<title>吳嘉皓的作品集</title>
	<link rel="icon" type="image/svg" href="images/logo_thumbs.svg">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/zotabox.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
    	$(function(){
    		var h = $(window).height();
    		var navH = $("nav").height();
    		var footerH = $("footer").height(); 
    		$(".home,footer").css("height",h-navH-footerH);
    		var w = $(window).width();
    		if(w>700){
    			$(".home,footer").addClass("top80");
    		}else{
    			$(".home,footer").addClass("top60");
    		};
    		$(window).resize(function(){
    			var h = $(window).height();
    			var navH = $("nav").height();
    			var footerH = $("footer").height(); 
    			$(".home").css("height",h-navH-footerH);
    			var w = $(window).width();
	    		if(w>700){
	    			$(".home,footer").removeClass("top60");
	    			$(".home,footer").addClass("top80");
	    		}else{
	    			$(".home,footer").removeClass("top80");
	    			$(".home,footer").addClass("top60");
	    		};
	    	});
		});
    </script>
</head>
<body>
	<?php include_once("nav.php"); ?>
	<div class="home full-width"></div>	
	<?php include_once("footer.php"); ?>
<script type="text/javascript">
(function(d,s,id){var z=d.createElement(s);z.type="text/javascript";z.id=id;z.async=true;z.src="//static.zotabox.com/1/c/1c0aee2919d74bd98a2b4234570f1f8a/widgets.js";var sz=d.getElementsByTagName(s)[0];sz.parentNode.insertBefore(z,sz)}(document,"script","zb-embed-code"));
</script>
</body>
</html>