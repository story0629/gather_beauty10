<?php require_once("connect_database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
	<title>index</title>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
        $(function(){
            $(window).scroll(function(){
                var h = $(window).scrollTop();
                console.log(h);
                if(h>100){
                    $(".nav").addClass("nav-sticky");
                }else{
                    $(".nav").removeClass("nav-sticky");
                }
            });
            $(".hamburger").click(function(){
                $(this).toggleClass("hamburger-x");
                $(this).next().slideToggle();
            });
          
            $(window).resize(function(){
                var w = $(window).width()/16;//轉換成em
                console.log(w);
                if(w>700){
                    $(".hamburger").next().show();
                }else{
                    $(".hamburger").next().hide();
                    $(".hamburger").removeClass("hamburger-x");
                }
            });
        })
    </script>
</head>
<body>
	<nav class="nav">
		<div class="fixed-width">
			<div class="logo"></div>
		<div class="hamburger"><span></span></div>
			<ul>
            <?php if(isset($_SESSION["USER"])){ ?>
                <li><a href="#">HOME</a></li>
                <li><a href="#">建案介紹</a></li>
                <li><a href="#">最新消息</a></li>
                <li><a href="#">關於拾美</a></li>
                <li><a href="#">會員資料</a></li>
				<li><a href="logout.php?logout=true">會員登出</a></li>
            <?php }else{ ?>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="../product.php">建案介紹</a></li>
                <li><a href="../news.php">最新消息</a></li>
                <li><a href="../about.php">關於拾美</a></li>
                <li><a href="login.php">會員登入</a></li>
            <?php } ?>
			</ul>
			</div>
	</nav>
</body>
</html>