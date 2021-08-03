
<div class="row">
	<div class="col-md-6">
		<div class="press-wrapper">
			<div class="row">
				<div class="col-xs-12 press-text-div">
					<p class="press-title"><?php echo $event_details[0]['cmsscontnews_title']; ?></p>
					<p class="press-date"><?php echo $event_details[0]['cmsscontnews_date']; ?></p>
				</div>
			</div>
			<div class="row download-row">
				<div class="col-xs-12">
					<p class="font-11">
					<a class="press-download-btn" href="<?php echo $event_details[0]['cmsscontnews_attachment']; ?>" target="_blank" title="Download Press Release">Download Press Releases</a>
					</p>
				</div>
			</div>
		</div>
		<div class="clearfix m-spacer"></div>	
	</div>
	<?php if(isset($event_details[1])): ?>
	<div class="col-md-6">
		<div class="press-wrapper">
			<div class="row">
				<div class="col-xs-12 press-text-div">
					<p class="press-title"><?php echo $event_details[1]['cmsscontnews_title']; ?></p>
					<p class="press-date"><?php echo $event_details[1]['cmsscontnews_date']; ?></p>
				</div>
			</div>
			<div class="row download-row">
				<div class="col-xs-12">
					<p class="font-11">
					<a class="press-download-btn" href="<?php echo $event_details[1]['cmsscontnews_attachment']; ?>" target="_blank" title="Download Press Release">Download Press Releases</a>
					</p>
				</div>
			</div>
		</div>
		<div class="clearfix  m-spacer"></div>	
	</div>
	<?php endif; ?>
</div>
	