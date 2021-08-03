<div class="row">
	<div class="col-md-6">
		<div class="tenant-wrapper">
			<div class="row">
				<div class="col-xs-6 directory-image-wrapper"><a href="<?php 
				if(isset($tenant_detail[0]['category_url']))
				echo  base_url($tenant_detail[0]['category_url']).'/tenant/'.$tenant_detail[0]['cmsdir_id']; 
				else
				echo base_url($this->uri->slash_segment(1, 'leading')).'/tenant/'.$tenant_detail[0]['cmsdir_id']; 
				?>"><div class="directory-image-frame"><img src="<?php echo $tenant_detail[0]['cmsdir_logo']; ?>" border="0" alt=""/></div></a></div>
				<div class="col-xs-6 directory_content">
					<p class="font-15"><a class="tenant-title" href="<?php 
				if(isset($tenant_detail[0]['category_url']))
				echo  base_url($tenant_detail[0]['category_url']).'/tenant/'.$tenant_detail[0]['cmsdir_id']; 
				else
				echo base_url($this->uri->slash_segment(1, 'leading')).'/tenant/'.$tenant_detail[0]['cmsdir_id']; 
				?>"><?php echo $tenant_detail[0]['cmsdir_name']; ?></a></p>
					<p class="font-12"><?php if($tenant_detail[0]['cmsdir_unit']!=NULL)echo $tenant_detail[0]['cmsdir_unit']; ?></p>
					<p class="font-11">
					<?php 
					if($tenant_detail[0]['cmsdir_tel1']!=NULL)
						echo 'Tel: '.$tenant_detail[0]['cmsdir_tel1'].'<br>'; 
					else if($tenant_detail[0]['cmsdir_tel1']!=NULL&&$$tenant_detail[0]['cmsdir_tel2']!=NULL)
						echo 'Tel: '.$tenant_detail[0]['cmsdir_tel1'].' | '.$tenant_detail[0]['cmsdir_tel2'].'<br>'; 
					?>
					<?php if($tenant_detail[0]['cmsdir_fax']!=NULL)echo 'Fax: '.$tenant_detail[0]['cmsdir_fax'].'<br>'; ?>
					<?php if($tenant_detail[0]['cmsdir_web']!=NULL)echo '<pre><a href="'. prep_url($tenant_detail[0]['cmsdir_web']).'" target="_blank" title="'.$tenant_detail[0]['cmsdir_web'].'">'.$tenant_detail[0]['cmsdir_web'].'</a></pre>'; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="clearfix spacer"></div>
	</div>
	<?php if(isset($tenant_detail[1])): ?>
	<div class="col-md-6">
		<div class="tenant-wrapper">
			<div class="row">
				<div class="col-xs-6"><a href="<?php 
				if(isset($tenant_detail[1]['category_url']))
				echo  base_url($tenant_detail[1]['category_url']).'/tenant/'.$tenant_detail[1]['cmsdir_id']; 
				else
				echo base_url($this->uri->slash_segment(1, 'leading')).'/tenant/'.$tenant_detail[1]['cmsdir_id']; 
				?>"><div class="directory-image-frame"><img src="<?php echo $tenant_detail[1]['cmsdir_logo']; ?>" border="0" alt=""/></div></a></div>
				<div class="col-xs-6 directory_content">
					<p class="font-15"><a class="tenant-title" href="<?php 
					if(isset($tenant_detail[1]['category_url']))
					echo  base_url($tenant_detail[1]['category_url']).'/tenant/'.$tenant_detail[1]['cmsdir_id']; 
					else
					echo base_url($this->uri->slash_segment(1, 'leading')).'/tenant/'.$tenant_detail[1]['cmsdir_id']; 
					?>"><?php echo $tenant_detail[1]['cmsdir_name']; ?></a></p>
					<p class="font-12"><?php if($tenant_detail[1]['cmsdir_unit']!=NULL)echo $tenant_detail[1]['cmsdir_unit']; ?></p>
					<p class="font-11">
					<?php 
					if($tenant_detail[1]['cmsdir_tel1']!=NULL)
						echo 'Tel: '.$tenant_detail[1]['cmsdir_tel1'].'<br>'; 
					else if($tenant_detail[1]['cmsdir_tel1']!=NULL&&$$tenant_detail[1]['cmsdir_tel2']!=NULL)
						echo 'Tel: '.$tenant_detail[1]['cmsdir_tel1'].' | '.$tenant_detail[1]['cmsdir_tel2'].'<br>'; 
					?>
					<?php if($tenant_detail[1]['cmsdir_fax']!=NULL)echo 'Fax: '.$tenant_detail[1]['cmsdir_fax'].'<br>'; ?>
					<?php if($tenant_detail[1]['cmsdir_web']!=NULL)echo '<pre><a href="'. prep_url($tenant_detail[1]['cmsdir_web']).'" target="_blank" title="'.$tenant_detail[1]['cmsdir_web'].'">'.$tenant_detail[1]['cmsdir_web'].'</a></pre>'; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="clearfix spacer"></div>
	</div>
	<?php endif; ?>
</div>