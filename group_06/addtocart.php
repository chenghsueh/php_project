<?php
    session_start( );
    if(!isset($_SESSION['cart_no'])){
        $_SESSION['cart_no'] = Array();
        $_SESSION['cart_amount'] = Array();
        $_SESSION['cart_color'] = Array();
        $_SESSION['cart_size'] = Array();
    }

    $no = $_POST['no'];
    $amount = $_POST['amount'];
    $color = $_POST['color'];
    $size = $_POST['size'];

    if(!in_array($no, $_SESSION['cart_no'])){
      $_SESSION['cart_no'][] = $no;
      $_SESSION['cart_amount'][] = $amount;
      $_SESSION['cart_color'][] = $color;
      $_SESSION['cart_size'][] = $size;
    }
    else
    {
      echo "重複加入";
    }
    $url = $_SERVER['HTTP_REFERER'];
    header("Location: $url");
 ?>
