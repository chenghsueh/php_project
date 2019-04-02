<?php
  $user = trim($_POST['Name']);

  $link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
  or die("無法開啟MySQL資料庫連結!<br>");

  mysqli_query($link, 'SET CHARACTER SET utf8');
  mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

  $sql = "SELECT * FROM user where username = '$user' ";

  if ( $result = mysqli_query($link, $sql) )
  {
      if( $row = mysqli_fetch_assoc($result) ) echo json_encode("該用戶名稱已被使用");
      else echo json_encode("true");
      mysqli_free_result($result); // 釋放佔用的記憶體
  }
  mysqli_close($link); // 關閉資料庫連結
 ?>
