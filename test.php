<?php
	header("Content-type:text/html;charset=utf-8");

	if($con = mysqli_connect('localhost','root','')){
		echo "连接成功";
	}else{
		echo "连接失败";
	}

	if(mysqli_select_db($con,'mable')){//当选择成功的时候，返回true2、当选择失败的时候返回false
		echo "选择数据库成功";
	}else{
		echo "选择数据库失败";
	}

	

	mysqli_close($con);
?>
