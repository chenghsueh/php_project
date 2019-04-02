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
	#commdity{
		margin: 0 0 0 22px;
	}
</style>
</head>
<body>
	<div  id="home"> </div>
<!-- header !-->
<?php
session_start();
if(isset($_SESSION['username']))
	include 'header2.php';
else
	include 'header.php';

include "Modal1.php";
include "Modal2.php";
		$array_dept_name=array("11","3","7");
?>
<!-- //header !-->

<!-- Modal1 -->
	<!--	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">

				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
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
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

			</div>
		</div>-->
<!-- //Modal1 -->
<!-- Modal2 -->
		<!--<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">

				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
									<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required="">
								<label>Password</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="Confirm Password" required="">
								<label>Confirm Password</label>
								<span></span>
							</div>
							<input type="submit" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
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
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

			</div>
		</div>-->
<!-- //Modal2 -->
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>
				<?php
					if(isset($_GET['s_cate']))
					{
						if($_GET['s_cate']>0 && $_GET['s_cate']<7)
							echo "流行衣物";
						else if($_GET['s_cate']>6 && $_GET['s_cate']<12)
							echo "彩妝";
						else if($_GET['s_cate']>11 && $_GET['s_cate']<21)
							echo "飾品";
						else if($_GET['s_cate']>20 && $_GET['s_cate']<26)
							echo "配件";
					}
					else
					{
						echo "全部商品";
					}

				?>
			</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.php">首頁</a><i>|</i></li>
								<li>
								<?php
									if(isset($_GET['s_cate']))
									{
										if($_GET['s_cate']>0 && $_GET['s_cate']<7)
											echo "流行衣物";
										else if($_GET['s_cate']>6 && $_GET['s_cate']<12)
											echo "彩妝";
										else if($_GET['s_cate']>11 && $_GET['s_cate']<21)
											echo "飾品";
										else if($_GET['s_cate']>20 && $_GET['s_cate']<26)
											echo "配件";
									}
									else
									{
										echo "全部商品";
									}

								?>

								</li>

								<li>
								<?php
									if(isset($_GET['s_cate']))
									{
										echo "<i style=\"color: #ffff;\">|</i>";
										$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
											mysqli_query($link, 'SET CHARACTER SET utf8');
											mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
											if ( $result = mysqli_query($link, "SELECT * FROM s_category WHERE no=".$_GET["s_cate"]) ) {
    													while( $row = mysqli_fetch_assoc($result)){
    															echo $row["name"];

    													}
    												}

									}


								?>

								</li>
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
			<!--<div class="filter-price">
				<h3>價錢<span>範圍</span></h3>
					<ul class="dropdown-menu6">
						<li>
							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
			</div>-->
			<div class="css-treeview">
				<h4>分類</h4>
				<ul class="tree-list-pad">
					<li ><input type="button"  id="commodity" /><a href="commodity.php?number=11&sort=0"<label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>所有商品</label></a>
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>流行衣物</label>
						<ul>
							<li><input type="checkbox" id="item-0-0" /><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>衣服</label>
								<ul>
									<li><a href="commodity.php?s_cate=1&number=11&sort=0">上衣</a></li>
									<li><a href="commodity.php?s_cate=2&number=11&sort=0">褲子</a></li>
									<li><a href="commodity.php?s_cate=3&number=11&sort=0">裙子</a></li>
									<li><a href="commodity.php?s_cate=4&number=11&sort=0">外套</a></li>
								</ul>
							</li>
							<li><input type="checkbox" id="item-0-1" /><label for="item-0-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>鞋子 </label>
								<ul>
									<li><a href="commodity.php?s_cate=5&number=11&sort=0">運動鞋</a></li>
									<li><a href="commodity.php?s_cate=6&number=11&sort=0">休閒鞋</a></li>

								</ul>
							</li>

						</ul>
					</li>
					<li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>彩妝</label>
						<ul>
							<li><input type="checkbox" id="item-1-0" /><label for="item-1-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>底妝</label>
								<ul>
									<li><a href="commodity.php?s_cate=7&number=11&sort=0">粉底</a></li>
									<li><a href="commodity.php?s_cate=8&number=11&sort=0">蜜粉</a></li>

								</ul>
							</li>
							<li><input type="checkbox" id="item-1-1" /><label for="item-1-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>眼妝</label>
								<ul>
									<li><a href="commodity.php?s_cate=9&number=11&sort=0">眼影</a></li>
									<li><a href="commodity.php?s_cate=10&number=11&sort=0">眼線</a></li>
								</ul>
							</li>
							<li><input type="checkbox" id="item-1-2" /><label for="item-1-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>唇彩</label>
								<ul>
									<li><a href="commodity.php?s_cate=11&number=11&sort=0">唇膏</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>飾品</label>
						<ul>
							<li><input type="checkbox"  id="item-2-0" /><label for="item-2-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>項鍊</label>
								<ul>
									<li><a href="commodity.php?s_cate=12&number=11&sort=0">頸鍊</a></li>
									<li><a href="commodity.php?s_cate=13&number=11&sort=0">鎖骨鍊</a></li>
								</ul>
							</li>
							<li><input type="checkbox" id="item-2-1" /><label for="item-2-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>耳環</label>
								<ul>
									<li><a href="commodity.php?s_cate=14&number=11&sort=0">耳針</a></li>
									<li><a href="commodity.php?s_cate=15&number=11&sort=0">耳夾</a></li>
								</ul>
							</li>
							<li><input type="checkbox" id="item-2-2" /><label for="item-2-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>髮飾</label>
								<ul>
									<li><a href="commodity.php?s_cate=16&number=11&sort=0">髮帶</a></li>
									<li><a href="commodity.php?s_cate=17&number=11&sort=0">髮圈</a></li>
								</ul>
							</li>
							<li><input type="checkbox" id="item-2-3" /><label for="item-2-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>手環</label>
								<ul>
									<li><a href="commodity.php?s_cate=18&number=11&sort=0">手錶</a></li>
									<li><a href="commodity.php?s_cate=19&number=11&sort=0">手鍊</a></li>
								</ul>
							</li>
							<li><input type="checkbox" id="item-2-4" /><label for="item-2-4"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>戒指</label>
								<ul>
									<li><a href="commodity.php?s_cate=20&number=11&sort=0">戒指</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><input type="checkbox" checked="checked" id="item-3" /><label for="item-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>配件</label>
						<ul>
							<li><input type="checkbox" id="item-3-0" /><label for="item-3-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>包包</label>
								<ul>
									<li><a href="commodity.php?s_cate=21&number=11&sort=0">皮包</a></li>
									<li><a href="commodity.php?s_cate=22&number=11&sort=0">後背包</a></li>
								</ul>
							</li>
							<li><input type="checkbox" id="item-3-1" /><label for="item-3-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>帽子</label>
								<ul>
									<li><a href="commodity.php?s_cate=23&number=11&sort=0">棒球帽</a></li>
									<li><a href="commodity.php?s_cate=24&number=11&sort=0">鴨舌帽</a></li>
									<li><a href="commodity.php?s_cate=25&number=11&sort=0">毛帽</a></li>
								</ul>
							</li>
							</li>
						</ul>
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
			<h5>總<span>商品數量(
					<?php
					$amount=0;
					$nummber=0;
					$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
					mysqli_query($link, 'SET CHARACTER SET utf8');
					mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
					if(isset($_GET['search']))
					{
						$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' )";
					}
					else if(isset($_GET['s_cate']))
					{
						$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' ";
					}
					else
					{
						$sql = "SELECT * FROM commodity";
					}
					if ( $result = mysqli_query($link, $sql)) {
	    					$total_records=mysqli_num_rows($result);//取得執行結果總筆數

    						echo $total_records;
	    				}


	    				mysqli_free_result($result); // 釋放佔用的記憶體

					mysqli_close($link); // 關閉資料庫連結
			?>





			)</span></h5>
					<div class="sort-grid">
						<div class="sorting">
							<h6>排序:</h6>
							<select id="country1" onchange="javascript:location.href=this.value;" class="frm-field required sect">
								<option value="
								<?php
									if(isset($_GET['s_cate']))
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&s_cate=".$_GET['s_cate']."&sort=0";
									else if(isset($_GET['search']))
										echo $_SERVER['PHP_SELF']."?search=".$_GET['search']."&number=".$_GET['number']."&sort=0";
								else
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&sort=0";
								?>
								" <?php if(@$_GET[sort]==0) echo "selected";?>></option>
								<option value="
								<?php
									if(isset($_GET['s_cate']))
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&s_cate=".$_GET['s_cate']."&sort=1";
								else if(isset($_GET['search']))
										echo $_SERVER['PHP_SELF']."?search=".$_GET['search']."&number=".$_GET['number']."&sort=1";
								else
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&sort=1";
								?>
								" <?php if(@$_GET[sort]==1) echo "selected";?>>購買人氣最高</option>
								<option value="
								<?php
									if(isset($_GET['s_cate']))
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&s_cate=".$_GET['s_cate']."&sort=2";
								else if(isset($_GET['search']))
										echo $_SERVER['PHP_SELF']."?search=".$_GET['search']."&number=".$_GET['number']."&sort=2";
								else
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&sort=2";
								?>" <?php if(@$_GET[sort]==2) echo "selected";?>>價格(高到低)</option>
								<option value="
								<?php
									if(isset($_GET['s_cate']))
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&s_cate=".$_GET['s_cate']."&sort=3";
								else if(isset($_GET['search']))
										echo $_SERVER['PHP_SELF']."?search=".$_GET['search']."&number=".$_GET['number']."&sort=3";
								else
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&sort=3";
								?>" <?php if(@$_GET[sort]==3) echo "selected";?>>價格(低到高)</option>
								<option value="
								<?php
									if(isset($_GET['s_cate']))
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&s_cate=".$_GET['s_cate']."&sort=4";
								else if(isset($_GET['search']))
										echo $_SERVER['PHP_SELF']."?search=".$_GET['search']."&number=".$_GET['number']."&sort=4";
								else
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&sort=4";
								?>" <?php if(@$_GET[sort]==4) echo "selected";?>>上架時間(長到短)</option>

								<option value="
								<?php
									if(isset($_GET['s_cate']))
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&s_cate=".$_GET['s_cate']."&sort=5";
								else if(isset($_GET['search']))
										echo $_SERVER['PHP_SELF']."?search=".$_GET['search']."&number=".$_GET['number']."&sort=5";
								else
									echo $_SERVER['PHP_SELF']."?number=".$_GET['number']."&sort=5";
								?>" <?php if(@$_GET[sort]==5) echo "selected";?>>上架時間(短到長)</option>
							</select>
							<div class="clearfix"></div>
						</div>
				<div class="sorting">
					<h6>顯示:</h6>
					<form name="MyForm1" action="commodity.php" method="POST">


					<select name="dept_name" id="country2" onchange="javascript:location.href=this.value;" class="frm-field required sect">
						<option value="
						<?php
						if(isset($_GET['s_cate']))
							echo $_SERVER['PHP_SELF']."?number=11&s_cate=".$_GET['s_cate']."&sort=".$_GET['sort'];
						else if(isset($_GET['search']))
							echo $_SERVER['PHP_SELF']."?search=".$_GET['search']."&number=11&sort=".$_GET['sort'];
						else
							echo $_SERVER['PHP_SELF']."?number=11&sort=".$_GET['sort'];
						?>"
						<?php if(@$_GET[number]==11) echo "selected";?>    >11</option>
						<option value="
						<?php
						if(isset($_GET['s_cate']))
							echo $_SERVER['PHP_SELF']."?number=3&s_cate=".$_GET['s_cate']."&sort=".$_GET['sort'];
						else if(isset($_GET['search']))
							echo $_SERVER['PHP_SELF']."?search=".$_GET['search']."&number=3&sort=".$_GET['sort'];
						else
							echo $_SERVER['PHP_SELF']."?number=3&sort=".$_GET['sort'];  ?>"
						<?php if(@$_GET[number]==3) echo "selected";?> >3</option>
						<option value="
						<?php
						if(isset($_GET['s_cate']))
							echo $_SERVER['PHP_SELF']."?number=7&s_cate=".$_GET['s_cate']."&sort=".$_GET['sort'];
						else if(isset($_GET['search']))
							echo $_SERVER['PHP_SELF']."?search=".$_GET['search']."&number=7&sort=".$_GET['sort'];
						else
							echo $_SERVER['PHP_SELF']."?number=7&sort=".$_GET['sort'];  ?>"
						<?php if(@$_GET[number]==7) echo "selected";?> >7</option>


					</select>
				</form>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-top">

				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="images/banner2.png" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="images/banner3.png" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="images/banner4.png" alt=" "/>
						</li>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<!--<div class="men-wear-bottom">
				<div class="col-sm-4 men-wear-left">
					<img class="img-responsive" src="images/bb2.jpg" alt=" " />
				</div>
				<div class="col-sm-8 men-wear-right">
					<h4>Exclusive Men's <span>Collections</span></h4>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
					accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
					ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
					explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
					odit aut fugit. </p>
				</div>
				<div class="clearfix"></div>
			</div>-->

				<?php
				$amount=0;
				$nummber=0;
				$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
				mysqli_query($link, 'SET CHARACTER SET utf8');
				mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
				if(isset($_GET['search']))
				{
					if(@$_GET[sort]==0)
						$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' )";
					else if(@$_GET[sort]==1)
						$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' ) order by amount desc";
					else if(@$_GET[sort]==2)
						$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' ) order by price desc";
					else if(@$_GET[sort]==3)
						$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' ) order by price";
					else if(@$_GET[sort]==4)
						$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' ) order by up_time desc";
					else if(@$_GET[sort]==5)
						$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' ) order by up_time ";
				}
				else if(isset($_GET['s_cate']))
				{
					if(@$_GET[sort]==0)
						$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' ";
					else if(@$_GET[sort]==1)
						$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' order by amount desc";
					else if(@$_GET[sort]==2)
						$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' order by price desc";
					else if(@$_GET[sort]==3)
						$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' order by price ";
					else if(@$_GET[sort]==4)
						$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' order by up_time desc";
					else if(@$_GET[sort]==5)
						$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' order by up_time ";
				}
				else
				{
					if(@$_GET[sort]==0)
						$sql = "SELECT * FROM commodity";
					else if(@$_GET[sort]==1)
						$sql = "SELECT * FROM commodity order by amount desc";
					else if(@$_GET[sort]==2)
						$sql = "SELECT * FROM commodity order by price desc";
					else if(@$_GET[sort]==3)
						$sql = "SELECT * FROM commodity order by price ";
					else if(@$_GET[sort]==4)
						$sql = "SELECT * FROM commodity order by up_time desc";
					else if(@$_GET[sort]==5)
						$sql = "SELECT * FROM commodity order by up_time ";

				}
					if ( $result = mysqli_query($link, $sql)) {
	    					$total_records=mysqli_num_rows($result);//取得執行結果總筆數
    						$total_records=$total_records/@$_GET[number];
    						mysqli_data_seek($result,(@$_GET['page']-1)*@$_GET[number]);
    						for($i=0;$i<@$_GET[number];$i++){ //將記錄指標移至第n筆 (n為整數，第一筆為0)
	    				 	if($row = mysqli_fetch_assoc($result)){
	    					$amount++;
	    					$a=$row["no"];
	    					$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    					$row2 = mysqli_fetch_assoc($graph);
	    					if($amount<=3)
	    					{
	    						echo "<div class=\"col-md-4 product-men\">";
								echo "<div class=\"men-pro-item simpleCart_shelfItem\">";
								echo	"<div class=\"men-thumb-item\">";
								echo		"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-front\" height=\"250\">";
								echo		"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
								echo			"<div class=\"men-cart-pro\">";
								echo				"<div class=\"inner-men-cart-pro\">";
								echo					"<a href='single.php?commodity=$a' class=\"link-product-add-cart\">點進看此商品</a>";
								echo				"</div>";
								echo			"</div>";


								echo	"</div>";
								echo	"<div class=\"item-info-product \">";
								echo		"<h4><a href=\"single.php\">$row[name]</a></h4>";
								echo		"<div class=\"info-product-price\">";
								echo			"<span class=\"item_price\">$$row[price]</span>";
								echo	"</div>";
								echo		"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\">";
								echo							"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
								echo								"<fieldset>";
								echo									"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
								echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
								echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
								echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
								echo									"<input  type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\" /> <input class='submit' type='submit'/>";
								echo								"</fieldset>";
								echo							"</form>";
								echo						"</div>";

								echo	"</div>";
								echo "</div>";
								echo "</div>";
	    					}

	   				 }
	   				 }
	    				mysqli_free_result($result); // 釋放佔用的記憶體
					}
					mysqli_close($link); // 關閉資料庫連結
			?>


				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

		<div class="single-pro">

			<?php
				$amount=0;
				$link = mysqli_connect("localhost","root","root123456","group_06");// 建立MySQL的資料庫連結
					mysqli_query($link, 'SET CHARACTER SET utf8');
					mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");
					if(isset($_GET['search']))
					{

						if(@$_GET[sort]==0)
							$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' )";
						else if(@$_GET[sort]==1)
							$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' ) order by amount desc";
						else if(@$_GET[sort]==2)
							$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' ) order by price desc";
						else if(@$_GET[sort]==3)
							$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' ) order by price";
						else if(@$_GET[sort]==4)
							$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' ) order by up_time desc";
						else if(@$_GET[sort]==5)
							$sql = "SELECT * FROM commodity where (name like '%$_GET[search]%' ) order by up_time ";
					}
					else if(isset($_GET['s_cate']))
					{
						if(@$_GET[sort]==0)
							$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' ";
						else if(@$_GET[sort]==1)
							$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' order by amount desc";
						else if(@$_GET[sort]==2)
							$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' order by price desc";
						else if(@$_GET[sort]==3)
							$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' order by price ";
						else if(@$_GET[sort]==4)
							$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' order by up_time desc";
						else if(@$_GET[sort]==5)
							$sql = "SELECT * FROM commodity where category = '$_GET[s_cate]' order by up_time ";
					}
					else
					{
						if(@$_GET[sort]==0)
							$sql = "SELECT * FROM commodity";
						else if(@$_GET[sort]==1)
							$sql = "SELECT * FROM commodity order by amount desc";
						else if(@$_GET[sort]==2)
							$sql = "SELECT * FROM commodity order by price desc";
						else if(@$_GET[sort]==3)
							$sql = "SELECT * FROM commodity order by price ";
						else if(@$_GET[sort]==4)
							$sql = "SELECT * FROM commodity order by up_time desc";
						else if(@$_GET[sort]==5)
							$sql = "SELECT * FROM commodity order by up_time ";
					}
					if ( $result = mysqli_query($link, $sql)) {
						$total_records=mysqli_num_rows($result);//取得執行結果總筆數
						$total_records=$total_records/@$_GET[number];
						mysqli_data_seek($result,(@$_GET['page']-1)*@$_GET[number]);
	    				for($i=0;$i<@$_GET[number];$i++){ //將記錄指標移至第n筆 (n為整數，第一筆為0)
	    				 	if($row = mysqli_fetch_assoc($result)){
	    					$amount++;
	    					$a=$row["no"];
	    					$graph = mysqli_query($link, "SELECT * FROM image where no = '$a' ");
	    					$row2 = mysqli_fetch_assoc($graph);
	    					if($amount>3)
	    					{
	    						echo "<div class=\"col-md-3 product-men\">";
							echo	"<div class=\"men-pro-item simpleCart_shelfItem\">";
							echo		"<div class=\"men-thumb-item\">";
							echo			"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-front\" height=\"250\">";
							echo			"<img src=\"images/$row[category]/$row2[image]\" alt=\"\" class=\"pro-image-back\" height=\"250\">";
							echo				"<div class=\"men-cart-pro\">";
							echo					"<div class=\"inner-men-cart-pro\">";
							echo						"<a href='single.php?commodity=$a' class=\"link-product-add-cart\">點進看此商品</a>";
							echo					"</div>";
							echo				"</div>";


							echo		"</div>";
							echo		"<div class=\"item-info-product \">";
							echo			"<h4><a href='single.php?commodity=$a'>$row[name]</a></h4>";
							echo			"<div class=\"info-product-price\">";
							echo				"<span class=\"item_price\">$$row[price]</span>";
							echo			"</div>";
							echo			"<div class=\"snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2\" value='3'>";
							echo								"<form action=\"addtocart.php\" method=\"post\" class=\"tocart\">";
							echo									"<fieldset>";
							echo										"<input type=\"hidden\" name=\"no\" value=\"$row[no]\" />";
							echo										"<input type=\"hidden\" name=\"amount\" value=\"1\" />";
							echo										"<input type=\"hidden\" name=\"color\" value=\"blue\" />";
							echo										"<input type=\"hidden\" name=\"size\" value=\"XL\" />";
							echo										"<input  type=\"button\" name=\"submit\" value=\"放進購物車\" class=\"button btn_submit\" /> <input class='submit' type='submit'/>";
							echo									"</fieldset>";
							echo								"</form>";
							echo							"</div>";

							echo		"</div>";
							echo	"</div>";
							echo "</div>";
	    					}

	   				 }
	   				}
	    				mysqli_free_result($result); // 釋放佔用的記憶體
					}
					mysqli_close($link); // 關閉資料庫連結
			?>

							<div class="clearfix"></div>
							<br>
							<div class="page" align="center" style="font-family:DFKai-sb; font-size:30px;">
							<?php
							for($a=1;$a<$total_records+1;$a++)
							{
								if(isset($_GET['s_cate']))
									echo " <a href='".$_SERVER['PHP_SELF']."?page=$a&number=".@$_GET[number]."&s_cate=".@$_GET['s_cate']."&sort=".$_GET['sort']."'>$a</a>";
								else if(isset($_GET['search']))
									echo " <a href='".$_SERVER['PHP_SELF']."?page=$a&search=".@$_GET['search']."&number=".@$_GET[number]."&sort=".@$_GET['sort']."'>$a</a>";
								else
   									echo " <a href='".$_SERVER['PHP_SELF']."?page=$a&number=".@$_GET[number]."&sort=".@$_GET['sort']."'>$a</a>";
							}
							?>
							</div>
		</div>
	</div>
</div>

<!-- //mens -->
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
<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
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
							<script type='text/javascript'>//<![CDATA[
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>

							</script>
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
<script >
	function change_sel() {
		var sel_id = window.document.form1.dept_name.selectedIndex;

	}
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
