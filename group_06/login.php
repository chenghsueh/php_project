<?php
  session_start();
  $user = @$_POST['Name'];
  $pwd = @$_POST['pwd'];
  $link = mysqli_connect('localhost','root','root123456','group_06');
  mysqli_query($link, 'SET CHARACTER SET utf8');
  mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

  if ( !$link ) {
    echo "連結錯誤代碼: ".mysqli_connect_errno()."<br>";//顯示錯誤代碼
    echo "連結錯誤訊息: ".mysqli_connect_error()."<br>";//顯示錯誤訊息
    exit();
  }
  $sql = "SELECT * FROM user WHERE username = '$user' ";
  $sql2 = "SELECT * FROM shop_list WHERE username = '$user' ";
  $result = mysqli_query($link, $sql);
  $row = @mysqli_fetch_assoc($result);
  if ($user != null && $pwd != null && $row['username'] == $user && $row['password'] == $pwd)
  {
    $_SESSION['username'] = $user;
    $_SESSION['telephone'] = $row['telephone'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['auth'] = $row['auth'];
    $shop = mysqli_query($link, $sql2);
    while($shop_row = mysqli_fetch_assoc($shop)){
      $_SESSION['cart_no'][] = $shop_row['gd_no'];
      $_SESSION['cart_amount'][] = $shop_row['gd_amount'];
      $_SESSION['cart_color'][] = $shop_row['gd_color'];
      $_SESSION['cart_size'][] = $shop_row['gd_size'];
    }
    echo 'success';
    mysqli_free_result($result); // 釋放佔用的記憶體
    mysqli_free_result($shop);
  }
  else
  {
    echo "登入失敗，帳號或密碼錯誤";
  }
  mysqli_close($link); // 關閉資料庫連結
?>
