<div class="main-content background-blue">
<div class="mobile-title" style="display:none">Contact us</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 promo-big">
				<img class="home-promo-img" src="<?php echo base_url("assets"); ?>/images/home-img-01.png" border="0" alt=""/>
			</div>
		</div>
	</div>
<div class="container-fluid directory-container">
	<div class="row">
		<div class="col-md-6">
		</div>
		<div class="col-md-6">
			<h1 class="title">Contact us</h1>
			<div class="clearfix spacer"></div>
			<div class="contact-wrapper">
				<p class="font-12">Your feedback is important to us. Please select the Message Type and provide your contact details to submit the feedback form. </p>
				<p class="error">All fields are mandatory</p>
				<?php echo form_open('contact/contact_form_registration'); ?>
					  <!--[if lt IE 9]><span>Name</span><![endif]-->
					<input type="text" class="contact_text" id="c_name" name="c_name" placeholder="Name" value="<?php echo set_value("c_name"); ?>"/>
					<?php echo form_error('c_name', '<div class="error">* ', '</div>'); ?>
					<!--[if lt IE 9]><span>Contact</span> <![endif]-->
					<input type="text" class="contact_text" id="c_contact" name="c_contact" placeholder="Contact" value="<?php echo set_value("c_contact"); ?>"/>
					<?php echo form_error('c_contact', '<div class="error">* ', '</div>'); ?>
					<!--[if lt IE 9]><span>Email</span> <![endif]-->
					<input type="text" class="contact_text" id="c_email" name="c_email" placeholder="Email" value="<?php echo set_value("c_email"); ?>"/>
					<?php echo form_error('c_email', '<div class="error">* ', '</div>'); ?>
					<!--[if lt IE 9]><span>Message Type</span><![endif]-->
					<div class="styled-select">
					 <?php 
					   echo form_dropdown('c_type', $options ,set_value("c_type"));
					  ?>
					</div>
					<?php echo form_error('c_type', '<div class="error">* ', '</div>'); ?>
					<!--[if lt IE 9]><span>Subject</span><![endif]-->
					<input type="text" class="contact_text" id="c_subject" name="c_subject" placeholder="Subject" value="<?php echo set_value("c_subject"); ?>"/>
					<?php echo form_error('c_subject', '<div class="error">* ', '</div>'); ?>
					<!--[if lt IE 9]><span>Comment</span><![endif]-->
					<textarea type="text" class="contact_text" id="c_comment" name="c_comment" placeholder="Comment" rows="5" value="<?php echo set_value("c_comment"); ?>"><?php echo set_value("c_comment"); ?></textarea>
					<?php echo form_error('c_comment', '<div class="error">* ', '</div>'); ?>
				<br><br>
				<p class="font-11">Enter <strong>both words</strong> below, <strong>separated by a space.</strong> <br>Can't read the words below? Try different words or an audio captcha.</p>
					<p class="error">Type the two words separated by a space (not case sensitive).</p>
					
					<?php echo form_error('recaptcha_challenge_field', '<div class="error">* ', '</div>'); ?>
					 <script type="text/javascript">
					 var RecaptchaOptions = {
					    theme : 'clean'
					 };
					 </script>
					<?php echo recaptcha(); ?>
					
					<!--<img src="<?php echo base_url("assets"); ?>/images/temp-recapcha.png" alt="" title="" border="0" width="100%"  />-->
					<br>
					<button type="submit" class="submit_btn" id="contact_submit" name="contact_submit" >Submit</button>
				<?php echo form_close(); ?>
			</div>
			<div class="clearfix spacer"></div>
			<div class="contact-wrapper">
			<strong>Customer Service & General Enquiries</strong>	<br /> 
			Palais Concierge at Level 1	 	<br /> 
			Operating Hours: 10am to 10pm	 	<br /> 
			Tel: (65) 6737 6992
			</div>
			<div class="clearfix spacer"></div>
		</div>
	</div>

</div><!-- /.container -->
</div>