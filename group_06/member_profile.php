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
	<div  id="home"> </div>
<!-- header !-->
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
			<h5 id="member_banner">更新<span>個人資料</span></h5>
			<div class="member_update">
				<form id="profile_change">
							<div class="form-group">
								<label for:"old_tel">原電話為 : </label>
								<input type="text" class="form-control" id="old_tel" name="old_tel" readonly="true" value="<?php echo $tel;?>">
							</div>
							<div class="form-group">
								<label for:"new_tel">更換電話為 : </label>
								<input type="text" class="form-control" id="new_tel" name="new_tel">
							</div>
							<div class="form-group">
								<label for:"old_mail">原信箱為 : </label>
								<input type="text" class="form-control" id="old_mail" name="old_mail" readonly="true" value="<?php echo $email;?>">
							</div>
							<div class="form-group">
								<label for:"con_pwd">更換信箱為 : </label>
								<input type="text" class="form-control" id="new_mail" name="new_mail">
							</div>
							<div class="form-group but">
								<button type="submit" class="btn btn-primary btn-lg">送出</button>
							</div>
				</form>
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
		event.preventDefault();
		$.ajax({
			url: "pf_change.php",
			data: $('#profile_change').serialize(),
			type: "POST",
			dataType: 'text',
			success: function(msg){

						alert('更改成功');
						location.reload();
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
