<?php
    session_start();
    $no = $_GET['no'];
    unset($_SESSION['cart_no'][$no]);
    unset($_SESSION['cart_amount'][$no]);
    unset($_SESSION['cart_size'][$no]);
    unset($_SESSION['cart_color'][$no]);
    $_SESSION['cart_no']=array_values($_SESSION['cart_no']);
    $_SESSION['cart_amount']=array_values($_SESSION['cart_amount']);
    $_SESSION['cart_size']=array_values($_SESSION['cart_size']);
    $_SESSION['cart_color']=array_values($_SESSION['cart_color']);

    $url = $_SERVER['HTTP_REFERER'];
    header("Location: $url");
?>
