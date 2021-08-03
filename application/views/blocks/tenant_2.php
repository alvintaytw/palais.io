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
				<h1 class="title <?php if(strlen($tenant_detail['cmsdircat_name'])>=25){ echo "reduce-text"; }?>"><?php echo $tenant_detail['cmsdircat_name']; ?></h1>
				<div class="clearfix spacer"></div>
				<div class="single-tenant-wrapper">
					<div class="tenant-other-desc">
					<h2 style="margin-top:0px;"><strong><em>
					
					<?php echo stripslashes(utf8_decode($tenant_detail['cmsdir_name'])); ?></em></strong></h2>
					<p class="font-11 "><em>
					<?php 
					if($tenant_detail['cmsdir_tel1']!=NULL)
						echo 'Tel: '.$tenant_detail['cmsdir_tel1'].'<br>'; 
					else if($tenant_detail['cmsdir_tel1']!=NULL&&$$tenant_detail['cmsdir_tel2']!=NULL)
						echo 'Tel: '.$tenant_detail['cmsdir_tel1'].' | '.$tenant_detail['cmsdir_tel2'].'<br>'; 
					?>
					<?php if($tenant_detail['cmsdir_fax']!=NULL)echo 'Fax: '.$tenant_detail['cmsdir_fax'].'<br>'; ?>
					<?php if($tenant_detail['cmsdir_openinghours']!=NULL)echo 'Opening Hours: '.$tenant_detail['cmsdir_openinghours'].'<br>'; ?>
					<?php if($tenant_detail['cmsdir_web']!=NULL)echo '<a href="'. prep_url($tenant_detail['cmsdir_web']).'" target="_blank" title="'.$tenant_detail['cmsdir_web'].'">'.$tenant_detail['cmsdir_web'].'</a>'; ?>
					<?php if($tenant_detail['cmsdir_email']!=NULL)echo '<br><a href="mailto:'.$tenant_detail['cmsdir_email'].'" target="_blank" title="mailto:'.$tenant_detail['cmsdir_email'].'">'.$tenant_detail['cmsdir_email'].'</a>'; ?>
					</em>
					</p>
					<p class="font-11"><strong class="font-orange uppercase"><?php if($tenant_detail['cmsdir_unit']!=NULL) echo $tenant_detail['cmsdir_unit']; ?></strong></p>
					<div class="tenant-desc">
						<p class="font-12"><?php if($tenant_detail['cmsdir_description']!=NULL) echo $tenant_detail['cmsdir_description']; ?></p>
					</div>
					</div>
					<p class="font-12" style="margin-bottom:0;"><a class="tenant-back" href="<?php echo base_url($this->uri->slash_segment(1, 'leading')); ?>" >&lt;&nbsp;Back to directory</a></p>
				</div>
			</div>
		</div>
		<div class="clearfix" style="margin-top:30px;"></div>