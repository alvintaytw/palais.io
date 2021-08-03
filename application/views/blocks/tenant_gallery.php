<?php if($isdesktop):?>

<div class="row">
	<div class="col-md-6">
		<div class="tenant-gallery-left">
			<div class="tenant-sub-wrapper" >
				<div class="tenant-sub-img-frame">
					<a href="<?php echo $tenant_detail_gallery[0]['cmsdirphoto_image']; ?>" class="image-link">
					<img  src="<?php echo $tenant_detail_gallery[0]['cmsdirphoto_image']; ?>" border="0" alt="Antoinette" />
					</a>
				</div>
			</div>
			<?php if(isset($tenant_detail_gallery[1])): ?>
			<div class="tenant-sub-wrapper left-tenant-sub-wrapper">
				<div class="tenant-sub-img-frame">
					<a href="<?php echo $tenant_detail_gallery[1]['cmsdirphoto_image']; ?>" class="image-link">
					<img  src="<?php echo $tenant_detail_gallery[1]['cmsdirphoto_image']; ?>" border="0" alt="" />
					</a>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php if(isset($tenant_detail_gallery[2])): ?>
	<div class="col-md-6">
		<div>
			<div class="tenant-sub-wrapper" >
				<div class="tenant-sub-img-frame">
					<a href="<?php echo $tenant_detail_gallery[2]['cmsdirphoto_image']; ?>" class="image-link">
					<img  src="<?php echo $tenant_detail_gallery[2]['cmsdirphoto_image']; ?>" border="0" alt="" />
					</a>
				</div>
			</div>
			<?php if(isset($tenant_detail_gallery[3])): ?>
			<div class="tenant-sub-wrapper left-tenant-sub-wrapper">
				<div class="tenant-sub-img-frame">
					<a href="<?php echo $tenant_detail_gallery[3]['cmsdirphoto_image']; ?>" class="image-link">
					<img  src="<?php echo $tenant_detail_gallery[3]['cmsdirphoto_image']; ?>" border="0" alt="" />
					</a>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
</div>
<div class="clearfix gallery-spacer"></div>
<?php else: ?>

	<div class="swiper-slide" style="width:250px;">
		<div class="tenant-sub-img-frame">
			<a href="<?php echo $tenant_detail_gallery[0]['cmsdirphoto_image']; ?>" target="_blank"><img  src="<?php echo $tenant_detail_gallery[0]['cmsdirphoto_image']; ?>" border="0" alt="Antoinette" /></a>
		</div>
	</div>
	<?php if(isset($tenant_detail_gallery[1])): ?>
	<div class="swiper-slide" style="width:250px;">
		<div class="tenant-sub-img-frame">
			<a href="<?php echo $tenant_detail_gallery[1]['cmsdirphoto_image']; ?>" target="_blank"><img  src="<?php echo $tenant_detail_gallery[1]['cmsdirphoto_image']; ?>" border="0" alt="Antoinette" /></a>
		</div>
	</div>
	<?php endif; ?>				
				
<?php endif; ?>