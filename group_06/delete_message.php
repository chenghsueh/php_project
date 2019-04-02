<?php
		$link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
											or die("無法開啟MySQL資料庫連結!<br>");
		mysqli_query($link, 'SET CHARACTER SET utf8');
		mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

		// 送出查詢的SQL指令

		if ( $result = mysqli_query($link, "DELETE FROM message WHERE no = '".$_GET['no']."'") )
		{
			header("Location: single.php?commodity=".$_GET['commodity']);
		}
?>
