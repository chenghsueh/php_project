<?php
    $user = trim($_POST['Name']);
    $pwd = trim($_POST['password']);
    $tel = $_POST['telephone'];
    $email = $_POST['Email'];

    $link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

    $sql = "INSERT INTO user (username, password, telephone, email) VALUES ('$user', '$pwd', '$tel', '$email')";

    if($user)
    {
        mysqli_query($link, $sql);
        mysqli_close($link);

        header('Location: index.php');
    }
    else {
      echo 'error';
    }
?>
