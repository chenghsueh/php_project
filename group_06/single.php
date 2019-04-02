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
<!-- //tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<style>
	.button {
    background-color:#2fdab8; /* Green */
    border: none;
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {
    background-color: white;
    color: black;
    border: 2px solid #2fdab8;
}
.button2 {
    background-color: white;
    color: black;
    border: 2px solid #2fdab8;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>

	/*function fun1(){
		// body...
		var number = document.getElementById('tbox');
		number.val(parseInt(number.val())+1);
		alert("全域變數：" + number.val() ) ;
	}

	function fun2(){
		// body...
		number++;
		alert("全域變數：" + number ) ;
	}


	function ShowTime()
    {
    	document.write(number);
    }*/
    $(document).ready(function() {
    	$("#plus").click(function(event) {
    		/* Act on the event */
    		$("#tbox").val(parseInt($("#tbox").val())+1);
    	});

    	$("#minus").click(function(event) {
    		/* Act on the event */
    		if(parseInt($("#tbox").val()) != 1)
    			$("#tbox").val(parseInt($("#tbox").val())-1);
    	});
    });
</script>
<body>

<!-- header -->
<?php
session_start();
if(isset($_SESSION['username']))
	include 'header2.php';
else
	include 'header.php';
		include "Modal2.php";
		include "Modal1.php";
?>
<!-- //header -->
<!-- Modal1 -->

<!-- //Modal1 -->
<!-- Modal2 -->

<!-- //Modal2 -->
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>&nbsp <span> &nbsp </span>&nbsp</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">首頁</a><i>|</i></li>
								<li>流行衣物</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<?php
$link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
        or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

// 送出查詢的SQL指令
if ( $result = mysqli_query($link, "SELECT * FROM commodity WHERE no=".$_GET["commodity"]) ) {
    while( $row = mysqli_fetch_assoc($result) ){
        $name=$row["name"];
        $price=$row["price"];
        $information=$row["information"];
				$b=$row["category"];
				$amount=$row["amount"];
    }
    mysqli_free_result($result); // 釋放佔用的記憶體
}
mysqli_close($link); // 關閉資料庫連結
?>
  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">

					<ul class="slides">
						<?php
							$link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
        					or die("無法開啟MySQL資料庫連結!<br>");

							// 送出編碼的MySQL指令
							mysqli_query($link, 'SET CHARACTER SET utf8');
							mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

							// 送出查詢的SQL指令
							if ( $result = mysqli_query($link, "SELECT * FROM commodity inner join image on commodity.no=image.no where commodity.no =".$_GET["commodity"]) ) {
    								while( $row = mysqli_fetch_assoc($result) ){

        						echo "<li data-thumb='images/$row[category]/$row[image]'>";
								echo "<div class=\"thumb-image\"> <img src='images/$row[category]/$row[image]' data-imagezoom=\"true\" class=\"img-responsive\">
										</div>";
								echo "</li>";
    						}
    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結
						?>

					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?php echo $name;?></h3>
					<p><span class="item_price"><?php echo "$".$price;?> <span  style="font-size:16px; color:#2fdab8;">已銷售 <?php echo $amount;?> 件</span></span> </p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<!--<div class="description">
						<h5>Check delivery, payment options and charges at your location</h5>
						 <form action="#" method="post">
						<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
						<input type="submit" value="Check">
						</form>
					</div>-->
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>尺寸 :</h5>
							<form action="addtocart.php" method="post">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect" name="size">
								<?php
							$link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
        					or die("無法開啟MySQL資料庫連結!<br>");

							// 送出編碼的MySQL指令
							mysqli_query($link, 'SET CHARACTER SET utf8');
							mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

							// 送出查詢的SQL指令
							if ( $result = mysqli_query($link, "SELECT * FROM size WHERE no=".$_GET["commodity"]) ) {
								$i = 0;
    						while( $row = mysqli_fetch_assoc($result) ){
								echo "<option value=\"$row[size]\">$row[size]</option>";
								$i ++;
    						}
    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結
							?>


							</select>
						</div>
					</div>
					<br>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5>數量 :</h5>
							<button type="button" class="button" id="minus">-</button>
							<input type="text" name="amount" id="tbox" value="1" maxlength="2"></input>
							<button type="button" class="button" id="plus">+</button>

						</div>
					</div>
					<div class="occasional">
						<h5>Types :</h5>
						<?php
							$link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
        					or die("無法開啟MySQL資料庫連結!<br>");

							// 送出編碼的MySQL指令
							mysqli_query($link, 'SET CHARACTER SET utf8');
							mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

							// 送出查詢的SQL指令
							if ( $result = mysqli_query($link, "SELECT * FROM color WHERE no=".$_GET["commodity"]) ) {
								$j = 0;
    						while( $row = mysqli_fetch_assoc($result) ){
        						echo "<div class=\"colr\">";
								echo "<label class=\"radio\"><input type=\"radio\" name=\"color\" value=\"$row[color]\"><i></i>$row[color]</label>";
								echo "</div>";
								$j ++;
    						}
    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結
?>

						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
																<fieldset>
																	<input type="hidden" name="no" value="<?php echo $_GET['commodity'];?>" />
																	<input type="button" name="submit" value="放進購物車" class="button btn_submit">
																	<input class='submit' type='submit'/>
																</fieldset>
															</form>
														</div>

					</div>
					<!--<ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter">
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>-->

		      </div>
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals -->
	<div class="responsive_tabs_agileits">
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>商品描述</li>
							<li>商品留言</li>

						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">

							<div class="single_page_agile_its_w3ls">
							  <h6><?php echo $name;?></h6>
							   <p><?php echo $information;?></p>
							   <!--<p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>-->
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">

							<div class="single_page_agile_its_w3ls">
								<div class="bootstrap-tab-text-grids">
									<?php
									$link = mysqli_connect("localhost","root","root123456","group_06")// 建立MySQL的資料庫連結
											or die("無法開啟MySQL資料庫連結!<br>");

									// 送出編碼的MySQL指令
									mysqli_query($link, 'SET CHARACTER SET utf8');
									mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

									// 送出查詢的SQL指令
									if ( $result = mysqli_query($link, "SELECT * FROM message WHERE commodity=".$_GET["commodity"]) ) {
										while( $row = mysqli_fetch_assoc($result) ){
										echo "<div class=\"bootstrap-tab-text-grid\">";
											echo "<div class=\"bootstrap-tab-text-grid-left\">";
									echo	"<h3 class=\"content_name\"> $row[name]</h3>";
									echo "</div>";
									echo "<div class=\"bootstrap-tab-text-grid-right\">";
									echo	"<ul>";
										if(isset($_SESSION['auth']) && $_SESSION['auth'] == 1)
										{
											echo "<input type='hidden' value='".$row['no']."'>";
											echo		"<li class=\"reply reply_btn\" id=\"reply_btn\"><a href=\"#\"><i class=\"fa fa-reply-all\" aria-hidden=\"true\"></i> 回復</a></li>";
											echo		"<li class=\"reply\"><a href=\"delete_message.php?no=".$row['no']."&commodity=".$row['commodity']."\"><i class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></i>刪除</a></li>";
									}
									echo	"</ul>";
									echo	"<p>$row[content]</p>";

									echo	"<span class=\"content_time\">$row[con_time]</span>";
									echo		"<br>";
									if(isset($row['reply']))
									{
									echo	"<div class=\"con_reply2\" style=\"width:945px;height:95px;\">";
									echo	"<div class=\"con_reply\" style=\"width:935px;height:80px;\">";
									echo	"<br>";

									echo		"<span class=\"re_content_name\" style=\"font-size:16px;\">甘佳蓉</span>";
									echo		"<div class=\"re_content\">";
									echo				"<span class=\"re_content\" style=\"font-size:14px;\">$row[reply]</span>";

									echo		"</div>";
									echo	"<span class=\"content_time2\">$row[re_time]</span>";
									echo	"</div>";
									echo	"</div>";
								}
									echo "</div>";
									echo "<div class=\"clearfix\"> </div>";
									echo "</div>";
									echo "<hr>";

										}
										mysqli_free_result($result); // 釋放佔用的記憶體
									}
									mysqli_close($link); // 關閉資料庫連結

									?>
									<?php
									if(isset($_SESSION['username']))
									{

									 echo "<div class=\"add-review\" id=\"message\">";
										echo  "<form action=\"insert_message.php?commodity=\"";
										echo   $_GET['commodity'];
										echo  "method=\"POST\">";
 										echo 	"<h4>留言板</h4>";
 										echo		"<input type=\"text\" name=\"Name\" required=\"\" placeholder=\"請填入您的暱稱\">";
 										echo		"<textarea name=\"Message\" required=\"\" placeholder=\"留言內容\"></textarea>";
 										echo   "<input type=\"hidden\" name=\"commodity\" value=".$_GET['commodity'].">";
 										echo	"<input type=\"submit\" value=\"送出\">";
 										echo "</form>";
									echo "</div>";
									echo "<div class=\"add-review\" id=\"reply\">";
										echo  "<form action=\"reply.php?commodity=\"";
										echo   $_GET['commodity'];
										echo  "method=\"POST\">";
 										echo 	"<h4>回復</h4>";
 										echo		"<input type=\"hidden\" id=\"no\" name=\"no\" required=\"\" value=''>";
 										echo		"<textarea name=\"Message\" required=\"\" placeholder=\"回復內容\"></textarea>";
 										echo   "<input type=\"hidden\" name=\"commodity\" value=".$_GET['commodity'].">";
 										echo	"<input type=\"submit\" value=\"送出\">";
 										echo "</form>";
									echo "</div>";
										}
									?>
								 </div>

							 </div>
						 </div>
						   <!--<div class="tab3">

							<div class="single_page_agile_its_w3ls">
							  <h6>Big Wing Sneakers (Navy)</h6>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
							   <p class="w3ls_para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
							</div>
						</div>-->
					</div>
				</div>
			</div>
	<!-- //new_arrivals -->
	  	<!--/slider_owl-->

			<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">猜<span>你喜歡</span></h3>
					<?php
					$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
								mysqli_query($link, 'SET CHARACTER SET utf8');
								mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
								$time=0;
								if ( $result = mysqli_query($link, "SELECT * FROM commodity where (category like '$b') ") ) {
    								 while( $row = mysqli_fetch_assoc($result) )
    								 {
    								 	$a=$row["no"];
    								 	if($a!=$_GET["commodity"])
    								 		$time++;
    								 	else
    								 		continue;
    								 	if($time==3)
    								 		break;


	    									$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    									$row2 = mysqli_fetch_assoc($graph);
					  			echo "<div class=\"col-md-3 product-men single\">";
								echo "<div class=\"men-pro-item simpleCart_shelfItem\">";
								echo	"<div class=\"men-thumb-item\">";
								echo		"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-front\" height=\"250\">";
								echo		"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
								echo			"<div class=\"men-cart-pro\">";
								echo				"<div class=\"inner-men-cart-pro\">";
								echo					"<a href=\"single.php\" class=\"link-product-add-cart\">點進看此商品</a>";
								echo				"</div>";
								echo			"</div>";

								echo	"</div>";
								echo	"<div class=\"item-info-product \">";
								echo		"<h4><a href=\"single.php\">$row[name]</a></h4>";
								echo		"<div class=\"info-product-price\">";
								echo			"<span class=\"item_price\">$$row[price]</span>";
								echo		"</div>";
								echo	"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">";
								echo							"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
								echo								"<fieldset>";
								echo									"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
								echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
								echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
								echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
								echo									"<input type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\"> <input class='submit' type='submit'/>";
								echo								"</fieldset>";
								echo							"</form>";
								echo						"</div>";

								echo	"</div>";
								echo    "</div>";
							    echo    "</div>";
							}

    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結

						?>

							<div class="clearfix"> </div>
					<!--//slider_owl-->
		         </div>
	        </div>
 </div>
<!--//single_page-->
<!--/grids-->
<!--<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE SHIPPING</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT COUPONS</h3>
						<p>Lorem ipsum dolor sit amet, consectetur</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>-->
<!--grids-->
<!-- footer -->
<?php
		include "footer.php";
?>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>

										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
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
	<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->
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
	$(document).ready(function(event){
		$("#reply").hide();
		$("#message").show();

		$(".reply_btn").click(function(event) {
			/* Act on the event */
			var no = $(this).parent().find('input');
			$("#no").val(no.val());
			$("#reply").show();
			$("#message").hide();
		});
	});
</script>
<script>
		$(document).ready(function(event){
			$(".submit").hide();
			$(".btn_submit").click(function(event) {
				/* Act on the event */
				var form1 = $(this).parent().find('input').eq(2);
				$.ajax({
						url: "check_login.php",
						type: "POST",
						dataType: 'text',
						async: false,
						success: function(msg){
								if(msg == 'failed'){
										alert("請先登入");
										//locaion.reload();
								}
								else {
									form1.click();
								}
						},
						error: function(xhr, ajaxOptions, thrownError) {
			                  alert(xhr.status);
			                  alert(thrownError);
			      }
				});
			});
		});
</script>
</body>
</html>
