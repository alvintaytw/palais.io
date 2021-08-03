
<div class="mobile" style="display:none;">
<?php echo $this->load->view('includes/sub-nav-header.php'); ?>
	<div class="row">
		<div class="col-xs-12">
			<p class="font-12" style="margin-bottom:15;">To avoid disappointment, we strongly encourage patrons to check directly with the restaurants on the availability and/or reservations placement. </p>
			<p class="font-12" style="margin-bottom:15;"><a href="<?php echo base_url($this->uri->slash_segment(1, 'leading')); ?>" >&lt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>BACK</em></a></p>
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
					<?php if($tenant_detail['cmsdir_web']!=NULL)echo '<br><a href="" target="_blank" title="'.$tenant_detail['cmsdir_web'].'">'.$tenant_detail['cmsdir_web'].'</a>'; ?>
					</em>
					</p>
					<p class="font-11"><strong class="font-orange uppercase"><?php if($tenant_detail['cmsdir_unit']!=NULL)echo $tenant_detail[0]['cmsdir_unit']; ?></strong></p>
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
			<!-- Loop Gallery -->
				<div class="swiper-slide" style="width:250px;">
					<div class="tenant-sub-img-frame">
						<a href="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-02.jpg" target="_blank"><img  src="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-02.jpg" border="0" alt="Antoinette" /></a>
					</div>
				</div>
				<div class="swiper-slide" style="width:250px;">
					<div class="tenant-sub-img-frame">
						<a href="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-01--.jpg" target="_blank"><img  src="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-01--.jpg" border="0" alt="" /></a>
					</div>
				</div>
			<!-- Loop Gallery -->
			</div>
		</div>
		<center><div class="pagination"></div></center>
	</div>
</div>
<div class="desktop main-content background-blue scroll-page-y">
    <div class="container-fluid parent-gallery">
		<div class="row">
			<div class="col-md-6">
				<div class="tenant-img-frame" style="float:right">
					<a href="<?php echo $tenant_detail['cmsdir_logo']; ?>" class="image-link">
					<img  src="<?php echo $tenant_detail['cmsdir_logo']; ?>" border="0" alt="" />
					</a>
				</div>
			</div>
			<div class="col-md-6 left-container-padding">
				<h1 class="title"><?php echo $tenant_detail['cmsdircat_name']; ?></h1>
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
					<?php if($tenant_detail['cmsdir_web']!=NULL)echo '<br><a href="" target="_blank" title="'.$tenant_detail['cmsdir_web'].'">'.$tenant_detail['cmsdir_web'].'</a>'; ?>
					</em>
					</p>
					<p class="font-11"><strong class="font-orange uppercase"><?php if($tenant_detail['cmsdir_unit']!=NULL)echo $tenant_detail[0]['cmsdir_unit']; ?></strong></p>
					<br>
					<div class="tenant-desc">
						<p class="font-12"><?php if($tenant_detail['cmsdircat_name']!=NULL) echo $tenant_detail['cmsdircat_name']; ?></p>
					</div>
					<p class="font-12" style="margin-bottom:0;"><a href="<?php echo base_url($this->uri->slash_segment(1, 'leading')); ?>" >&lt;&nbsp;BACK</a></p>
				</div>
			</div>
		</div>
		<div class="clearfix" style="margin-top:30px;"></div>
		<!-- Loop Gallery -->
		<div class="row">
			<div class="col-md-6">
				<div style="width:391px; float:right">
					<div class="tenant-sub-wrapper" >
						<div class="tenant-sub-img-frame">
							<a href="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-02.jpg" class="image-link"><img  src="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-02.jpg" border="0" alt="Antoinette" /></a>
						</div>
					</div>
					<div class="tenant-sub-wrapper" style="padding-left: 15px;">
						<div class="tenant-sub-img-frame">
							<a href="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-01--.jpg" class="image-link">
							<img  src="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-01--.jpg" border="0" alt="" />
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 left-container-padding">
				<div style="width:391px">
					<div class="tenant-sub-wrapper" >
						<div class="tenant-sub-img-frame">
							<a href="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-01---.jpg" class="image-link">
							<img  src="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-01---.jpg" border="0" alt="" />
							</a>
						</div>
					</div>
					<div class="tenant-sub-wrapper" style="padding-left: 15px;">
						<div class="tenant-sub-img-frame">
							<a href="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-02.jpg" class="image-link">
							<img  src="<?php echo base_url("assets"); ?>/images/tenant/gallery/images-02.jpg" border="0" alt=""  />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Loop Gallery -->
		<div class="clearfix" style="margin-top:30px;"></div>
		

    </div><!-- /.container -->
</div>