
<div class="main-content main-background-blue">
	
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-6 home-big">
				<img class="home-promo-img" src="<?php echo base_url("assets"); ?>/images/home-img-01-with-text.png" border="0" alt=""/>
			</div>
		</div>
	</div>
	  <div class="container-fluid directory-container">
		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6">
			<div class="clearfix spacer"></div>
			<div class="row">
			<div class="image_grid portfolio_4col">
			    <ul id="list" class="portfolio_list da-thumbs">
			    	  <li class="col-md-6 clear-right-padding promo-thumb">
					  <img src="<?php echo $home_promo[0]['img'];?>" alt="img" width="100%" >
					 <a href="<?php echo $home_promo[0]['link'];?>">
					  <article class="da-animate da-slideFromRight" style="display: block;">
					  	<div class="thumb-cover">
						<div class="thumb-title"><em><?php echo $home_promo[0]['title'];?></em></div>
						<div class="thumb-no"><?php echo $home_promo[0]['unit'];?></div>
						<div class="thumb-desc"><?php echo $home_promo[0]['desc'];?></div>
						</div>
					  </article>
					  </a>
				   </li>
				   <li class="col-md-6 clear-right-padding promo-thumb">
					 <a href="<?php echo base_url("getting"); ?>" title="Getting Here"><img id="thumb-height" src="<?php echo base_url("assets"); ?>/images/home-product-02.png" border="0" alt="" width="100%" /></a>
					   <article class="da-animate da-slideFromTop" style="display: block;">
						 <a href="<?php echo base_url("getting"); ?>" title="Getting Here" >
						 <img src="<?php echo base_url("assets"); ?>/images/location-map.jpg" border="0" alt="" width="100%" />
						 </a>
					  </article>
				   </li>
				    <li class="col-md-6 clear-right-padding promo-thumb">
					  <img src="<?php echo $home_promo[1]['img'];?>" alt="img" width="100%" >
					  <a href="<?php echo $home_promo[1]['link'];?>">
					  <article class="da-animate da-slideFromTop" style="display: block;">
						<div class="thumb-cover">
						<div class="thumb-title"><em><?php echo $home_promo[1]['title'];?></em></div>
						<div class="thumb-no"><?php echo $home_promo[1]['unit'];?></div>
						<div class="thumb-desc"><?php echo $home_promo[1]['desc'];?></div>
						</div>
					  </article>
					  </a>
				   </li>
				    <li class="col-md-6 clear-right-padding promo-thumb">
					  <img src="<?php echo $home_promo[2]['img'];?>" alt="img" width="100%" >
					  <a href="<?php echo $home_promo[2]['link'];?>">
					  <article class="da-animate da-slideFromTop" style="display: block;">
					  <div class="thumb-cover">
						<div class="thumb-title"><em><?php echo $home_promo[2]['title'];?></em></div>
						<div class="thumb-no"><?php echo $home_promo[2]['unit'];?></div>
						<div class="thumb-desc"><?php echo $home_promo[2]['desc'];?></div>
						</div>
					  </article>
					  </a>
				   </li>
				    <li class="col-md-6 clear-right-padding promo-thumb">
					  <img src="<?php echo $home_promo[3]['img'];?>" alt="img" width="100%" >
					  <a href="<?php echo $home_promo[3]['link'];?>">
					  <article class="da-animate da-slideFromTop" style="display: block;">
						<div class="thumb-cover">
						<div class="thumb-title"><em><?php echo $home_promo[3]['title'];?></em></div>
						<div class="thumb-no"><?php echo $home_promo[3]['unit'];?></div>
						<div class="thumb-desc"><?php echo $home_promo[3]['desc'];?></div>
						</div>
					  </article>
					  </a>
				   </li>
				     <li class="col-md-6 clear-right-padding promo-thumb">
						<div class="location-wrapper">
							<div class="font-15 uppercase"><em>LOCATE </em></div>
							<br>
							 <?php 
							 $attributes = array('class' => 'location-form', 'role' => 'search', 'name' => 'location-form', 'id'=> 'location');
							 echo form_open('welcome/search',$attributes); ?>
							   <div style="width:90%; display:inline-block"><input type="text" class="location-field" name="location-field" id="location-field" /></div><span class="search-icon" id="search-icon-button"></span>
						   <div class="font-9"> <em>(Enter name of store to locate or text to search our website.)</em></div>
						    <br>
							<button type="submit" class="location-submit">FULL STORE DIRECTORY</button>
						    <?php echo form_close(); ?>
						</div>
					</li>
			    </ul>
			    </div>
			  </div>
			<!--	<div class="clearfix spacer"></div>
				<div class="row">
					<div class="col-md-6 clear-right-padding promo-thumb">
						<a id="thumb-link-01" href="<?php echo $home_promo[0]['link'];?>"><img src="<?php echo $home_promo[0]['img'];?>" border="0" alt="" width="100%" />
						<div id="thumb-content-01" class="thumb-wrapper">
							<div class="thumb-title"><em><?php echo $home_promo[0]['title'];?></em></div>
							<div class="thumb-no"><?php echo $home_promo[0]['unit'];?></div>
							<div class="thumb-desc"><?php echo $home_promo[0]['desc'];?></div>
						</div>
						</a>
					</div>
					<div class="col-md-6 clear-right-padding promo-thumb">
					<a href="<?php echo base_url("getting"); ?>"><img src="<?php echo base_url("assets"); ?>/images/home-product-02.png" border="0" alt="" width="100%" /></a>
					</div>
				</div>
				<div class="clearfix spacer"></div>							
				<div class="row">
					<div class="col-md-6 clear-right-padding promo-thumb">
						<a id="thumb-link-03" href="<?php echo $home_promo[1]['link'];?>"><img src="<?php echo $home_promo[1]['img'];?>" border="0" alt="" width="100%" />
						<div id="thumb-content-03" class="thumb-wrapper">
							<div class="thumb-title"><em><?php echo $home_promo[1]['title'];?></em></div>
							<div class="thumb-no"><?php echo $home_promo[1]['unit'];?></div>
							<div class="thumb-desc"><?php echo $home_promo[1]['desc'];?></div>
						</div>
						</a>
					</div>
					<div class="col-md-6 clear-right-padding promo-thumb">
						<a id="thumb-link-04" href="<?php echo $home_promo[2]['link'];?>"><img src="<?php echo $home_promo[2]['img'];?>" border="0" alt="" width="100%" />
						<div id="thumb-content-04" class="thumb-wrapper">
							<div class="thumb-title"><em><?php echo $home_promo[2]['title'];?></em></div>
							<div class="thumb-no"><?php echo $home_promo[2]['unit'];?></div>
							<div class="thumb-desc"><?php echo $home_promo[2]['desc'];?></div>
						</div>
						</a>
					</div>
				</div>
				<div class="clearfix spacer"></div>
				<div class="row">
					<div class="col-md-6 clear-right-padding promo-thumb">
						<a id="thumb-link-05" href="<?php echo $home_promo[3]['link'];?>"><img src="<?php echo $home_promo[3]['img'];?>" border="0" alt="" width="100%" />
						<div id="thumb-content-05" class="thumb-wrapper">
							<div class="thumb-title"><em><?php echo $home_promo[3]['title'];?></em></div>
							<div class="thumb-no"><?php echo $home_promo[3]['unit'];?></div>
							<div class="thumb-desc"><?php echo $home_promo[3]['desc'];?></div>
						</div>
						</a>
					</div>
					<div class="col-md-6 clear-right-padding promo-thumb">
					<div style="position:relative">
						<div class="location-wrapper">
						
							<div class="font-15"><em>Location </em></div>
							<br>
							 <form class="location-form" role="search" action="<?php echo base_url("beauty"); ?>">
							   <div style="width:140px; display:inline-block"><input type="text" class="location-field" /></div><span class="search-icon"></span>
						   <div style="font-size:9px; line-height:9px;"> <em>(Enter name of store to locate or text to search our website.)</em></div>
						    <br>
							<button type="submit" class="location-submit">FULL STORE DIRECTORY</button>
						    </form>
						</div>
						<img src="<?php echo base_url("assets"); ?>/images/home-product-06.png" border="0" alt="" width="100%" style="position:absolute;" />
						
					</div>
					</div>
				</div>
				<div class="clearfix  spacer"></div>-->
			</div>
		</div>

    </div>
