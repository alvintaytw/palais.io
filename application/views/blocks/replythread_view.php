<div class="main-content background-blue">
	<div class="mobile-title" style="display:none"><?php echo $title; ?></div>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 promo-big">
				<img class="home-promo-img" src="<?php echo base_url("assets"); ?>/images/home-img-01.png" border="0" alt=""/>
			</div>
		</div>
	</div>
	<div class="container-fluid  directory-container">
		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6">
			<h1 class="title"><?php echo $title; ?></h1>
				<div class="blank-wrapper">
					<!--Start contentThread-->
					<table border="0" align="center" width="100%">
					<tr>
						<td class="text_shopsname">RE: <?php echo $feedbacksubject; ?></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url("assets"); ?>/images/spacer.gif" width="1" height="10" border="0" alt="" /></td>
					</tr>
					<tr>
						<td>Dear <?php echo $feedbackname; ?>,<br />
							Thank you for your feedback/enquiry. Please read our reply below: </td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url("assets"); ?>/images/spacer.gif" width="1" height="15" border="0" alt="" /></td>
					</tr>
					<tr>
						<td><table class="feebback_tb" border="1" width="100%">
								<tr valign="top">
									<th  width="25%">Date &amp; Time</th>
									<th  width="15%">From</th>
									<th  width="60%">Message</th>
								</tr>
								<?php
								$i = 0;
								if($result != NULL)
								{
									foreach ($result as $row)
									{	
										$i++;
										
										$class = "";
										if ($i % 2 == 0)
										$class = "class='tbl_replyThreadTD'";
										
										echo "<tr valign='top'>";
										echo "<td " . $class . ">" . date("j M Y g:iA", intval($row->crmfeedbackmsg_datetime)) . "</td>";
										
										if (intval($row->crmfeedbackmsg_from) > 0)
										echo "<td " . $class . ">Palais</td>";
										else
										echo "<td " . $class . ">You</td>";
										
										echo "<td " . $class . ">" . $row->crmfeedbackmsg_message . "</td>";
										echo "</tr>";
									}
								}
								else
									echo "<td colspan='3'>No Message</td>";
								?>
							</table></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url("assets"); ?>/images/spacer.gif" width="1" height="2" border="0" alt="" /></td>
					</tr>
					<tr>
						<td><img src="<?php echo base_url("assets"); ?>/images/spacer.gif" width="1" height="15" border="0" alt="" /></td>
					</tr>
					<tr>
						<td>
							<?php if ($submit_status): ?>
							<B>Thank you. We'll respond to you as soon as possible.</B>
							<?php else: ?>
							
							<?php 
							 $attributes = array('name' => 'formReplyThread', 'id'=> 'formReplyThread');
							echo form_open('replythread/submit',$attributes);
							?>
								<table width="100%" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td>Reply</td>
									</tr>
									<tr>
										<td><table border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td><textarea id="senderComments" name="senderComments"  rows="8" placeholder="Type here..." value="<?php echo set_value("senderComments"); ?>"><?php echo set_value("senderComments"); ?></textarea>
													<?php echo form_error('senderComments', '<div class="error">* ', '</div>'); ?>
													</td>
												</tr>
											</table>
											<span class="text_remark">(Max 1200 characters)</span></td>
									</tr>
									<tr>
										<td align="right">
										<button type="submit" class="submit_btn" id="contact_submit" name="contact_submit" >Submit</button>
										</td>
									</tr>
								</table>
								<input type="hidden" name="feedbacktype" value="<?php echo $feedbacktype; ?>">
								<input type="hidden" name="feedbackid" value="<?php echo $feedbackid; ?>">
								<input type="hidden" name="feedbackauthcode" value="<?php echo $feedbackauthcode; ?>">
							<?php echo form_close(); ?>
							<?php endif; ?></td>
					</tr>
					</table>
					<!--End contentThread-->
				</div>
				<div class="clearfix spacer"></div>
			</div>
		</div>
	</div>
	<!-- /.container -->
</div>


