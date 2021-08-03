<?php if($isdesktop):?>
 <li class="col-md-6 clear-right-padding promo-thumb">
	<a class="promo_link" href="<?php echo base_url('promotions/promotion_page')."/".$promo_details[0]['cmsscontpro_id'];?>">
	<div class="promotion-img-frame"><img src="<?php echo $promo_details[0]['cmsscontpro_image'];?>" alt="img" /></div>
	<div class="promo-thumb-findoutmore-wrapper"><center><div class="promo-thumb-findoutmore">Find out more</div></center></div>
	</a>
</li>
<?php if(isset($promo_details[1])): ?>
 <li class="col-md-6 clear-right-padding promo-thumb">
	<a class="promo_link" href="<?php echo base_url('promotions/promotion_page')."/".$promo_details[1]['cmsscontpro_id'];?>">
	<div class="promotion-img-frame"><img src="<?php echo $promo_details[1]['cmsscontpro_image'];?>" alt="img" /></div>
	<div class="promo-thumb-findoutmore-wrapper"><center><div class="promo-thumb-findoutmore">Find out more</div></center></div>
	</a>	
</li>
<?php endif; ?>

	
<?php else: ?>
	<div class="row">
		<div class="col-xs-12">
			<div class="mobile-promo-wrapper">
				<img src="<?php echo $promo_details[0]['cmsscontpro_image']; ?>" border="0" alt="" width="100%"/>
				<div class="mobile-promo-text-wrapper">
					<p class="mobile-promo-title"><?php echo $promo_details[0]['cmsscontpro_title']; ?></p>
					<p class="mobile-promo-desc">
					<?php echo $promo_details[0]['cmsscontpro_description']; ?>
					<br>
					<?php  if($promo_details[0]['cmsscontpro_attachment']!= NULL) : ?>
					<a href="<?php echo $promo_details[0]['cmsscontpro_attachment']; ?>" title="read more" target="_blank">Read more</a>
					<?php endif; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix  spacer"></div>	
	<?php if(isset($promo_details[1])): ?>
	<div class="row">
		<div class="col-xs-12">
			<div class="mobile-promo-wrapper">
				<img src="<?php echo $promo_details[1]['cmsscontpro_image']; ?>" border="0" alt="" width="100%"/>
				<div class="mobile-promo-text-wrapper">
					<p class="mobile-promo-title"><?php echo $promo_details[1]['cmsscontpro_title']; ?></p>
					<p class="mobile-promo-desc">
					<?php echo $promo_details[1]['cmsscontpro_description']; ?>
					<br>
					<?php  if($promo_details[1]['cmsscontpro_attachment']!= NULL) : ?>
					<a href="<?php echo $promo_details[1]['cmsscontpro_attachment']; ?>" title="read more" target="_blank">Read more</a>
					<?php endif; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix  spacer"></div>
	<?php endif; ?>
<?php endif; ?>