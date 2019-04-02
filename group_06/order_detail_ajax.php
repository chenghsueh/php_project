<?php

$link = mysqli_connect("localhost", "root", "root123456", "group_06") // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");

mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$arr_sex = array('F' => '女', 'M' => '男');
$arr_oper = array("insert" => "新增", "update" => "修改", "delete" => "刪除");
$oper = $_POST['oper'];
$order = $_POST['no'];

if ($oper == "query") {
      $sql = "select * from order_gd where no='$order' ";
      if ($result = mysqli_query($link, $sql)) {
            while ($row = mysqli_fetch_assoc($result)) {
                  $a['data'][] = array($row["no"],  $row["gd_no"], $row["gd_amount"], $row["gd_color"], $row["gd_size"],"<button type='button' class='btn btn-warning btn-xs' id='btn_update'><i class='glyphicon glyphicon-pencil'></i>修改</button> <button type='button' class='btn btn-danger btn-xs' id='btn_delete'><i class='glyphicon glyphicon-remove'></i>刪除</button>");
            }
            mysqli_free_result($result); // 釋放佔用的記憶體
      }
      mysqli_close($link); // 關閉資料庫連結

      echo json_encode($a);
      exit;
}

if ($oper == "insert") {
      $sql = "insert into order_gd (no, gd_no, gd_amount, gd_color, gd_size) values ('".$_POST['order_no']."','".$_POST['order_gd']."','".$_POST['order_amount']."','".$_POST['order_color']."','".$_POST['order_size']."')";
}

if ($oper == "update") {
      $sql = "update order_gd set no='" . $_POST['order_no'] . "',gd_no='" . $_POST['order_gd'] . "',gd_amount='" . $_POST['order_amount'] . "',gd_color='". $_POST['order_color'] . "',gd_size='". $_POST['order_size']."' where  no ='" . $_POST['order_no'] . "' and gd_no ='".$_POST['order_gd']."'";
}

if ($oper == "delete") {
      $sql = "delete from order_gd where  no ='" . $_POST['order_no'] . "' and gd_no ='".$_POST['order_gd']."'";
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
