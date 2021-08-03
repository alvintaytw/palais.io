

<div class="main-content background-blue">
<div class="mobile-title" style="display:none">Promotions</div>
<div class="container-fluid directory-container">
	<div class="row">
		<div class="col-md-6 promo-big">
			<?php if(!$withContent): ?>
			<div class="promo-large-img-frame">
					<img src="<?php echo $promotion_img; ?>" border="0" alt=""/>
				</div>
			<?php else: ?>
			<img class="home-promo-img" src="<?php echo base_url("assets"); ?>/images/home-img-01.png" border="0" alt=""/>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="container-fluid directory-container">
	<div class="row">
		<div class="col-md-6">
		</div>
		<div class="col-md-6 left-container-padding">
			<h1 class="title">Promotions</h1>
			<div class="clearfix spacer"></div>
			
			<?php if($withContent): ?>
			<div class="promo-wrapper">
				<a href="<?php echo $promo_details['cmsscontpro_attachment']; ?>" title="">
				<div class="promo-page-img-frame">
				<img src="<?php echo $promo_details['cmsscontpro_image'];?>" border="0" alt="palais" />
				</div>
				</a>

				<div class="promo-text-wrapper">
					<h2><strong><em><?php echo $promo_details['cmsscontpro_title']; ?></em></strong></h2>
					<p class="font-11 uppercase"><em></em></p>
					<p class="font-12 font-orange"><strong></strong></p>
					<p class="font-12">
						<?php echo $promo_details['cmsscontpro_description']; ?>
					</p>
					<p style="font-11"></p>
					<p class="font-12">
						<?php if(isset($promo_details['cmsscontpro_attachment'])): ?>
						<a class="promo_readmore" target="_blank" href="<?php echo $promo_details['cmsscontpro_attachment']; ?>" title="Read more">Read more</a>
						<?php endif; ?>
					</p>
					
				</div>
				<p class="font-12 back-btn"><a class="promo_back" href="<?php echo base_url($this->uri->slash_segment(1, 'leading')); ?>" >&lt;&nbsp;Back to promotions</a></p>
			</div>
			<?php else: ?>
			<div class="promo-wrapper">
				
				<a href="" title="">
				<img src="<?php echo base_url("assets"); ?>/images/promotion-img-02.png" border="0" alt="palais" width="100%" />
				</a>
				<div class="promo-text-wrapper">
					<h2><strong><em>NEW LOOK. NEW TASTES. NEW TEMPTATIONS. </em></strong></h2>
					<p class="font-11 uppercase"><em>REDISCOVER THE NEW PALAIS AND BE REWARDED.</em></p>
					<p class="font-12 font-orange"><strong>15 Nov to 1 Jan 2015</strong></p>
					<p class="font-12">
					MASTERCARD PROMOTION: Receive a $30 Palais voucher with minimum spend of $300 using MasterCard.</p>
					
					<p class="font-12">LUCKY DRAW: With a minimum spend of $500, receive a chance* to win $2,000 worth of vouchers. UOB Cardmembers need only spend $300 to qualify.</p>
					<p style="font-11">*Terms & Conditions apply.</p>
					<br /><br />
					<!--<p class="font-12">
					<a class="promo_readmore" href="" title="Read more">Read more</a>
					</p>-->
					
				</div>
				<p class="font-12 back-btn"><a class="promo_back" href="<?php echo base_url($this->uri->slash_segment(1, 'leading')); ?>" >&lt;&nbsp;Back to promotions</a></p>
			</div>
			<?php endif; ?>
		</div>
		
	</div>

</div><!-- /.container -->
<div class="clearfix  spacer"></div>
</div>
