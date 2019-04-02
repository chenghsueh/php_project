<?php
    $file = $_FILES["gd_photo"];
    $time = time();
    $destination = "images/".$_POST['gd_cate'].'/'.$file['name'];
    $uptypes = array('image/jpg','image/jpeg','image/png','image/pjpeg','image/gif');
    $arr_size = array_filter(explode(",",$_POST['gd_size']));
    $arr_color = array_filter(explode(",",$_POST['gd_color']));

    $link = mysqli_connect("localhost", "root", "root123456", "group_06") // 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

    if(!in_array($file['type'], $uptypes))
    {
      $a="資料格式不符";
    }
    else if (file_exists($destination))
    {
        $a= "同名檔已經存在了";
    }
    else if(!move_uploaded_file ($file['tmp_name'], $destination))
    {
      $a= "移動檔出錯";
    }
    else{
    $sql_gd = "insert into commodity (name, category, price, information, up_time) values ('".$_POST['gd_name']."','".$_POST['gd_cate']."','".$_POST['gd_price']."','".$_POST['gd_inform']."','$time')";
    mysqli_query($link, $sql_gd);
    $sql_find_gd = "SELECT * FROM commodity WHERE name = '".$_POST['gd_name']."'";
    $result = mysqli_query($link, $sql_find_gd);
    $row = mysqli_fetch_assoc($result);
    $no = $row['no'];
    for($i = 0; $i < count($arr_size); $i ++)
    {
      $sql = "insert into size (no, size) values ('$no','$arr_size[$i]')";
      mysqli_query($link, $sql);
    }
    for($i = 0; $i < count($arr_size); $i ++)
    {
      $sql = "insert into color (no, color) values ('$no','$arr_color[$i]')";
      mysqli_query($link, $sql);
    }

    $sql = "insert into image (no, image) values ('$no','$file[name]')";
    mysqli_query($link, $sql);
    $a= "success";
  }
    mysqli_free_result($result);
    mysqli_close($link);
    header("Location: creat_gd.php?msg=$a");
?>
