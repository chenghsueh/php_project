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
<link href="css/font-awesome.css" rel="stylesheet" />
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
<style>
  #example thead{
      padding: 0px;
  }
</style>
</head>
<body>
  <div  id="home"> </div>
<!-- header !-->
<?php
session_start();
if($_SESSION['auth'] == 0 || !isset($_SESSION['auth']))
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
			<h5 id="member_banner">管理<span>會員</span></h5>
			<div class="member_admin">
        <form class="form-horizontal form-inline" name="form1" id="form1" method="post">
                <input type="hidden" name="oper" id="oper" value="insert">
                <table id="edit" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">使用者名稱</th>
                            <th class="text-center">密碼</th>
                            <th class="text-center">電話</th>
                            <th class="text-center">E-mail</th>
                            <th class="text-center">存檔/取消</th>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <input type="text" id="admin_user" name="admin_user">
                            </td>
                            <td class="text-center">
                                <input type="text" id="admin_pwd" name="admin_pwd">
                            </td>
                            <td class="text-center">
                                <input type="text" id="admin_tel" name="admin_tel">
                            </td>
                            <td class="text-center">
                                <input type="text" id="admin_mail" name="admin_mail">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary btn-xs" id="btn-save"><i class="glyphicon glyphicon-save"></i>存檔</button>
                                <button type="reset" class="btn btn-danger btn-xs" id="btn-cancel">取消</button>
                            </td>
                        </tr>
                    </thead>
                </table>
                <table id="example" class="table table-striped table-bordered" >
                    <thead>
                        <tr>
                          <th class="text-center" >使用者名稱</th>
                          <th class="text-center" >密碼</th>
                          <th class="text-center" >電話</th>
                          <th class="text-center" >E-mail</th>
                           <th class="text-center" >修改/刪除</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
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

<script src="//code.jquery.com/jquery-3.3.1.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
var tbl;
$(document).ready(function() {
 //查詢
 tbl = $('#example').DataTable({
   "bSort": false,
    "scrollX": false,
    "scrollY": false,
    "scrollCollapse": false, //當筆數小於scrillY高度時,自動縮小
    "displayLength": 10,
    "paginate": true, //是否分頁
    "lengthChange": true,
    "ajax": {
          url: "member_ajax.php",
          data: function(d) {
                return $('#form1').serialize() + "&oper=query";
          },
          type: 'POST',
          dataType: 'json'
    },
    "dom": 'frtip'
 });

 //修改
 $('tbody').on('click', '#btn_update', function() {
    var data = tbl.row($(this).closest('tr')).data();
    $('#admin_user').val(data[0]);
    $('#admin_pwd').val(data[1]);
    $('#admin_tel').val(data[2]);
    $('#admin_mail').val(data[3]);
    $("#oper").val("update");
 });

 //取消
 $('tbody').on('click', '#btn_cancel', function() {
    $("#oper").val("insert");
 });

 //刪除
 $('tbody').on('click', '#btn_delete', function() {
    var data = tbl.row($(this).closest('tr')).data();
    if (!confirm('是否確定要刪除?'))
          return false;

    $("#oper").val("delete"); //刪除
    CRUD();
 });

 //送出表單 (儲存)
 $("#form1").validate({
    submitHandler: function(form) {
          CRUD();
    },
    rules: {
          admin_user: {
                required: true
          },
          admin_pwd: {
                required: true
          },
          admin_tel: {
                required: true,
          },
          admin_mail: {
                required: true,
                email: true
          },
    }
 });
 function CRUD() {
    $.ajax({
          url: "member_ajax.php",
          data: $("#form1").serialize(),
          type: 'POST',
          dataType: "json",
          success: function(JData) {
                if (JData.code)
                      toastr["error"](JData.message);
                else {
                       $("#oper").val("insert");
                      toastr["success"](JData.message);
                      tbl.ajax.reload();
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
