<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>申請帳號密碼_拾美地產</title>
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
    			$(".myForm").addClass("top80");
    		}else{
    			$(".myForm").addClass("top60");
    		};
    		$(window).resize(function(){
    			var w = $(window).width();
	    		if(w>700){
	    			$(".myForm").removeClass("top60");
	    			$(".myForm").addClass("top80");
	    		}else{
	    			$(".myForm").removeClass("top80");
	    			$(".myForm").addClass("top60");
	    		};
	    	});
    	});
	</script>
	<script>
		department=new Array();
		department[0]=['仁愛區','信義區','中正區','中山區','安樂區','暖暖區','七堵區'];	// 基隆市
		department[1]=['中正區','大同區','中山區','松山區','大安區','萬華區','信義區','士林區','北投區','內湖區','南港區','文山區'];	// 台北市
		department[2]=['萬里區','金山區','板橋區','汐止區','深坑區','石碇區','瑞芳鎮','平溪區','雙溪區','貢寮區','新店區','坪林區','烏來區','永和區','中和區','土城區','三峽鎮','樹林區','鶯歌鎮','三重區','新莊區','泰山區','林口區','蘆洲區','五股區','新莊市','八里區','淡水鎮','三芝區','石門區'];			// 新北市
		department[3]=['中壢區','平鎮區','龍潭區','楊梅區','新屋區','觀音區','桃園區','龜山區','八德區','大溪區','復興區','大園區','蘆竹區']; // 桃園市
		department[4]=['北區','東區','香山區']; // 新竹市
		department[5]=['寶山鄉','竹北市','湖口鄉','新豐鄉','新埔鎮','關西鎮','芎林鄉','寶山鄉','竹東鎮','五峰鄉','橫山鄉','尖石鄉','北埔鄉','峨眉鄉']; //新竹縣
		department[6]=['竹南鎮','頭份鎮','三灣鄉','南庄鄉','獅潭鄉','後龍鎮','通霄鎮','苑裡鎮','苗栗市','造橋鄉','頭屋鄉','公館鄉','大湖鄉','泰安鄉','銅鑼鄉','三義鄉','西湖鄉','卓蘭鎮']; // 苗栗縣
		department[7]=['中區','東區','南區','西區','北區','北屯區','西屯區','南屯區','太平區','大里區','霧峰區','烏日區','豐原區','后里區','石岡區','東勢區','和平區','新社區','潭子區','大雅區','神岡區','大肚區','沙鹿區','龍井區','梧棲區','清水區','大甲區','外埔區','大安區']; //台中市
		department[8]=['彰化市','芬園鄉','花壇鄉','秀水鄉','鹿港鎮','福興鄉','線西鄉','和美鎮','伸港鄉','員林鎮','社頭鄉','永靖鄉','埔心鄉','溪湖鎮','大村鄉','埔鹽鄉','田中鎮','北斗鎮','田尾鄉','埤頭鄉','溪州鄉','竹塘鄉','二林鎮','大城鄉','芳苑鄉','二水鄉']; // 彰化縣
		department[9]=['南投市','中寮鄉','草屯鎮','國姓鄉','埔里鎮','仁愛鄉','名間鄉','集集鎮','水里鄉','魚池鄉','信義鄉','竹山鎮','鹿谷鄉']; // 南投縣
		department[10]=['斗南鎮','大埤鄉','虎尾鎮','土庫鎮','褒忠鄉','東勢鄉','台西鄉','崙背鄉','麥寮鄉','斗六市','林內鄉','古坑鄉','莿桐鄉','西螺鎮','二崙鄉','北港鎮','水林鄉','口湖鄉','四湖鄉','元長鄉']; // 雲林縣
		department[11]=['西區','東區']; // 嘉義市
		department[12]=['番路鄉','梅山鄉','竹崎鄉','阿里山鄉','中埔鄉','大埔鄉','水上鄉','鹿草鄉','太保市','朴子市','東石鄉','六腳鄉','新港鄉','民雄鄉','大林鎮','溪口鄉','義竹鄉','布袋鎮']; // 嘉義縣
		department[13]=['中西區','東區','南區','北區','安平區','安南區','永康區','歸仁區','新化鎮','左鎮區','玉井區','楠西區','南化區','仁德區','關廟區','龍崎區','官田區','麻豆區','佳里區','西港區','七股區','將軍區','學甲區','北門區','新營區','後壁區','白河區','東山區','六甲區','下營區','柳營區','鹽水區','善化區','新市區','大內區','山上區','新市區','安定區']; // 台南市
		department[14]=['新興區','前金區','苓雅區','鹽埕區','鼓山區','旗津區','前鎮區','三民區','楠梓區','小港區','左營區','東沙群島','南沙群島','仁武區','大社區','岡山區','路竹區','阿蓮區','田寮區','燕巢區','橋頭區','梓官區','彌陀區','永安區','湖內區','鳳山區','大寮區','林園區','鳥松區','大樹區','旗山區','美濃區','六龜區','內門區','杉林區','甲仙區','桃源區','那瑪夏區','茂林區','茄萣區']; // 高雄市
		department[15]=['屏東市','三地門鄉','霧台鄉','瑪家鄉','九如鄉','里港鄉','高樹鄉','鹽埔鄉','長治鄉','麟洛鄉','竹田鄉','內埔鄉','萬丹鄉','潮州鎮','泰武鄉','來義鄉','萬巒鄉','崁頂鄉','新埤鄉','南州鄉','林邊鄉','東港鎮','琉球鄉','佳冬鄉','新園鄉','枋寮鄉','枋山鄉','春日鄉','獅子鄉','車城鄉','牡丹鄉','恆春鎮','滿州鄉']; // 屏東縣
		department[16]=['宜蘭市','頭城鎮','礁溪鄉','壯圍鄉','員山鄉','羅東鎮','三星鄉','大同鄉','五結鄉','冬山鄉','蘇澳鎮','南澳鄉','釣魚台']; // 宜蘭縣
		department[17]=['花蓮市','新城鄉','秀林鄉','吉安鄉','壽豐鄉','鳳林鎮','光復鄉','豐濱鄉','瑞穗鄉','萬榮鄉','玉里鎮','卓溪鄉','富里鄉']; // 花蓮縣
		department[18]=['台東市','綠島鄉','蘭嶼鄉','延平鄉','卑南鄉','鹿野鄉','關山鎮','海端鄉','池上鄉','東河鄉','成功鎮','長濱鄉','太麻里鄉','金峰鄉','大武鄉','達仁鄉']; // 台東縣
		department[19]=['馬公市','西嶼鄉','望安鄉','七美鄉','白沙鄉','湖西鄉']; // 澎湖縣
		department[20]=['金沙鎮','金湖鎮','金寧鄉','金城鎮','烈嶼鄉','烏坵鄉']; // 金門縣
		department[21]=['南竿鄉','北竿鄉','莒光鄉','東引鄉']; // 連江縣

		function renew(index){
			for(var i=0;i<department[index].length;i++)
				document.myForm.downtown.options[i]=new Option(department[index][i], department[index][i]);	// 設定新選項
			document.myForm.downtown.length=department[index].length;	// 刪除多餘的選項
		}
