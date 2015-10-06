<form action="" method="post">
	<div style="width: 500px; border: 3px solid #232323; border-radius: 5px; margin: auto; margin-top: 12vh; padding-left: 25px; padding-right: 25px; padding-bottom: 20px;">
		<p style="text-align: center; font-size: 1.9em; margin-top: 20px; padding-bottom: 15px; font-weight: bold;">Sign Up</p>
		<strong>Username</strong>
		<input id="txt_username" name="txt_username" class="form-control" type="number" >
		<span><?php echo form_error('txt_username'); ?></span>
		<br />
		<strong>Password</strong>
		<input id="txt_password" name="txt_password" class="form-control" type="password">
		<span><?php echo form_error('txt_password'); ?></span>
		<br />
		<strong>Repeat password</strong>
		<div class="input-group transparent">
	        <input id="txt_repassword" name="txt_repassword" class="form-control" type="password">
	        <span id="che_password" class="input-group-addon" style="background-color: #c91f37;">
	            <a href="#" rel="tooltip" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="Mật khẩu không trùng khớp" data-placement="top">
	                <i class="fa fa-times-circle-o" style="font-size: 18px; color: #ffffff;"></i>
	            </a>
	        </span>
	    </div>
	    <span><?php echo form_error('txt_repassword'); ?></span>
	    <br />
		<strong>Fullname</strong>
		<input id="txt_fullname" name="txt_fullname" class="form-control" type="text" >
		<span><?php echo form_error('txt_fullname'); ?></span>
		<br />
		<strong>Email</strong>
		<input id="txt_email" name="txt_email" class="form-control" type="text" >
		<span><?php echo form_error('txt_email'); ?></span>
		<button id="btn_signup" type="button" class="btn btn-default center-block" style="margin-top: 27px;">Submit</button>
	</div>
</form>
