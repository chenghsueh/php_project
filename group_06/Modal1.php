<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">登入</h3>
							<form id="login-form">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" id="username" required="">
								<label>用戶名稱</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="pwd" id = "password" required="">
								<label>密碼</label>
								<span></span>
							</div>
							<input type="submit" value="登入">
						</form>
            <div><label id = "login_error"></label></div>
								<div class="clearfix"></div>
								<p><a href="#" data-toggle="modal" data-target="#myModal2" >還未成為會員?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" ">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<script>
  $(document).on( 'submit' , '#login-form' , function(event){
    event.preventDefault()
    $.ajax({
      url: "login.php",
      data: $('#login-form').serialize(),
      type: "POST",
      dataType: 'text',
      success: function(msg){
        if(msg == 'success'){
            location.reload();
        }
        else {
            alert(msg);
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
                  alert(xhr.status);
                  alert(thrownError);
      }
    });
  });
</script>
