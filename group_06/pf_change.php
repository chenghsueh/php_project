
<?php
	session_start();
    $user = $_SESSION['username'];
	$tel = $_POST['new_tel'];
	$mail = $_POST['new_mail'];

	$link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

    $sql = "SELECT password FROM user WHERE username= '$user' ";
    $result = mysqli_query($link, $sql);
    $row = @mysqli_fetch_assoc($result);


    $sql2 = "UPDATE user SET telephone = '$tel', email='$mail' WHERE username='$user' ";
    $_SESSION['telephone'] = $tel;
    $_SESSION['email'] = $mail;
    mysqli_query($link, $sql2);

    echo 'success';

    mysqli_free_result($result);
    mysqli_close($link);
?>