</script>
</head>
<body>
	<?php include_once("nav.php"); ?>
	<form action="add_ok.php" method="post" class="myForm">
		<h1>請填寫會員資料</h1>
		<div>
			<label>Email:</label>
			<input type="email" placeholder="請輸入email" name="email" required>
		</div>
		<div>
			<label>密碼:</label>
			<input type="password" placeholder="請輸入密碼" name="password" required>
		</div>
		<div>
			<label>姓氏:</label>
			<input type="text" placeholder="請輸入姓氏" name="surname" required>
		</div>
		<div>
			<label>名字:</label>
			<input type="text" placeholder="請輸入名字" name="givename" required>
		</div>
		<div>
			<label>性別：</label>
			<input type="radio" name="sex" value="man">男性<br>
			<input type="radio" name="sex" value="woman">女性<br>
			<input type="radio" name="sex" value="other">其他
		</div>
		<div>
			<label>縣市：</label>
			<select name="city" onChange="renew(this.selectedIndex);" size=5>
				<option value="基隆市">基隆市
				<option value="台北市">台北市
				<option value="新北市">新北市
				<option value="桃園市">桃園市
				<option value="新竹市">新竹市
				<option value="新竹縣">新竹縣
				<option value="苗栗縣">苗栗縣
				<option value="台中市">台中市
				<option value="彰化縣">彰化縣
				<option value="南投縣">南投縣
				<option value="雲林縣">雲林縣
				<option value="嘉義市">嘉義市
				<option value="嘉義縣">嘉義縣
				<option value="台南市">台南市
				<option value="高雄市">高雄市
				<option value="屏東縣">屏東縣
				<option value="宜蘭縣">宜蘭縣
				<option value="花蓮縣">花蓮縣
				<option value="台東縣">台東縣
				<option value="彭湖縣">彭湖縣
				<option value="金門縣">金門縣
				<option value="連江縣">連江縣
			</select>
			<label>鄉鎮：</label>
			<select name="downtown" size=5>
				<option value="">請由左方選取系別
			</select>
		</div>
	</form>
</body>
</html>