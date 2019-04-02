<?php
    $old_pwd = $_POST['old_pwd'];
    $new_pwd = $_POST['new_pwd'];
    $con_pwd = $_POST['con_pwd'];
    session_start();
    $user = $_SESSION['username'];

    $link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

    $sql = "SELECT password FROM user WHERE username= '$user' ";
    $result = mysqli_query($link, $sql);
    $row = @mysqli_fetch_assoc($result);

    if($row['password'] == $old_pwd && $old_pwd!= null)
    {
        if($new_pwd == $con_pwd)
        {
            $sql2 = "UPDATE user SET password = '$new_pwd' WHERE username='$user' ";
            mysqli_query($link, $sql2);
            echo 'success';
        }
        else {
            echo 'error_2';
        }
    }
    else {
      echo 'error_1';
    }
    mysqli_free_result($result);
    mysqli_close($link);
?>
