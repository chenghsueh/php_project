<script src = "https://cdnjs.com/libraries/1000hz-bootstrap-validator"> </script>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<!--additional method - for checkbox .. ,require_from_group method ...-->
<script src="https://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<!--中文錯誤訊息-->
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">註冊</h3>
						 <form id="signup-form" method="post" action="signup.php">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" id = "account">
								<label>用戶名稱</label>
								<span></span>
							</div>
							<div></div>
							<div class="styled-input">
								<input type="password" name="password" id="pwd">
								<label>密碼</label>
								<span></span>
							</div>
							<div></div>
							<div class="styled-input">
								<input type="password" name="confirm_password" id="confirm_password">
								<label>確認密碼</label>
								<span></span>
							</div>
							<div></div>
							<div class="styled-input">
								<input type="text" name="telephone" id="telephone">
								<label>手機號碼</label>
								<span></span>
							</div>
							<div></div>
							<div class="styled-input">
								<input type="text" name="Email" id = "email">
								<label>電子郵件</label>
								<span></span>
							</div>
							<div></div>
							<input type="submit" value="註冊">
						</form>
								<div class="clearfix"></div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<script>
$(document).ready(function($) {

	$('#signup-form').validate({
		errorPlacement: function(error, element) {
    error.appendTo( element.parent().next("div") );
  },
		submitHandler: function(form){
					alert("sucess");
					form.submit();
		},
		rules:{
			Name:{
				required: true,
				remote:{
					url: "check_account.php",
					type: "post",
					dataType: "json",
					data:{
								username: function(){
											return $('#account').val();
								}
							}
				}
			},
			Email:{
				email: true,
				required: true
			},
			password:{
				required: true
			},
			confirm_password:{
				required: true,
				equalTo: "#pwd"
			},
			telephone:{
				required: true
			}
		},
	messages:{
			Name:{
						required: "請輸入用戶名稱"
			},
			Email:{
					email: "請輸入正確的電子信箱格式",
					required: "電子信箱為必填欄位"
			},
			password:{
					required: "密碼為必填欄位"
			},
			confirm_password:{
					required: "密碼確認為必填欄位",
					equalTo: "兩次密碼輸入不同，請重新輸入"
			},
			telephone:{
						required: "電話為必填欄位"
			}
	}
	});
});
</script>