</div>
<div class="mobile" style="display:none">
	<div class="promotion">
		<h2 class="newstitle"><center>What's New</center></h2>
		<div class="swiper-container">
			<div class="swiper-wrapper" >
				<div class="swiper-slide" style="width:250px;">
					<a id="thumb-link-01" href="<?php echo $home_promo[0]['link'];?>"><img src="<?php echo $home_promo[0]['img'];?>" border="0" alt="" width="100%" /></a>
					<div class="thumb-text-wrapper">
						<div class="thumb-title"><em><?php echo $home_promo[0]['title'];?></em></div>
						<div class="thumb-no"><?php echo $home_promo[0]['unit'];?></div>
						<div class="thumb-desc"><?php echo $home_promo[0]['desc'];?></div>
					</div>
				</div>
				<div class="swiper-slide" style="width:250px;">
					<a id="thumb-link-01" href="<?php echo $home_promo[1]['link'];?>"><img src="<?php echo $home_promo[1]['img'];?>" border="0" alt="" width="100%" /></a>
					<div class="thumb-text-wrapper">
						<div class="thumb-title"><em><?php echo $home_promo[1]['title'];?></em></div>
						<div class="thumb-no"><?php echo $home_promo[1]['unit'];?></div>
						<div class="thumb-desc"><?php echo $home_promo[1]['desc'];?></div>
					</div>
				</div>
				<div class="swiper-slide" style="width:250px;">
					<a id="thumb-link-01" href="<?php echo $home_promo[2]['link'];?>"><img src="<?php echo $home_promo[2]['img'];?>" border="0" alt="" width="100%" /></a>
					<div class="thumb-text-wrapper">
						<div class="thumb-title"><em><?php echo $home_promo[2]['title'];?> </em></div>
						<div class="thumb-no"><?php echo $home_promo[2]['unit'];?> </div>
						<div class="thumb-desc"><?php echo $home_promo[2]['desc'];?> </div>
					</div>
				</div>
				<div class="swiper-slide" style="width:250px;">
					<a id="thumb-link-01" href="<?php echo $home_promo[3]['link'];?> "><img src="<?php echo $home_promo[3]['img'];?>" border="0" alt="" width="100%" /></a>
					<div class="thumb-text-wrapper">
						<div class="thumb-title"><em><?php echo $home_promo[3]['title'];?></em></div>
						<div class="thumb-no"><?php echo $home_promo[3]['unit'];?></div>
						<div class="thumb-desc"><?php echo $home_promo[3]['desc'];?></div>
					</div>
				</div>
			</div>
		</div>
		<center><div class="pagination"></div></center>
	</div>
	<div class="search">
		<div class="location-wrapper">
			<div class="location-title"><em>Locate </em></div>
			<br>
			  <?php 
			$attributes = array('class' => 'location-form', 'role' => 'search', 'name' => 'location-form', 'id'=> 'location');
			 echo form_open('welcome/search',$attributes); ?>
			   <div style="width:95%; display:inline-block"><input type="text" class="location-field" name="location-field" id="location-field" /></div><span class="search-icon"  id="search-icon-button"></span>
		   <div style="font-size:80%; line-height:90%; margin-top:5px;"> <em>(Enter name of store to locate or text to search our website.)</em></div>
		    <br>
			<center><button type="submit" class="location-submit">FULL STORE DIRECTORY</button></center>
		    <?php echo form_close(); ?>
		</div>
	</div>
</div>