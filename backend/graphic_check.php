<?php 
	require_once("connect_database.php");
	$sql = "SELECT * FROM `graphic`";
	$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>確認平面設計作品_吳嘉皓作品集</title>
	<link rel="icon" type="image/png" href="../images/logo_thumbs.png">
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/backend.css">
    <link rel="stylesheet" href="../css/jquery.lazyloadxt.spinner.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/jquery.lazyloadxt.min.js"></script>
    <script src="../js/jquery.lazyloadxt.extra.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74397261-2', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
	<?php if (isset($_SESSION["USER"])){ ?>
	<?php require_once("nav.php"); ?>
	<div class="backend container">
		<h1>平面作品一覧</h1>
		<table class="table">
			<tr>
				<td>id</td>
				<td>name</td>
				<td>thumb</td>
				<td>中文</td>
				<td>日本語</td>
			</tr>
			<?php while ($row = mysql_fetch_assoc($result)) { ?>
			<tr>
				<td class="col-md-1"><?php echo $row["id"]; ?></td>
				<td class="col-md-1"><?php echo $row["name"]; ?></td>
				<td class="col-md-3"><img data-src="../images/graphic/<?php echo $row["small_img"]; ?>" class="graphic_thumb"></td>
				<td class="col-md-3"><?php echo $row["tw"]; ?></td>
				<td class="col-md-3"><?php echo $row["jp"]; ?></td>
				<td><?php if($_SESSION["LEVEL"]==0){ ?>
						<a href="graphic_modify.php?id=<?php echo $row["id"]; ?>">修正</a><br>
					<?php } ?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<?php require_once("footer.php"); ?>
	<?php
		}else{
			header("Location:login.php");
		}
	?>
</body>
</html>