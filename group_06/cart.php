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
<style>
#cart_form{
		padding: 100px;
}
#cart_title{
		margin-bottom: 20px;
		font-weight: bold;
		color: #2fdab8;
}
</style>
</head>
<body>
	<div  id="home"> </div>
	<?php
	$link = mysqli_connect('localhost','root','root123456','group_06');

  mysqli_query($link, 'SET CHARACTER SET utf8');
  mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

	session_start();
	if(isset($_SESSION['username']))
		include 'header2.php';
	else
		include 'header.php';
	?>
	<!-- Modal1 -->

	<!-- //Modal1 -->
	<?php
	 include "Modal1.php"
	?>
	<!-- Modal2 -->

	<?php
	 include "Modal2.php"
	?>
	<!-- /banner_bottom_agile_info -->
	<div class="page-head_agile_info_w3l">
			<div class="container">
				<h3> 購<span>物車  </span></h3>
				<!--/w3_short-->
					 <div class="services-breadcrumb">
							<div class="agile_inner_breadcrumb">

							   <ul class="w3_short">
									<li><a href="index.php">首頁</a><i>|</i></li>
									<li>購物車</li>
								</ul>
							 </div>
					</div>
		   <!--//w3_short-->
		</div>
	</div>
	<div class="container">
		<form id="cart_form" method="post" action="confirm_cart.php">
			<h3 id="cart_title">購物清單</h3>
			<table id="cart_form" class="table" border="1">
				<thead>
						<tr>
							<th class="">名稱</th>
							<th class="">單價</th>
							<th class="">數量</th>
							<th class="">顏色</th>
							<th class="">大小</th>
							<th class="">總計</th>
							<th class="">操作</th>
						</tr>
				</thead>
				<tbody id="cart_body">
					<?php
					$total = 0;
					if(!empty($_SESSION['cart_no'])){
						for($i = 0; $i < count($_SESSION['cart_no']); $i ++)
						{
							$sql = "SELECT * FROM commodity WHERE no = ' ".$_SESSION['cart_no'][$i]." ' ";
							$result = mysqli_query($link, $sql);
						  $row = mysqli_fetch_assoc($result);
							$sql_color = "SELECT * FROM color WHERE no = '$row[no]' ";
							$result_color = mysqli_query($link, $sql_color);
							$sql_size = "SELECT * FROM size WHERE no = '$row[no]' ";
							$result_size = mysqli_query($link, $sql_size);
							echo "<tr><td><a href=\"single.php?commodity=".$row['no']."\">".$row['name']."</a></td><td>".$row['price']."</td><td>
							<button type=\"button\" class=\"button minus\" id=\"minus\">-</button>
							<input type=\"text\" name=\"amount[]\" class=\"tbox\" id=\"tbox\" value=\"".$_SESSION['cart_amount'][$i]."\" maxlength=\"2\"></input>
							<button type=\"button\" class=\"button plus\" id=\"plus\">+</button></td><td>
							<select name='color[]'>";
							while($row_color = mysqli_fetch_assoc($result_color))
							{
									if($_SESSION['cart_color'][$i] == $row_size['color'])
										echo "<option value=\"$row_color[color]\" selected>$row_color[color]</option>";
										else
											echo "<option value=\"$row_color[color]\" >$row_color[color]</option>";
								}
							echo "</select></td><td><select name='size[]'>";
							while($row_size = mysqli_fetch_assoc($result_size))
							{
									if($_SESSION['cart_size'][$i] == $row_size['size'])
										echo "<option value=\"$row_size[size]\" selected>$row_size[size]</option>";
										else
											echo "<option value=\"$row_size[size]\" >$row_size[size]</option>";
								}
							echo "</select></td><td>".
							$_SESSION['cart_amount'][$i]*$row['price']."</td><td>
							<button type='button' class='btn btn-danger gd_delete' value='$i'
							onclick='location.href=\"delete_from_cart.php?no=$i\"'>刪除</button></td></tr>";
							$total += $_SESSION['cart_amount'][$i]*$row['price'];
						}
						echo "<tr ><td colspan='6' align='right'>總共<span id='total'>".$total."</span>元</td>
						<td><button type='submit' class='btn btn-primary'>購買</button></td></tr>";
					}
					?>
				</tbody>
				<tfoot>

				</tfoot>
			</table>
		</form>
	</div>
	<?php include 'footer.php'?>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script>
	$(document).ready(function() {
		$("#cart_body").on('click','.plus',function() {
			/* Act on the event */
			var tr = $(this).parent().parent();
			var value = tr.find("input");
			value.val(parseInt(value.val())+1);
			var total = tr.find("td").eq(5);
			var price = tr.find("td").eq(1);
			total.text(parseInt(price.text())*parseInt(value.val()));
			$('#total').text(parseInt($('#total').text()) + (parseInt(price.text())));
		});

		$(".container").on('click','.minus',function() {
			/* Act on the event */
			var tr = $(this).parent().parent();
			var value = tr.find("input");
			if(parseInt(value.val()) != 1)
				value.val(parseInt(value.val())-1);
			var total = tr.find("td").eq(5);
			var price = tr.find("td").eq(1);
			total.text(parseInt(price.text())*parseInt(value.val()));
			$('#total').text(parseInt($('#total').text()) - (parseInt(price.text())));
		});
	});
	</script>
</body>

</html>
