<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>黑皮商城s</title>
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
<link href="css/font-awesome.css" rel="stylesheet" />
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="//code.jquery.com/jquery-3.3.1.js"></script>
<style>
.create_gd{
		padding: 20px;
}
.create_gd label{
		padding: 10px;
}
.but{
		padding-top: 30px;
		text-align: right;
}
#msg{
	text-align: center;
	font-size: 18px;
	color: red;
	padding: 10px;
}
</style>
</head>
<body>
	<div  id="home"> </div>
<!-- header !-->
<?php
session_start();
if($_SESSION['auth'] == 0)
	header("Location: index.php");
if(isset($_SESSION['username']))
{
	$tel = $_SESSION['telephone'];
	$email = $_SESSION['email'];
	include 'header2.php';
}
else
	include 'header.php';
include 'Modal1.php';
include 'Modal2.php';
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
					<li><a href="admin_member.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 管理會員</a>
					</li>
					<li><a href="admin_gd.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 管理商品</a>
					</li>
					<li><a href="creat_gd.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 新增商品</a>
					</li>
					<li><a href="admin_order.php"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 管理訂單</a>
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
				<h5 id="member_banner">新增<span>商品</span></h5>
				<div class="create_gd">
					<div id="msg">
						<?php
							if(isset($_GET['msg']))
							{
								if($_GET['msg'] == 'success')
										echo "新增成功";
								else {
									echo $_GET['msg'];
								}
							}
						?>
				</div>
	        <form name="form1" id="form1" enctype="multipart/form-data" method="POST" action="create_gd_ajax.php">
						<input type="hidden" name="gd_time" id="gd_time" value="<?php echo time();?>"/>
						<div class="form-group">
							<label for:"gd_name">商品名稱 : </label>
							<input type="text" class="form-control" id="gd_name" name="gd_name">
						</div>
						<div class="form-group">
							<label for:"gd_cate">商品種類 : </label>
							<select class="" id="gd_cate" name="gd_cate">
								<?php
											$link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
											or die("無法開啟MySQL資料庫連結!<br>");

											mysqli_query($link, 'SET CHARACTER SET utf8');
											mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
											$sql = "SELECT * FROM s_category";
											$result = mysqli_query($link, $sql);
											while($row = mysqli_fetch_assoc($result)){
													echo "<option value='".$row['no']."'>".$row['name']."</option>";
											}
								?>
							</select>
						</div>
						<div class="form-group">
							<label for:"gd_price">商品單價 : </label>
							<input type="text" class="form-control" id="gd_price" name="gd_price">
						</div>
						<div class="form-group">
							<label for:"gd_size">商品尺寸種類(請用,號隔開) : </label>
							<input type="text" class="form-control" id="gd_size" name="gd_size">
						</div>
						<div class="form-group">
							<label for:"gd_color">商品顏色種類(請用,號隔開) : </label>
							<input type="text" class="form-control" id="gd_color" name="gd_color">
						</div>
						<div class="form-group">
							<label for:"gd_inform">商品資訊 : </label>
							<input type="text" class="form-control" id="gd_inform" name="gd_inform">
						</div>
						<div class="form-group">
							<label for:"gd_photo">商品圖片 : </label>
							<input type="file" class="form-control" id="gd_photo" name="gd_photo">
						</div>
						<div class="form-group but">
							<button type="submit" class="btn btn-primary btn-lg">送出</button>
						</div>
					</form>
		</div>
	</div>
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

	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js"></script>
	<script>
	$(document).ready(function(){
		$("#form1").validate({
			 submitHandler: function(form) {
						 //CRUD();
						 form.submit();
			 },
			 rules: {
						 gd_name: {
									 required: true
						 },
						 gd_cate: {
									 required: true
						 },
						 gd_price: {
									 required: true
						 },
						 gd_inform: {
									 required: true
						 },
						 gd_size: {
									required: true
						},
						gd_color: {
									required: true
						},
						gd_photo: {
									required: true
						},
			 }
		});
		function CRUD() {
			 $.ajax({
						 url: "create_gd_ajax.php",
						 data: $("#form1").serialize(),
						 type: 'POST',
						 dataType: "json",
						 success: function(msg) {
							 		if(msg == 'success'){
											alert("新增成功");
									}
									else {
										alert(msg);
									}
						 },
						 error: function(xhr, ajaxOptions, thrownError) {
									 console.log(xhr.responseText);
									 alert(xhr.responseText);
						 }
			 });
		}
	});
	</script>
</body>
</html>
