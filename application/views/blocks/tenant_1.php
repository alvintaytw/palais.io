
<div class="mobile" style="display:none;">
<?php echo $this->load->view('includes/sub-nav-header.php'); ?>
	<div class="row">
		<div class="col-xs-12">
			<p class="font-12" style="margin-bottom:15;">To avoid disappointment, we strongly encourage patrons to check directly with the restaurants on the availability and/or reservations placement. </p>
			<p class="font-12" style="margin-bottom:15;"><a href="<?php echo base_url($this->uri->slash_segment(1, 'leading')); ?>" >&lt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>BACK TO DIRECTORY</em></a></p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<a href="<?php echo $tenant_detail['cmsdir_logo']; ?>" class="image-link">
			<img  src="<?php echo $tenant_detail['cmsdir_logo']; ?>" border="0" alt="Antoinette" width="100%" />
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
				<h1 class="title"><?php echo $detail; ?></h1>
				<div class="clearfix spacer"></div>
				<div class="single-tenant-wrapper">
					<h2 style="margin-top:0px;"><strong><em><?php echo $tenant_detail['cmsdir_name']; ?></em></strong></h2>
					<p class="font-11"><em>
					<?php 
					if($tenant_detail['cmsdir_tel1']!=NULL)
						echo 'Tel: '.$tenant_detail['cmsdir_tel1'].'<br>'; 
					else if($tenant_detail['cmsdir_tel1']!=NULL&&$$tenant_detail['cmsdir_tel2']!=NULL)
						echo 'Tel: '.$tenant_detail['cmsdir_tel1'].' | '.$tenant_detail['cmsdir_tel2'].'<br>'; 
					?>
					<?php if($tenant_detail['cmsdir_fax']!=NULL)echo 'Fax: '.$tenant_detail['cmsdir_fax'].'<br>'; ?>
					<?php if($tenant_detail['cmsdir_openinghours']!=NULL)echo 'Opening Hours: '.$tenant_detail['cmsdir_openinghours'].'<br>'; ?>
					<?php if($tenant_detail['cmsdir_web']!=NULL)echo '<br><a href="'.$tenant_detail['cmsdir_web'].'" target="_blank" title="'.$tenant_detail['cmsdir_web'].'">'.$tenant_detail['cmsdir_web'].'</a>'; ?>
					<?php if($tenant_detail['cmsdir_email']!=NULL)echo '<br><a href="mailto:'.$tenant_detail['cmsdir_email'].'" target="_blank" title="mailto:'.$tenant_detail['cmsdir_email'].'">'.$tenant_detail['cmsdir_email'].'</a>'; ?>
					</em>
					</p>
					<p class="font-11"><strong class="font-orange uppercase"><?php if($tenant_detail['cmsdir_unit']!=NULL) echo $tenant_detail['cmsdir_unit']; ?></strong></p>
					<br>
					<div class="tenant-desc">
						<p class="font-12"><?php if($tenant_detail['cmsdircat_name']!=NULL) echo $tenant_detail['cmsdircat_name']; ?></p>
					</div>
					
				</div>
			</div>
	</div>
<?php echo $this->load->view('includes/sub-nav-footer.php'); ?>
	<div class="promotion">
		<div class="swiper-container">
			<div class="swiper-wrapper" >
			