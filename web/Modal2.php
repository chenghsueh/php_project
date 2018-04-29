<?php
echo '
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
						 <form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>用戶名稱</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="email" name="Email" required="">
								<label>電子郵件</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required="">
								<label>密碼</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="Confirm Password" required="">
								<label>確認密碼</label>
								<span></span>
							</div>
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
		</div>';
?>
