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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<style type="text/css">
.error {
	color: #F00;
	font-family: "微軟正黑體";
	padding: 1px;
}
</style>
<body>
<div  id="home"> </div>
<?php
session_start();
if(isset($_SESSION['username']))
	include 'header2.php';
else
	include 'header.php';
?>
<!-- Modal1 -->
<?php
$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
	if ( $result = mysqli_query($link, "SELECT * FROM commodity") ) {
    while( $row = mysqli_fetch_assoc($result) ){
        $a=$row["no"];
    }
    mysqli_free_result($result); // 釋放佔用的記憶體
}
mysqli_close($link); // 關閉資料庫連結
?>
<!-- //Modal1 -->
<?php
 include "Modal1.php"
?>
<!-- Modal2 -->

<?php
 include "Modal2.php"
?>



<!-- //Modal2 -->

<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>&nbsp;<span>&nbsp;</span>&nbsp;</h3>
						<p>&nbsp;</p>
						<a class="hvr-outline-out button2" href="commodity.php?number=11&sort=0">去購物</a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3> &nbsp;<span>&nbsp;</span>&nbsp;</h3>
						<p>&nbsp;</p>
						<a class="hvr-outline-out button2" href="commodity.php?number=11&sort=0">去購物 </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>&nbsp; <span>&nbsp;</span>&nbsp;</h3>
						<p>&nbsp;</p>
						<a class="hvr-outline-out button2" href="commodity.php?number=11&sort=0">去購物</a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>&nbsp; <span>&nbsp;</span></h3>
						<p>&nbsp;</p>
						<a class="hvr-outline-out button2" href="commodity.php?number=11&sort=0">去購物 </a>
					</div>
				</div>
			</div>
			<div class="item item5">
				<div class="container">
					<div class="carousel-caption">
						<h3>&nbsp; <span>&nbsp;</span></h3>
						<p>&nbsp;</p>
						<a class="hvr-outline-out button2" href="commodity.php?number=11&sort=0">去購物</a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div>
	<!-- //banner -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid" onclick="location.href='index.php#new'">
						<figure class="effect-roxy">
							<img src="images/bottom1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>新</span>品上市</h3>
							</figcaption>
						</figure>
					</div>
					 <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid" onclick="location.href='index.php#hot'">
						<figure class="effect-roxy">
							<img src="images/bottom2.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>熱</span>銷商品</h3>
							</figcaption>
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div>
		 </div>
    </div>
	<!-- schedule-bottom -->
	<!--<div class="schedule-bottom">
		<div class="col-md-6 agileinfo_schedule_bottom_left">
			<img src="images/mid.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agileits_schedule_bottom_right">
			<div class="w3ls_schedule_bottom_right_grid">
				<h3>Save up to <span>50%</span> in this week</h3>
				<p>Suspendisse varius turpis efficitur erat laoreet dapibus.
					Mauris sollicitudin scelerisque commodo.Nunc dapibus mauris sed metus finibus posuere.</p>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<h4>Customers</h4>
					<h5 class="counter">653</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
					<h4>Events</h4>
					<h5 class="counter">823</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>Awards</h4>
					<h5 class="counter">45</h5>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>-->
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
	<!--<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">What's <span>Trending</span></h3>

		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="womens.php">
			   <div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
							<img src="images/bb1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>
						</figure>
			    </div>
			</a>
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
		      <a href="mens.php">
		       <div class="bb-middle-agileits-w3layouts grid">
			           <figure class="effect-roxy">
							<img src="images/bottom3.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>
						</figure>
		        </div>
				</a>
				<a href="mens.php">
		      <div class="bb-middle-agileits-w3layouts forth grid">
						<figure class="effect-roxy">
							<img src="images/bottom4.jpg" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 65%</p>
							</figcaption>
						</figure>
					</div>
					</a>
		<div class="clearfix"></div>
	</div>
	</div>
    </div>-->
