<?php
	header("Content-type:text/html;charset=utf-8");
	mysql_connect("localhost","admin","1234")or die("ERROR");
	mysql_select_db("gather_beauty10") or die ("MYSQL資料庫選錯了");
	mysql_query("SET NAMES utf8");
?>