<?php 
	require_once("connect_database.php"); 
	$sql = "SELECT * FROM `about`";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
?>

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
    		// var footerH = $("footer").height(); 
    		var footerH = 0; 
    		$(".home").css("height",h-navH-footerH);
    		var w = $(window).width();
    		if(w>700){
    			$(".home,.about,footer").addClass("top80");
    		}else{
    			$(".home,.about,footer").addClass("top60");
    		};
    		$(window).resize(function(){
    			var h = $(window).height();
    			var navH = $("nav").height();
    			// var footerH = $("footer").height(); 
    			var footerH = 0; 
    			$(".home").css("height",h-navH-footerH);
    			var w = $(window).width();
	    		if(w>700){
	    			$(".home,.about,footer").removeClass("top60");
	    			$(".home,.about,footer").addClass("top80");
	    		}else{
	    			$(".home,.about,footer").removeClass("top80");
	    			$(".home,.about,footer").addClass("top60");
	    		};
	    	});
	    	$(".mouse").click(function(){
	    		$("html,body").animate({
	    			scrollTop:$(window).height(),
	    		},5000)
	    	});
		});
    </script>
</head>
<body>
	<?php include_once("nav.php"); ?>
	<div class="home full-width">
		<div class="mouse">
			<img src="images/mouse.png" alt="">
		</div>
	</div>	
	<div class="about full-width">
		<div class="fixed-width">
			<h2>關於拾美地產</h2>
			<div class="content"><?php echo $row["view"]; ?></div>
			<div class="detail">
				<ul>
					<li>公司名稱：<?php echo $row["name"]; ?></li>
					<li>負責人&nbsp;：<?php echo $row["tanntou"]; ?></li>
					<li>成立日期：<?php echo $row["date"]; ?></li>
					<li>登記地址：<?php echo $row["address"]; ?></li>
					<li>登記電話：<?php echo $row["phoneNumber"]; ?></li>
					<li>統一編號：<?php echo $row["code"]; ?></li>
					<li>營業時間：<?php echo $row["open"]; ?></li>
					<li>事業內容：<?php echo $row["content"]; ?></li>
				</ul>
			</div>
		</div>
	</div>
	<?php include_once("footer.php"); ?>
<script type="text/javascript">
(function(d,s,id){var z=d.createElement(s);z.type="text/javascript";z.id=id;z.async=true;z.src="//static.zotabox.com/1/c/1c0aee2919d74bd98a2b4234570f1f8a/widgets.js";var sz=d.getElementsByTagName(s)[0];sz.parentNode.insertBefore(z,sz)}(document,"script","zb-embed-code"));
</script>
</body>
</html>