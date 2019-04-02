<?php

session_start();

$link = mysqli_connect('localhost','root','root123456','group_06');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

if(!empty($_SESSION['cart_no']))
{
    $sql1 = "DELETE from shop_list where username='".$_SESSION['username']."'";
    echo $sql1;
    mysqli_query($link, $sql1);
    for($i = 0; $i < count($_SESSION['cart_no']); $i ++)
    {
        $sql = "SELECT * FROM shop_list WHERE username='".$_SESSION['username']."' AND gd_no = '".$_SESSION['cart_no'][$i]."'";
        $result = mysqli_query($link, $sql);

        if(mysqli_num_rows($result) == 1)
        {
            $sql2 = "UPDATE shop_list SET gd_amount = '".$_SESSION['cart_amount'][$i]."',gd_color='".$_SESSION['cart_color'][$i]."',gd_size='".$_SESSION['cart_size'][$i].
            "'WHERE username='".$_SESSION['username']."' AND gd_no = '".$_SESSION['cart_no'][$i]."'";
        }
        else {
          $sql2 = "INSERT INTO shop_list (username, gd_no, gd_amount, gd_color, gd_size)
          VALUES ('". $_SESSION['username'] ."', '". $_SESSION['cart_no'][$i]. "' , '".$_SESSION['cart_amount'][$i]."', '".$_SESSION['cart_color'][$i]."', '".$_SESSION['cart_size'][$i]."' )";
        }
        echo $sql;
        mysqli_query($link, $sql2);
    }
    mysqli_close($link);
  }

session_destroy();
$url = $_SERVER['HTTP_REFERER'];
header("Location: $url");
?>
