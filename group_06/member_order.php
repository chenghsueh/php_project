<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>黑皮商城</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<style>
		.member_update{
				padding: 20px;
		}
		.member_update label{
				padding: 10px;
		}
		.but{
				padding-top: 30px;
				text-align: right;
		}
</style>
</head>
<body>
<!-- header !-->
<div  id="home"> </div>
<?php
session_start();
if(isset($_SESSION['username']))
{
	$tel = $_SESSION['telephone'];
	$email = $_SESSION['email'];
	include 'header2.php';
}
else
	include 'header.php';
include 'Modal1.php'
?>
<!-- //header !-->
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3> 我的<span>帳戶  </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">首頁</a><i>|</i></li>
								<li>我的帳戶</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-4 products-left">
			<div class="css-treeview member_group">
				<h4>分類</h4>
				<ul class="tree-list-pad">
					<li><a href="member_pwd.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 更換密碼</a>
					</li>
					<li><a href="member_profile.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 更新個人資料</a>
					</li>
					<li><a href="member_order.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 查詢歷史訂單</a>
					</li>
					<li><a href='cart.php'><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 購物清單</a>
					</li>
				</ul>
			</div>
			<!--<div class="community-poll">
				<h4>Community Poll</h4>
				<div class="swit form">
					<form>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>More convenient for shipping and delivery</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Lower Price</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Track your item</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bigger Choice</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>More colors to choose</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Secured Payment</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Money back guaranteed</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Others</label> </div></div>
					<input type="submit" value="SEND">
					</form>
				</div>
			</div>-->
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<h5 id="member_banner">查詢<span>歷史訂單</span></h5>
			<div class="member_update">
				<?php if(!isset($_GET['no'])){?>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
								<th class="text-center">訂單編號</th>
								<th class="text-center">寄送地址</th>
								<th class="text-center">是否送出</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$arr_sent = array('0' => '未送', '1'=>'已送');
							$link = mysqli_connect("localhost", "root", "root123456", "group_06") // 建立MySQL的資料庫連結
							or die("無法開啟MySQL資料庫連結!<br>");

							mysqli_query($link, 'SET CHARACTER SET utf8');
							mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

							$sql = "select * from order_user where username='".$_SESSION['username']."'";
							$result = mysqli_query($link, $sql);
							//echo $sql;
							while($row = mysqli_fetch_assoc($result)){
										echo "<tr><td><a href=\"member_order.php?no=".$row['no']."\">".$row['no']."</a></td><td>".$row['addr']."</td><td>".$arr_sent[$row['sent']]."</td></tr>";
							}
						?>
					</tbody>
				</table><?php } else {?>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
									<th class="text-center">商品名稱</th>
									<th class="text-center">商品單價</th>
									<th class="text-center">商品數量</th>
									<th class="text-center">商品顏色</th>
									<th class="text-center">商品尺寸</th>
									<th class="text-center">商品總價</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$link = mysqli_connect("localhost", "root", "root123456", "group_06") // 建立MySQL的資料庫連結
								or die("無法開啟MySQL資料庫連結!<br>");

								mysqli_query($link, 'SET CHARACTER SET utf8');
								mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

								$total = 0;
								$sql = "select * from order_gd where no ='".$_GET['no']."'";
								$result = mysqli_query($link, $sql);
								//echo $sql;
								while($row = mysqli_fetch_assoc($result)){
											$sql = "select * from commodity where no ='".$row['gd_no']."'";
											$result1 = mysqli_query($link, $sql);
											$row_gd = mysqli_fetch_assoc($result1);
											echo "<tr><td><a href=\"single.php?commodity=".$row['gd_no']."\">".$row_gd['name']."</a></td><td>".$row_gd['price']."</td><td>".
											$row['gd_amount']."</td><td>".$row['gd_color']."</td><td>".$row['gd_size'].
											"</td><td>".$row_gd['price']*$row['gd_amount']."</td></tr>";
											$total += $row_gd['price']*$row['gd_amount'];
								}
								echo "<tr><td colspan='6' align='right'>總共 $total 元</td></tr>";
							?>
						</tbody>
					</table><?php }?>
			</div>
	</div>
</div>
<!-- //mens -->
<!--/grids-->

</div>
<!--grids-->
<!-- footer -->
<?php
		include "footer.php";
?>
<!-- //footer -->
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/responsiveslides.min.js"></script>
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links -->
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js -->
	<!---->

						<script type="text/javascript" src="js/jquery-ui.js"></script>
					 <!---->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
	$(document).on( 'submit' , '#profile_change' , function(event){
		event.preventDefault()
		$.ajax({
			url: "pwd_change.php",
			data: $('#profile_change').serialize(),
			type: "POST",
			dataType: 'text',
			success: function(msg){
				if(msg == 'success'){
						alert('更改成功')
						location.reload();
				}
				else if(msg == 'error_1'){
						alert("舊密碼輸入錯誤");
				}
				else if(msg == 'error_2'){
						alert("兩次密碼不同");
				}
				else {
					alert(msg);
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
									alert(xhr.status);
									alert(thrownError);
			}
		});
	});
</script>
</body>
</html>