<!--/grids-->
      <!--<div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="womens.php"><img src="images/bot_1.jpg" alt=" "><h4> <span>限時</span> 特價</h4></a>

			</div>
			 <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="womens.php"><img src="images/bot_2.jpg" alt=" "><h4>限定商品 <span>免</span> 運費</h4></a>
			</div>
			<div class="clearfix"></div>
		</div>-->
<!--/grids-->
<!-- /new_arrivals -->
	<div class="new_arrivals_agile_w3ls_info">
		<div class="container" id="new_item">
			<a name="new"></a>
		    <h3 class="wthree_text_info">新品<span>上市</span></h3>
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> 流行衣物</li>
							<li> 彩妝</li>
							<li> 配件</li>
							<li> 飾品</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
							<?php

								$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
								mysqli_query($link, 'SET CHARACTER SET utf8');
								mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
								if ( $result = mysqli_query($link, "SELECT * FROM commodity where category in ('1' , '2' , '3', '4', '5', '6') order by up_time desc") ) {
    								 for($i=0;$i<8;$i++)
    								 {
    										 $row = mysqli_fetch_assoc($result)  ;
        									$a=$row["no"];
	    									$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    									$row2 = mysqli_fetch_assoc($graph);
									echo	"<div class=\"col-md-3 product-men\">";
									echo	"<div class=\"men-pro-item simpleCart_shelfItem\">";
									echo	"<div class=\"men-thumb-item\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\pro-image-front\" height=\"250\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
									echo		"<div class=\"men-cart-pro\">";
									echo			"<div class=\"inner-men-cart-pro\">";
													 echo " <a href='single.php?commodity=$a' class=\"link-product-add-cart\">點進看此商品</a>";
									echo			"</div>";
									echo		"</div>";
									echo		"<span class=\"product-new-top\">New</span>";

									echo "</div>";
									echo "<div class=\"item-info-product \">";
									echo	"<h4><a href=\"single.php\">$row[name]</a></h4>";
									echo	"<div class=\"info-product-price\">";
									echo		"<span class=\"item_price\">$$row[price]</span>";
									echo	"</div>";
									echo	"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">";
									echo					"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
									echo								"<fieldset>";
									echo									"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
									echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
									echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
									echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
									echo									"<input  type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\" /><input class='submit' type='submit'/>";
									echo								"</fieldset>";
									echo							"</form>";
									echo					"</div>";

									echo "</div>";
								echo "</div>";
							echo "</div>";
									}

    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結




                            ?>
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
						<div class="tab2">
							 <?php

								$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
								mysqli_query($link, 'SET CHARACTER SET utf8');
								mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
								if ( $result = mysqli_query($link, "SELECT * FROM commodity where category in ('7' , '8' , '9', '10', '11') order by up_time desc") ) {
    								 for($i=0;$i<8;$i++)
    								 {
    										 $row = mysqli_fetch_assoc($result)  ;
        									$a=$row["no"];
	    									$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    									$row2 = mysqli_fetch_assoc($graph);
									echo	"<div class=\"col-md-3 product-men\" >";
									echo	"<div class=\"men-pro-item simpleCart_shelfItem\" >";
									echo	"<div class=\"men-thumb-item\" >";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\pro-image-front\" height=\"250\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
									echo		"<div class=\"men-cart-pro\">";
									echo			"<div class=\"inner-men-cart-pro\">";
													 echo " <a href='single.php?commodity=$a' class=\"link-product-add-cart\">點進看此商品</a>";
									echo			"</div>";
									echo		"</div>";
									echo		"<span class=\"product-new-top\">New</span>";

									echo "</div>";
									echo "<div class=\"item-info-product \">";
									echo	"<h4><a href=\"single.php\">$row[name]</a></h4>";
									echo	"<div class=\"info-product-price\">";
									echo		"<span class=\"item_price\">$$row[price]</span>";
									echo	"</div>";
									echo	"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">";
									echo						"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
									echo								"<fieldset>";
									echo									"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
									echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
									echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
									echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
									echo									"<input  type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\" /><input class='submit' type='submit'/>";
									echo								"</fieldset>";
									echo							"</form>";
									echo					"</div>";

									echo "</div>";
								echo "</div>";
							echo "</div>";
									}

    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結




                            ?>

							<div class="clearfix"></div>
						</div>
					 <!--//tab_two-->
						<div class="tab3">

						<?php

								$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
								mysqli_query($link, 'SET CHARACTER SET utf8');
								mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
								if ( $result = mysqli_query($link, "SELECT * FROM commodity where category in ('12' , '13' , '14', '15', '16', '17', '18', '19', '20') order by up_time desc") ) {
    								 for($i=0;$i<8;$i++)
    								 {
    										 $row = mysqli_fetch_assoc($result)  ;
        									$a=$row["no"];
	    									$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    									$row2 = mysqli_fetch_assoc($graph);
									echo	"<div class=\"col-md-3 product-men\">";
									echo	"<div class=\"men-pro-item simpleCart_shelfItem\">";
									echo	"<div class=\"men-thumb-item\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\pro-image-front\" height=\"250\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
									echo		"<div class=\"men-cart-pro\">";
									echo			"<div class=\"inner-men-cart-pro\">";
													 echo " <a href='single.php?commodity=$a' class=\"link-product-add-cart\">點進看此商品</a>";
									echo			"</div>";
									echo		"</div>";
									echo		"<span class=\"product-new-top\">New</span>";

									echo "</div>";
									echo "<div class=\"item-info-product \">";
									echo	"<h4><a href=\"single.php\">$row[name]</a></h4>";
									echo	"<div class=\"info-product-price\">";
									echo		"<span class=\"item_price\">$$row[price]</span>";
									echo	"</div>";
									echo	"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">";
									echo						"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
									echo								"<fieldset>";
									echo									"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
									echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
									echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
									echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
									echo									"<input  type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\" /><input class='submit' type='submit'/>";
									echo								"</fieldset>";
									echo							"</form>";
									echo					"</div>";

									echo "</div>";
								echo "</div>";
							echo "</div>";
									}

    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結




                            ?>

							<div class="clearfix"></div>
						</div>
						<div class="tab4">
							<?php

								$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
								mysqli_query($link, 'SET CHARACTER SET utf8');
								mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
								if ( $result = mysqli_query($link, "SELECT * FROM commodity where category in ('21' , '22' , '23', '24', '25') order by up_time desc") ) {
    								 for($i=0;$i<8;$i++)
    								 {
    										 $row = mysqli_fetch_assoc($result)  ;
        									$a=$row["no"];
	    									$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    									$row2 = mysqli_fetch_assoc($graph);
									echo	"<div class=\"col-md-3 product-men\">";
									echo	"<div class=\"men-pro-item simpleCart_shelfItem\">";
									echo	"<div class=\"men-thumb-item\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\pro-image-front\" height=\"250\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
									echo		"<div class=\"men-cart-pro\">";
									echo			"<div class=\"inner-men-cart-pro\">";
													 echo " <a href='single.php?commodity=$a' class=\"link-product-add-cart\">點進看此商品</a>";
									echo			"</div>";
									echo		"</div>";
									echo		"<span class=\"product-new-top\">New</span>";

									echo "</div>";
									echo "<div class=\"item-info-product \">";
									echo	"<h4><a href=\"single.php\">$row[name]</a></h4>";
									echo	"<div class=\"info-product-price\">";
									echo		"<span class=\"item_price\">$$row[price]</span>";
									echo	"</div>";
									echo	"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">";
									echo						"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
									echo								"<fieldset>";
									echo									"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
									echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
									echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
									echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
									echo									"<input  type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\" /><input class='submit' type='submit'/>";
									echo								"</fieldset>";
									echo							"</form>";
									echo					"</div>";

									echo "</div>";
								echo "</div>";
							echo "</div>";
									}

    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結




                            ?>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- //new_arrivals -->
	<div class="new_arrivals_agile_w3ls_info">
		<div class="container" id="new_item">
			<a name="hot"></a>
		    <h3 class="wthree_text_info">熱門<span>銷售</span></h3>
				<div id="horizontalTab1">
						<ul class="resp-tabs-list">
							<li> 流行衣物</li>
							<li> 彩妝</li>
							<li> 配件</li>
							<li> 飾品</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
							<?php

								$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
								mysqli_query($link, 'SET CHARACTER SET utf8');
								mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
								if ( $result = mysqli_query($link, "SELECT * FROM commodity where category in ('1' , '2' , '3', '4', '5', '6') order by amount desc") ) {
    								 for($i=0;$i<8;$i++)
    								 {
    										 $row = mysqli_fetch_assoc($result)  ;
        									$a=$row["no"];
	    									$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    									$row2 = mysqli_fetch_assoc($graph);
									echo	"<div class=\"col-md-3 product-men\">";
									echo	"<div class=\"men-pro-item simpleCart_shelfItem\">";
									echo	"<div class=\"men-thumb-item\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\pro-image-front\" height=\"250\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
									echo		"<div class=\"men-cart-pro\">";
									echo			"<div class=\"inner-men-cart-pro\">";
													 echo " <a href='single.php?commodity=$a' class=\"link-product-add-cart\">點進看此商品</a>";
									echo			"</div>";
									echo		"</div>";
									echo		"<span class=\"product-new-top\">Hot</span>";

									echo "</div>";
									echo "<div class=\"item-info-product \">";
									echo	"<h4><a href=\"single.php\">$row[name]</a></h4>";
									echo	"<div class=\"info-product-price\">";
									echo		"<span class=\"item_price\">$$row[price]</span>";
									echo	"</div>";
									echo	"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">";
									echo						"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
									echo								"<fieldset>";
									echo									"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
									echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
									echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
									echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
									echo									"<input  type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\" /><input class='submit' type='submit'/>";
									echo								"</fieldset>";
									echo							"</form>";
									echo					"</div>";

									echo "</div>";
								echo "</div>";
							echo "</div>";
									}

    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結




                            ?>
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
						<div class="tab2">
							 <?php

								$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
								mysqli_query($link, 'SET CHARACTER SET utf8');
								mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
								if ( $result = mysqli_query($link, "SELECT * FROM commodity where category in ('7' , '8' , '9', '10', '11') order by amount desc") ) {
    								 for($i=0;$i<8;$i++)
    								 {
    										 $row = mysqli_fetch_assoc($result)  ;
        									$a=$row["no"];
	    									$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    									$row2 = mysqli_fetch_assoc($graph);
									echo	"<div class=\"col-md-3 product-men\" >";
									echo	"<div class=\"men-pro-item simpleCart_shelfItem\" >";
									echo	"<div class=\"men-thumb-item\" >";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\pro-image-front\" height=\"250\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
									echo		"<div class=\"men-cart-pro\">";
									echo			"<div class=\"inner-men-cart-pro\">";
													 echo " <a href='single.php?commodity=$a' class=\"link-product-add-cart\">點進看此商品</a>";
									echo			"</div>";
									echo		"</div>";
									echo		"<span class=\"product-new-top\">Hot</span>";

									echo "</div>";
									echo "<div class=\"item-info-product \">";
									echo	"<h4><a href=\"single.php\">$row[name]</a></h4>";
									echo	"<div class=\"info-product-price\">";
									echo		"<span class=\"item_price\">$$row[price]</span>";
									echo	"</div>";
									echo	"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">";
									echo						"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
									echo								"<fieldset>";
									echo									"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
									echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
									echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
									echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
									echo									"<input  type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\" /><input class='submit' type='submit'/>";
									echo								"</fieldset>";
									echo							"</form>";
									echo					"</div>";

									echo "</div>";
								echo "</div>";
							echo "</div>";
									}

    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結




                            ?>

							<div class="clearfix"></div>
						</div>
					 <!--//tab_two-->
						<div class="tab3">

						<?php

								$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
								mysqli_query($link, 'SET CHARACTER SET utf8');
								mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
								if ( $result = mysqli_query($link, "SELECT * FROM commodity where category in ('12' , '13' , '14', '15', '16', '17', '18', '19', '20') order by amount desc") ) {
    								 for($i=0;$i<8;$i++)
    								 {
    										 $row = mysqli_fetch_assoc($result)  ;
        									$a=$row["no"];
	    									$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    									$row2 = mysqli_fetch_assoc($graph);
									echo	"<div class=\"col-md-3 product-men\">";
									echo	"<div class=\"men-pro-item simpleCart_shelfItem\">";
									echo	"<div class=\"men-thumb-item\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\pro-image-front\" height=\"250\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
									echo		"<div class=\"men-cart-pro\">";
									echo			"<div class=\"inner-men-cart-pro\">";
													 echo " <a href='single.php?commodity=$a' class=\"link-product-add-cart\">點進看此商品</a>";
									echo			"</div>";
									echo		"</div>";
									echo		"<span class=\"product-new-top\">Hot</span>";

									echo "</div>";
									echo "<div class=\"item-info-product \">";
									echo	"<h4><a href=\"single.php\">$row[name]</a></h4>";
									echo	"<div class=\"info-product-price\">";
									echo		"<span class=\"item_price\">$$row[price]</span>";
									echo	"</div>";
									echo	"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">";
									echo						"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
									echo								"<fieldset>";
									echo									"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
									echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
									echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
									echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
									echo									"<input  type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\" /><input class='submit' type='submit'/>";
									echo								"</fieldset>";
									echo							"</form>";
									echo					"</div>";

									echo "</div>";
								echo "</div>";
							echo "</div>";
									}

    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結




                            ?>

							<div class="clearfix"></div>
						</div>
						<div class="tab4">
							<?php

								$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
								mysqli_query($link, 'SET CHARACTER SET utf8');
								mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
								if ( $result = mysqli_query($link, "SELECT * FROM commodity where category in ('21' , '22' , '23', '24', '25') order by amount desc") ) {
    								 for($i=0;$i<8;$i++)
    								 {
    										 $row = mysqli_fetch_assoc($result)  ;
        									$a=$row["no"];
	    									$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    									$row2 = mysqli_fetch_assoc($graph);
									echo	"<div class=\"col-md-3 product-men\">";
									echo	"<div class=\"men-pro-item simpleCart_shelfItem\">";
									echo	"<div class=\"men-thumb-item\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\pro-image-front\" height=\"250\">";
									echo	"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
									echo		"<div class=\"men-cart-pro\">";
									echo			"<div class=\"inner-men-cart-pro\">";
													 echo " <a href='single.php?commodity=$a' class=\"link-product-add-cart\">點進看此商品</a>";
									echo			"</div>";
									echo		"</div>";
									echo		"<span class=\"product-new-top\">Hot</span>";

									echo "</div>";
									echo "<div class=\"item-info-product \">";
									echo	"<h4><a href=\"single.php\">$row[name]</a></h4>";
									echo	"<div class=\"info-product-price\">";
									echo		"<span class=\"item_price\">$$row[price]</span>";
									echo	"</div>";
									echo	"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">";
									echo						"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
									echo								"<fieldset>";
									echo									"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
									echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
									echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
									echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
									echo									"<input  type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\" /><input class='submit' type='submit'/>";
									echo								"</fieldset>";
									echo							"</form>";
									echo					"</div>";

									echo "</div>";
								echo "</div>";
							echo "</div>";
									}

    						mysqli_free_result($result); // 釋放佔用的記憶體
							}
							mysqli_close($link); // 關閉資料庫連結




                            ?>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- //new_arrivals -->
	<!-- /we-offer -->
	<!--	<div class="sale-w3ls">
			<div class="container">
				<h6>We Offer Flat <span>40%</span> Discount</h6>

				<a class="hvr-outline-out button2" href="single.php">Shop Now </a>
			</div>
		</div>-->
	<!-- //we-offer -->

<?php include 'footer.php';?>
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
	$('#horizontalTab1').easyResponsiveTabs({
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
	});
</script>
<!-- //script for responsive tabs -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
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
			$(".submit").hide();
			$(".btn_submit").click(function(event) {
				/* Act on the event */
				var form1 = $(this).parent().find('input').eq(5);
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
