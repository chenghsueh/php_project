<?php
		$link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
											or die("無法開啟MySQL資料庫連結!<br>");
		mysqli_query($link, 'SET CHARACTER SET utf8');
		mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

		// 送出查詢的SQL指令

		if ( $result = mysqli_query($link, "INSERT INTO message (commodity,name,content,con_time) VALUES ('".$_GET['commodity']."','".$_GET['Name']."','".$_GET['Message']."',NOW())") )
		{
			header("Location: single.php?commodity=".$_GET['commodity']);
		}


?>
