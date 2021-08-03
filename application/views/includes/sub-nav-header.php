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
						<li class="col-xs-3"><a href="<?php echo base_url('/beauty');?>"><div class="directory-nav-box <?php if($this->uri->slash_segment(1, 'leading')=="/beauty"){echo "nav-active";}?>"><center>Beauty</center></div></a></li>
						<li class="col-xs-3"><a href="<?php echo base_url('/fashion');?>"><div class="directory-nav-box <?php if($this->uri->slash_segment(1, 'leading')=="/fashion"){echo "nav-active";}?>"><center>Fashion</center></div></a></li>
						<li class="col-xs-3"><a href="<?php echo base_url('/food');?>"><div class="directory-nav-box <?php if($this->uri->slash_segment(1, 'leading')=="/food"){echo "nav-active";}?>"><center>Food & Beverage</center></div></a></li>
						<li class="col-xs-3"><a href="<?php echo base_url('/living');?>"><div class="directory-nav-box <?php if($this->uri->slash_segment(1, 'leading')=="/living"){echo "nav-active";}?>"><center>Home & Living</center></div></a></li>
					</ul>
				</div>
				<div class="clearfix sub-header-spacer"></div>	