<div class="container-fluid directory-container">
	<div class="row" style="position:relative">
		<div class="nav-border">
		</div>
		<ul class="directory-nav">
			<li class="col-xs-4"><a href="<?php echo base_url('/about');?>"><div class="directory-nav-box <?php if($this->uri->slash_segment(2, 'leading')=="/"){echo "nav-active";}?>"><center>About Palais</center></div></a></li>
			<li class="col-xs-4 clear-left"><a href="<?php echo base_url('/about/amenities');?>"><div class="directory-nav-box <?php if($this->uri->slash_segment(2, 'leading')=="/amenities"){echo "nav-active";}?>"><center>Amenities</center></div></a></li>
			<li class="col-xs-4 clear-left"><a href="<?php echo base_url('/about/press');?>"><div class="directory-nav-box <?php if($this->uri->slash_segment(2, 'leading')=="/press"){echo "nav-active";}?>"><center>Press Releases</center></div></a></li>
		</ul>
	</div>
	<div class="clearfix" style="margin-top:30px;"></div>	
</div>