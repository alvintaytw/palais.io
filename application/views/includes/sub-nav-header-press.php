<div class="main-content background-blue">
<div class="container-fluid directory-container">
	<div class="row">
		<div class="col-md-6">
		</div>
		<div class="col-md-6">
				<h1 class="title">Directory</h1>
		</div>
	</div>		
</div><!-- /.container -->
<div class="clearfix spacer"></div>	
<div class="container-fluid directory-container">
	<div class="row" style="position:relative">
		<div class="nav-border">
		</div>
		<ul class="directory-nav">
			<li class="col-xs-3"><a href="<?php echo base_url('/press');?>"><div class="directory-nav-box <?php if($this->uri->slash_segment(2, 'leading')=="/"){echo "nav-active";}?>"><center><?php echo $yearnow;?></center></div></a></li>
			<li class="col-xs-9"><a href="<?php echo base_url('/press/others');?>"><div class="directory-nav-box <?php if($this->uri->slash_segment(2, 'leading')=="/others"){echo "nav-active";}?>"><center><?php echo $yearnow-1;?> to 2008</center></div></a></li>
		</ul>
	</div>
	<div class="clearfix" style="margin-top:30px;"></div>	