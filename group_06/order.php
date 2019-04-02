<?php
  session_start();
  $date = date("Ymd");
  $order_no = substr($date,2,6).rand(100,999);
  $link = mysqli_connect('localhost','root','root123456','group_06');

  mysqli_query($link, 'SET CHARACTER SET utf8');
  mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

  $sql = "SELECT * FROM order WHERE no = '$order_no' ";
  while($result = mysqli_query($link, $sql)){
      if(mysqli_num_rows($result) == 0)
        break;
      else {
        $order_no = substr($date,2,6).rand(100,999);
      }
  }

  $sql1= "insert into order_user (no, username, addr, sent) values ('$order_no', '".$_SESSION['username']."','".$_POST['addr']."','0')";
  mysqli_query($link, $sql1);

  for($i = 0; $i < count($_SESSION['cart_no']); $i ++)
  {
      $sql2 = "insert into order_gd (no, gd_no, gd_amount, gd_color, gd_size) values ('$order_no','".$_SESSION['cart_no'][$i]."','".$_SESSION['cart_amount'][$i]."','".$_SESSION['cart_color'][$i]."','".$_SESSION['cart_size'][$i]."')";
      $sql3 = "select * from commodity where no = '".$_SESSION['cart_no'][$i]."'";
      $result = mysqli_query($link, $sql3);
      $row = mysqli_fetch_assoc($result);
      $sell = $row['amount'] + $_SESSION['cart_amount'][$i];
      $sql4 = "update commodity set amount = '$sell' where no = '".$_SESSION['cart_no'][$i]."'";
      mysqli_query($link, $sql4);
      mysqli_query($link, $sql2);
  }

  unset($_SESSION['cart_no']);
  unset($_SESSION['cart_amount']);
  unset($_SESSION['cart_color']);
  unset($_SESSION['cart_size']);
  mysqli_close($link);
  echo "購買成功!!訂單編號為".$order_no;
?>
