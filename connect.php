<?php
	require_once('config.php');
	//连库
	if(!($con = mysqli_connect(HOST,USERNAME,PASSWORD))){
		echo mysql_error();
	};
	//选库
	if(!mysqli_select_db($con,'mable')){
		echo mysql_error();
	};
	//字符集
	if(!mysqli_query($con,'set names utf8')){
		echo mysql_error();
	};
?>