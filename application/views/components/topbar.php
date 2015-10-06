<div style="padding-top: 20px; padding-bottom: 10px; background-color: #232323; color: #ffffff;">
	<div class="container">
		<div>
			<p style="font-size: 1.4em; color: #ffffff; margin-left: 10vw;" class="pull-left"><?php echo $logoname; ?></p>
		</div>
		<div style="min-width: 320px;" class="pull-right">
			<img src="<?php echo base_url(); ?>assets/images/ceo.png" alt="boss" style="width: 40px; height: 40px; float: left; margin-top: -8px; margin-right: 20px;" />
			<p style="font-size: 1.3em; margin-right: 40px;"><?php echo $this->session->userdata('Name'); ?></p>
			<div class="dropdown" style="float: right; margin-top: -32px;">
				<button type="button" data-toggle="dropdown" style="background-color: #232323; border: 0px;">
					<i class="fa fa-caret-down" style="font-size: 1.1em;"></i>
				</button>
				<ul class="dropdown-menu dropdown-menu-right" style="margin-top: 15px; border: 1px solid #d1d1d1;">
				    <li><a href="#">Profile</a></li>
				    <li class="divider"></li>
				    <li><a href="#">View on Github</a></li>
				    <li><a href="#">Download</a></li>
				    <li><a href="#">Policy</a></li>
				    <li><a href="https://www.facebook.com/profile.php?id=100007462835400" target="_blank">About</a></li>
				    <li><a href="<?php echo base_url().'logout'; ?>">Logout</a></li>
				 </ul>
			</div>
		</div>
	</div>
</div>