<?php
$header="From:".$_POST['Email'];

$subject="=?UTF-8?B?".base64_encode('主旨')."?=";//信件標題，解決亂碼問題
mail("ruby166ruby166@yahoo.com.tw",$_POST['Name'],"商品名稱:".$_POST['Subject']."\r\n問題內容:".$_POST['Message'],$header)
or die("郵件傳送失敗！");

header("Location: contact.php");
 
?> 