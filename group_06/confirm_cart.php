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
    padding-top: 100px;
		margin-bottom: 20px;
		font-weight: bold;
		color: #2fdab8;
}
#cart_total{
    font-size: 20px;
    font-weight: bold;
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
    include "Modal1.php";
    include "Modal2.php";
  	?>
    <!-- /banner_bottom_agile_info -->
  	<div class="page-head_agile_info_w3l">
  			<div class="container">
  				<h3> 確認<span>商品  </span></h3>
  				<!--/w3_short-->
  					 <div class="services-breadcrumb">
  							<div class="agile_inner_breadcrumb">

  							   <ul class="w3_short">
  									<li><a href="index.php">首頁</a><i>|</i></li>
  									<li>確認商品</li>
  								</ul>
  							 </div>
  					</div>
  		   <!--//w3_short-->
  		</div>
  	</div>
    <?php
        $_SESSION['cart_color'] = $_POST['color'];
        $_SESSION['cart_size'] = $_POST['size'];
        $_SESSION['cart_amount'] = $_POST['amount'];
    ?>
    <div class="container">
      <form id="order" action='order.php' method='post'>
        <h3 id="cart_title"> 確認購物物品 </h3>
        <table id="cart_form" class="table" boder="1">
          <thead>
  						<tr>
  							<th class="">名稱</th>
  							<th class="">單價</th>
  							<th class="">數量</th>
  							<th class="">顏色</th>
  							<th class="">大小</th>
  							<th class="">總計</th>
  						</tr>
  				</thead>
          <tbody>
            <?php
                $total = 0;
                for($i = 0; $i < count($_SESSION['cart_no']); $i ++)
                {
                    $sql = "SELECT * FROM commodity WHERE no = ' ".$_SESSION['cart_no'][$i]." ' ";
    							  $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo "<tr><td>".$row['name']."</td><td>".$row['price']."</td><td>".
                    $_SESSION['cart_amount'][$i]."</td><td>".$_SESSION['cart_color'][$i]."</td><td>".
                    $_SESSION['cart_size'][$i]."</td><td>".$_SESSION['cart_amount'][$i]*$row['price']."</td>";
                    $total += $_SESSION['cart_amount'][$i]*$row['price'];
                }
                echo "<tr><td colspan='5' align='left'>
                <label for='addr'>請填寫收件地址: &nbsp</label><input type='text' name='addr' id='addr' required='true' size='50'>
                </td></tr>";
                echo "<tr><td colspan='5' align='right' id='cart_total'>總共".$total."元</td>
                <td><button type='submit' class='btn btn-primary'>確認購買</button>
                <button type='cancel' class='btn btn-danger' onclick=\"location.href='cart.php'\">取消</button></td></tr>";
            ?>
          </tbody>
        </table>
      </form>
    </div>
    <?php include 'footer.php';?>
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
    <script>
    $(document).on( 'submit' , '#order' , function(event){
      event.preventDefault()
      $.ajax({
        url: "order.php",
        data: $('#order').serialize(),
        type: "POST",
        dataType: 'text',
        success: function(msg){
            alert(msg);
            document.location.href="index.php";
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
