<form action="" method="post">
	<div style="width: 500px; padding-bottom: 20px; border: 3px solid #232323; border-radius: 5px; margin: auto; margin-top: 12vh; padding-left: 25px; padding-right: 25px;">
		<p style="text-align: center; font-size: 1.9em; margin-top: 20px; padding-bottom: 15px; font-weight: bold;">Login</p>
		<strong>Username</strong>
		<input name="txt_username" id="txt_username" class="form-control" type="text" >
		<span><?php echo form_error('txt_username') ?></span>
		<br />
		<strong>Password</strong>
		<input name="txt_password" id="txt_password" class="form-control" type="password">
		<span><?php echo form_error('txt_password') ?></span>
		<br />
		<button type="submit" class="btn btn-default center-block" style="margin-top: 27px;">Submit</button>
		<a href="<?php echo base_url(); ?>signup">
			<p style="text-align: center; font-size: 1.4em; margin-top: 20px; padding-top: 19px;">Sign up now</p>
		</a>
	</div>
</form>