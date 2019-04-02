<div class="header-bot">
<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="<?php echo "commodity.php?search=".@$GET['search']."?number=11?sort=0";?> " method="POST/GET">
								<input type="search" name="search" placeholder="搜尋您想要的商品" required="">
								<input type="hidden" name="number" value="11"/>
					<input type="hidden" name="sort" value="0"/>
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php"><span>黑</span>皮商城<i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="login_nav">
							<li> <a href="<?php if($_SESSION['auth'] == 0)echo "member_pwd.php"; else echo "admin_member.php"?>"><i class="fa fa-unlock-alt" aria-hidden="true"></i> 我的帳戶 </a></li>
						 <li> <a href="logout.php" id="logout"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 登出 </a></li>
					</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">首頁 <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">流行衣物 <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-4 multi-gd-img1 multi-gd-text ">
										<a href="commodity.php?number=11&sort=0"><img src="images/cloth2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-2 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><ul class="dropdown-title">衣服
											<li><a href="commodity.php?s_cate=1&number=11&sort=0">上衣</a></li>
											<li><a href="commodity.php?s_cate=2&number=11&sort=0">褲子</a></li>
											<li><a href="commodity.php?s_cate=3&number=11&sort=0">裙子</a></li>
											<li><a href="commodity.php?s_cate=4&number=11&sort=0">外套</a></li>
										</ul></li></ul></div>
										<div class="col-sm-2 multi-gd-img">
											<ul class="multi-column-dropdown">
										<li><ul class="dropdown-title">鞋子
										<li><a href="commodity.php?s_cate=5&number=11&sort=0">運動鞋</a></li>
										<li><a href="commodity.php?s_cate=6&number=11&sort=0">休閒鞋</a></li>
									</ul></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">彩妝<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><ul class="dropdown-title">底妝
											<li><a href="commodity.php?s_cate=7&number=11&sort=0">粉底</a></li>
											<li><a href="commodity.php?s_cate=8&number=11&sort=0">蜜粉</a></li>
										</ul></li></ul></div>
										<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><ul class="dropdown-title">眼妝
											<li><a href="commodity.php?s_cate=9&number=11&sort=0">眼影</a></li>
											<li><a href="commodity.php?s_cate=10&number=11&sort=0">眼線</a></li>
										</ul></li></ul></div>
										<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><ul class="dropdown-title">唇彩
											<li><a href="commodity.php?s_cate=11&number=11&sort=0">唇膏</a></li>
										</ul></li></ul></div>
									<div class="col-sm-3 multi-gd-img multi-gd-text ">
										<a href="commodity.php?number=11&sort=0"><img src="images/makeup1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">飾品<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="commodity.php?number=11&sort=0"><img src="images/top3.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-2 multi-gd-img">
									<ul class="multi-column-dropdown">
										<li><ul class="dropdown-title">項鍊
										<li><a href="commodity.php?s_cate=12&number=11&sort=0">頸鍊</a></li>
										<li><a href="commodity.php?s_cate=13&number=11&sort=0">鎖骨鍊</a></li>
									</ul></li>
										<li><ul class="dropdown-title">手環
										<li><a href="commodity.php?s_cate=14&number=11&sort=0">手錶</a></li>
										<li><a href="commodity.php?s_cate=15&number=11&sort=0">手鍊</a></li>
									</ul></li>
								</ul></div>
								<div class="col-sm-2 multi-gd-img">
								<ul class="multi-column-dropdown">
									<li><ul class="dropdown-title">耳環
									<li><a href="commodity.php?s_cate=16&number=11&sort=0">耳針</a></li>
									<li><a href="commodity.php?s_cate=17&number=11&sort=0">耳夾</a></li>
								</ul></li>
									<li><ul class="dropdown-title">戒指
									<li><a href="commodity.php?s_cate=18&number=11&sort=0">戒指</a></li>
								</ul></li>
							</ul></div>
							<div class="col-sm-2 multi-gd-img">
							<ul class="multi-column-dropdown">
								<li><ul class="dropdown-title">髮飾
								<li><a href="commodity.php?s_cate=19&number=11&sort=0">髮帶</a></li>
								<li><a href="commodity.php?s_cate=20&number=11&sort=0">髮圈</a></li>
							</ul></li>

						</ul></div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<!--<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>-->
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">配件<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-2 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><ul class="dropdown-title">包包
											<li><a href="commodity.php?s_cate=21&number=11&sort=0">皮包</a></li>
											<li><a href="commodity.php?s_cate=22&number=11&sort=0">後背包</a></li>
										</ul></li>
									</ul></div>
										<div class="col-sm-2 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><ul class="dropdown-title">帽子
											<li><a href="commodity.php?s_cate=23&number=11&sort=0">棒球帽</a></li>
											<li><a href="commodity.php?s_cate=24&number=11&sort=0">鴨舌帽</a></li>
											<li><a href="commodity.php?s_cate=25&number=11&sort=0">毛帽</a></li>
										</ul></li></ul></div>


									<div class="col-sm-4 multi-gd-img multi-gd-text ">
										<a href="commodity.php?number=11&sort=0"><img src="images/accessor2.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					</ul>
				</div>
			  </div>
			</nav>
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1">
				<button class="w3view-cart" type="submit" name="submit" value="" onclick="location.href='cart.php' ">
					<i class="fa fa-cart-arrow-down" aria-hidden="true"><span><?php if(!isset($_SESSION['cart_no'])) echo "0"; else echo count($_SESSION['cart_no']);?></span></i></button>
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- //banner-top -->
