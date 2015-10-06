<form action="" method="post">
	<div style="width: 900px; height: auto; margin: auto">
		<div class="col-xs-6">
			<form action="" method="post">
				<section class="box">
					<header>
						<h2 class="title pull-left">Sending</h2>
			            <div class="actions panel_actions pull-right">
			                <i class="box_toggle fa fa-chevron-down"></i>
			                <i class="box_close fa fa-times"></i>
			            </div>
					</header>
					<div class="content-body">
						<strong>To Email</strong>
						<input id="txt_emailto" name="txt_emailto" class="form-control" type="text" >
						<span><?php echo form_error('txt_emailto'); ?></span>
						<br />
						<strong>Subject</strong>
						<input id="txt_subject" name="txt_subject" class="form-control" type="text">
						<span><?php echo form_error('txt_subject'); ?></span>
						<br />
						<strong>Message</strong>
						<textarea name="txt_message" id="txt_message" rows="5" class="form-control"></textarea>
						<span><?php echo form_error('txt_message'); ?></span>
						<br />
						<strong>Attach</strong>
						<input id="ful_attach" name="ful_attach" type="file" />
						<button type="submit" class="btn btn-danger center-block" style="margin-top: 20px;">Send</button>
					</div>
				</section>
			</form>
		</div>
		<div class="col-xs-6">
			<section class="box">
				<header>
					<h2 class="title pull-left">Your Email Account</h2>
		            <div class="actions panel_actions pull-right">
		                <i class="box_toggle fa fa-chevron-down"></i>
		                <i class="box_close fa fa-times"></i>
		            </div>
				</header>
				<div class="content-body">
					<strong>Email</strong>
					<input id="txt_emailfrom" name="txt_emailfrom" class="form-control" type="text" />
					<span><?php echo form_error('txt_emailfrom'); ?></span>
					<br />
					<strong>Password</strong>
					<input id="txt_passwordfrom" name="txt_passwordfrom" class="form-control" type="password" />
					<span><?php echo form_error('txt_passwordfrom'); ?></span>
				</div>
			</section>
		</div>
	</div>
</form>