<div class="main-content background-blue">
<div class="mobile-title" style="display:none">Join Mailing List</div>
    <div class="container-fluid directory-container" >
		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6">
				<h1 class="title">Join Mailing List</h1>
			</div>
		</div>
	</div>
	<div class="clearfix spacer"></div>
	<div class="container-fluid join-container" >
		
		<?php echo form_open('join/join_form_registration'); ?>
		<div class="row">
			<div class="col-md-12">
				<div class="join-wrapper">
					<div class="row">
						<div class="col-md-6">
							 <div class="container-fluid" >
							 	<div class="clearfix spacer"></div>
								<!--[if lt IE 9]><span>Name</span><![endif]-->
								<input type="text" class="contact_text" id="j_name" name="j_name" placeholder="Name" value="<?php echo set_value("j_name"); ?>"/>
								<?php echo form_error('j_name', '<div class="error">* ', '</div>'); ?>
								<!--[if lt IE 9]><span>Email</span> <![endif]-->
								<input type="text" class="contact_text" id="j_email" name="j_email" placeholder="Email" value="<?php echo set_value("j_email"); ?>"/>
								<?php echo form_error('j_email', '<div class="error">* ', '</div>'); ?>
								<!--[if lt IE 9]><span>Telephone Number</span> <![endif]-->
								<input type="text" class="contact_text" id="j_telephone" name="j_telephone" placeholder="Telephone Number"  value="<?php echo set_value("j_telephone"); ?>"/>
								<?php echo form_error('j_telephone', '<div class="error">* ', '</div>'); ?>
								
								<!--[if lt IE 9]><span>Mobile Number</span> <![endif]-->
								<input type="text" class="contact_text" id="j_mobile" name="j_mobile" placeholder="Mobile Number" value="<?php echo set_value("j_mobile"); ?>"/>
								<?php echo form_error('j_mobile', '<div class="error">* ', '</div>'); ?>
								
								<p class="join_form_sub_title font-orange">Overseas Phone Number</p>
								<div class="row">
									<div class="col-md-6">
									<!--[if lt IE 9]><span>Country Code</span> <![endif]-->
									<div class="styled-select  contact_text_newline">
									 <?php 
									   echo form_dropdown('j_country_code', $options ,set_value("j_country_code"));
									  ?>
									</div>
									</div>
									<div class="col-md-6">
										<!--[if lt IE 9]><span>Area Code</span> <![endif]-->
										<input type="text" class="contact_text contact_text_newline_2" id="j_area_code" name="j_area_code" placeholder="Area Code"  value="<?php echo set_value("j_area_code"); ?>"/>
									
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									<?php echo form_error('j_country_code', '<div class="error">* ', '</div>'); ?>
									</div>
									<div class="col-md-6">
									<?php echo form_error('j_area_code', '<div class="error">* ', '</div>'); ?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
									<input type="text" class="contact_text" id="j_phone_no" name="j_phone_no" placeholder="Phone Number"  value="<?php echo set_value("j_phone_no"); ?>"/>
									<?php echo form_error('j_phone_no', '<div class="error">* ', '</div>'); ?>
									</div>
								</div>
								
								<p class="join_form_sub_title font-orange">Mailing Address</p>
								
								<!--[if lt IE 9]><span>Country of Residence</span><![endif]-->
								<div class="styled-select  contact_text_newline">
									 <?php 
									   echo form_dropdown('j_cor', $COR_options ,set_value("j_cor"));
									  ?>
								</div>
									<?php echo form_error('j_cor', '<div class="error">* ', '</div>'); ?>
								<!--[if lt IE 9]><span>Postal Code</span><![endif]-->
								
								<input type="text" class="contact_text" id="j_postal_code" name="j_postal_code" placeholder="Postal Code" value="<?php echo set_value("j_postal_code"); ?>"/>
								<?php echo form_error('j_postal_code', '<div class="error">* ', '</div>'); ?>
								
								<!--[if lt IE 9]><span>Street Address</span><![endif]-->
								<textarea type="text" class="contact_text" id="j_street_address" name="j_street_address" placeholder="Street Address" rows="5" value="<?php echo set_value("j_street_address"); ?>"><?php echo set_value("j_street_address"); ?></textarea>
								<?php echo form_error('j_street_address', '<div class="error">* ', '</div>'); ?>
								<div class="clearfix spacer"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="container-fluid" >
								<div class="clearfix spacer"></div>
								
								<table cellpadding="0" cellspacing="0" border="0" width="100%" class="font-11">
									<tr valign="top">
										<td colspan="2"><strong>I consent to receive updates, news, survey requests, promotions and event invitations on:<font class="font-red">*</font></strong>
										<?php echo form_error('option-survey[]', '<div class="error">* ', '</div>'); ?>
										</td>
									</tr>
									<tr valign="top">
										<td width="15"><input type="checkbox" name="option-survey[]" id="option-survey-malls"  value="CDL Shopping Malls"  <?php echo set_checkbox('option-survey[]','CDL Shopping Malls'); ?>/></td>
										<td><label for="option-survey-malls">CDL Shopping Malls:</label>
											<table cellpadding="0" cellspacing="0" border="0" width="100%" class="font-11 option-survey-item">
											<tr valign="top">
												<td width="15"></td>
												<td width="15"><input type="checkbox" name="option-survey[]" id="option-malls-palais"  value="Palais Renaissance" <?php echo set_checkbox('option-survey[]','Palais Renaissance'); ?>/></td>
												<td><label for="option-malls-palais">Palais Renaissance</label> </td>
											</tr>
											<tr valign="top">
												<td></td>
												<td><input type="checkbox" name="option-survey[]"  id="option-malls-city"  value="City Square Mall"  <?php echo set_checkbox('option-survey[]','City Square Mall'); ?>/></td>
												<td><label for="option-malls-city">City Square Mall</label> </td>
											</tr>
											<tr valign="top">
												<td></td>
												<td><input type="checkbox" name="option-survey[]"  id="option-malls-quayside"  value="Quayside Isle"   <?php echo set_checkbox('option-survey[]','Quayside Isle'); ?>/></td>
												<td><label for="option-malls-quayside">Quayside Isle</label> </td>
											</tr>
											</table>
										</td>
									</tr>
									<tr valign="top">
										<td><input type="checkbox" name="option-survey[]" id="option-survey-properties" value="CDL Properties" <?php echo set_checkbox('option-survey[]','CDL Properties'); ?>/></td>
										<td><label for="option-survey-properties">CDL Properties</label> </td>
									</tr>
									<tr valign="top">
										<td><input type="checkbox" name="option-survey[]" id="option-survey-all" value="All" <?php echo set_checkbox('option-survey[]','All'); ?>/></td>
										<td><label for="option-survey-all">All the above</label></td>
									</tr>
									<tr valign="top">
										<td colspan="2" height="15">&nbsp;</td>
									</tr>
									<tr valign="top">
										<td colspan="2"><strong>I consent to receive the above information via the following mode of communication:<font class="font-red">*</font></strong>
										<?php echo form_error('option-communicate[]', '<div class="error">* ', '</div>'); ?>
										</td>
									</tr>
									<tr valign="top">
										<td><input type="checkbox" name="option-communicate[]" id="option-communicate-sms" value="SMS" <?php echo set_checkbox('option-communicate[]','SMS'); ?>/></td>
										<td><label for="option-communicate-sms">SMS</label></td>
									</tr>
									<tr valign="top">
										<td><input type="checkbox" name="option-communicate[]" id="option-communicate-calls"  value="Calls"<?php echo set_checkbox('option-communicate[]','Calls'); ?>/></td>
										<td><label for="option-communicate-calls">Calls</label></td>
									</tr>
									<tr valign="top">
										<td><input type="checkbox" name="option-communicate[]" id="option-communicate-email" value="Email"<?php echo set_checkbox('option-communicate[]','Email'); ?> /></td>
										<td><label for="option-communicate-email">Email</label></td>
									</tr>
									<tr valign="top">
										<td><input type="checkbox" name="option-communicate[]" id="option-communicate-mail" value="Mail" <?php echo set_checkbox('option-communicate[]','Mail'); ?> /></td>
										<td><label for="option-communicate-mail">Mail</label></td>
									</tr>
									<tr valign="top">
										<td><input type="checkbox" name="option-communicate[]" id="option-communicate-all" value="All" <?php echo set_checkbox('option-communicate[]','All'); ?>/></td>
										<td><label for="option-communicate-all">All the above</label></td>
									</tr>
									<tr valign="top">
										<td colspan="2" height="30">&nbsp;</td>
									</tr>
									<tr valign="top">
										<td><input type="checkbox" id="option-communicate-agree" name="option-communicate-agree" value="agreement"></td>
										<td><label for="option-communicate-agree">
										I consent to CDL and its related corporations, their authorised agents and service providers collecting, using and disclosing the above data to send and/or call me on the above marketing & promotional updates. I acknowledge that this form overrides my registration with the Singapore Do-Not-Call Registry. I understand I may withdraw or change my consent at any time by emailing to palais@cdl.com.sg. For more information on the CDL's PDPA policy, I can visit <a style="text-decoration:underline" href="http://www.cdl.com.sg/personaldata" title="www.cdl.com.sg/personaldata" target="_blank">www.cdl.com.sg/personaldata</a>.
<br><br>
I confirm my consents here do not supersede or replace other consents which I may have previously given to CDL. These consents are in additional to any right which CDL may legally have to collect, use or disclose my personal data.</label>
									<?php echo form_error('option-communicate-agree', '<div class="error">* ', '</div>'); ?>
										</td>
									</tr>
								</table>
								<div class="clearfix spacer"></div>
								<br>
								<button type="submit" class="submit_btn" id="join_submit" name="join_submit" >Submit</button>
								<div class="clearfix spacer"></div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>	
    </div>
	<div class="clearfix spacer"></div>
	<div class="clearfix spacer"></div>
</div>