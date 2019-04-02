<?php
		$link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
											or die("無法開啟MySQL資料庫連結!<br>");
		mysqli_query($link, 'SET CHARACTER SET utf8');
		mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

		// 送出查詢的SQL指令
        $sql="UPDATE message SET reply='".$_GET['Message']."' ,re_time=NOW() WHERE no='".$_GET['no']."'";

		if ( $result = mysqli_query($link, $sql) )
		{
			header("Location: single.php?commodity=".$_GET['commodity']);
		}
?>
