<div class="menu">
	<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	 <span class="sr-only">Toggle navigation</span>
	 <span class="icon-bar"></span>
	 <span class="icon-bar"></span>
	 <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url('/');?>"><img src="<?php echo base_url("assets"); ?>/images/palais-logo.png" border="0" alt="palais" width="100%" /></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
		<li class="<?php if($this->uri->slash_segment(1, 'leading')=="/"){echo "active";}?>"><a href="<?php echo base_url('/');?>">Home</a></li>
		<li class="<?php if($this->uri->slash_segment(1, 'leading')=="/promotions"){echo "active";}?>"><a href="<?php echo base_url('/promotions');?>">Promotions</a></li>
		<li class="dropdown">
			<a href="<?php echo base_url('/beauty');?>" class="dropdown-toggle" >Directory</a>
			<ul class="dropdown-menu" style="display:block;">
				<li class="<?php if($this->uri->slash_segment(1, 'leading')=="/beauty"){echo "active";}?>"><a href="<?php echo base_url('/beauty');?>">&bull;&nbsp;&nbsp;Beauty</a></li>
				<li class="<?php if($this->uri->slash_segment(1, 'leading')=="/fashion"){echo "active";}?>"><a href="<?php echo base_url('/fashion');?>">&bull;&nbsp;&nbsp;Fashion</a></li>
				<li class="<?php if($this->uri->slash_segment(1, 'leading')=="/food"){echo "active";}?>"><a href="<?php echo base_url('/food');?>">&bull;&nbsp;&nbsp;Food & Beverage</a></li>
				<li class="<?php if($this->uri->slash_segment(1, 'leading')=="/living"){echo "active";}?>"><a href="<?php echo base_url('/living');?>">&bull;&nbsp;&nbsp;Home & Living</a></li>
			</ul>
		</li>
		<li class="<?php if($this->uri->slash_segment(1, 'leading')=="/getting"){echo "active";}?>"><a href="<?php echo base_url('/getting');?>">Getting Here</a></li>
		<li class="<?php if($this->uri->slash_segment(1, 'leading')=="/contact"){echo "active";}?>"><a href="<?php echo base_url('/contact');?>">Contact us</a></li>
		<li class="dropdown">
			<a id="about-menu" href="<?php echo base_url('/about');?>" class="dropdown-toggle">About us</a>
			<ul class="dropdown-menu"
			<?php if($this->uri->slash_segment(1, 'leading')=="/about"||$this->uri->slash_segment(1, 'leading')=="/press"||$this->uri->slash_segment(1, 'leading')=="/press_others"){echo 'style="display:block;"';}?>
			>
				<li class="<?php if($this->uri->slash_segment(2, 'leading')=="/"){echo "active";}?>"><a href="<?php echo base_url('/about');?>">&bull;&nbsp;&nbsp;ABOUT PALAIS</a></li>
				<li class="<?php if($this->uri->slash_segment(2, 'leading')=="/amenities"){echo "active";}?>"><a href="<?php echo base_url('/about/amenities');?>">&bull;&nbsp;&nbsp;AMENITIES</a></li>
				<li class="<?php if($this->uri->slash_segment(2, 'leading')=="/press"){echo "active";}?>"><a href="<?php echo base_url('/about/press');?>">&bull;&nbsp;&nbsp;PRESS RELEASES</a></li>
			</ul>
		</li>
		<li class="<?php if($this->uri->slash_segment(1, 'leading')=="/join"){echo "active";}?>"><a href="<?php echo base_url('/join');?>">Join Mailing list</a></li>
	
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
</div>