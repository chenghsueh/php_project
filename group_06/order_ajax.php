<?php

$link = mysqli_connect("localhost", "root", "root123456", "group_06") // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");

mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$arr_sex = array('F' => '女', 'M' => '男');
$arr_sent = array('0' => '未送', '1'=>'已送');
$arr_oper = array("insert" => "新增", "update" => "修改", "delete" => "刪除");
$oper = $_POST['oper'];

if ($oper == "query") {
      $sql = "select * from order_user";
      if ($result = mysqli_query($link, $sql)) {
            while ($row = mysqli_fetch_assoc($result)) {
                  $a['data'][] = array("<button type='button' class='btn btn-warning btn-xs' onclick=\"location.href='order_detail.php?order=".$row['no']."'\"><i class='glyphicon glyphicon-info-sign'></i>訂單詳情</button>",$row["no"],  $row["username"], $row["addr"], $arr_sent[$row["sent"]],"<button type='button' class='btn btn-warning btn-xs' id='btn_update'><i class='glyphicon glyphicon-pencil'></i>修改</button> <button type='button' class='btn btn-danger btn-xs' id='btn_delete'><i class='glyphicon glyphicon-remove'></i>刪除</button>");
            }
            mysqli_free_result($result); // 釋放佔用的記憶體
      }
      mysqli_close($link); // 關閉資料庫連結

      echo json_encode($a);
      exit;
}

/*if ($oper == "insert") {
      $sql = "insert into order_user (no, username, addr, sent) values ('".$_POST['order_no']."','".$_POST['order_user']."','".$_POST['order_addr']."','".$_POST['order_sent']."')";
}*/

if ($oper == "update") {
      $sql = "update order_user set no='" . $_POST['order_no'] . "',username='" . $_POST['order_user'] . "',addr='" . $_POST['order_addr'] . "',sent='". $_POST['order_sent'] . "' where no ='" . $_POST['order_old_no'] . "'";
}

if ($oper == "delete") {
      $sql = "delete from order_user where  no ='" . $_POST['order_old_no'] . "'";
}

if (strlen($sql) > 10) {
      if ($result = mysqli_query($link, $sql)) {
            $a["code"] = 0;
            $a["message"] = "資料" . $arr_oper[$oper] . "成功!";
      } else {
            $a["code"] = mysqli_errno($link);
            $a["message"] = "資料" . $arr_oper[$oper] . "失敗! <br> 錯誤訊息: " . mysqli_error($link);
      }
      mysqli_close($link); // 關閉資料庫連結

      echo json_encode($a);
      exit;
}
?>
