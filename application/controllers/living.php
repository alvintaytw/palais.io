<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Living extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tenant_model');
	}
	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('includes/sub-nav-header');
		$this->_category_tenant(1);
		$this->load->view('includes/sub-nav-footer');
		$this->load->view('includes/footer');
	}
	
	public function tenant($str)
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->_tenant_detail($str);
		$this->load->view('includes/footer');
	}
	
	public function _category_tenant($t_category)
	{
		$query_tenant = $this->tenant_model->get_all_tenant_by_category($t_category);
		$path = _EIP_UPLOAD_HREF_TENANTS_LOGO_SMALL."/";
		if($query_tenant != NULL)
		{	
			$count = 0;	
			foreach ($query_tenant as $row)
			{		
				$tenant_detail[$count]['cmsdir_id'] = $row->cmsdir_id;
				$tenant_detail[$count]['cmsdir_name'] = $row->cmsdir_name;
				$tenant_detail[$count]['cmsdir_unit'] = $row->cmsdir_unit;
				$tenant_detail[$count]['cmsdir_tel1'] = $row->cmsdir_tel1;
				$tenant_detail[$count]['cmsdir_tel2'] = $row->cmsdir_tel2;
				$tenant_detail[$count]['cmsdir_fax'] = $row->cmsdir_fax;
				$tenant_detail[$count]['cmsdir_web'] = $row->cmsdir_web;
				$logo = explode("|" , $row->cmsdir_logo);
				$tenant_detail[$count]['cmsdir_logo'] = $path.$logo[0];
				
				if($count>=1)
				{
					$data['tenant_detail'] = $tenant_detail;
					$this->load->view('blocks/directory',$data);
					$count = 0;
					 $tenant_detail= null;
				}
				else
					$count++;
				
			}
			if($count==1){
				$data['tenant_detail'] = $tenant_detail;
				$this->load->view('blocks/directory',$data);
			}
		}
	}
	
	public function _tenant_detail($t_id)
	{
		$query_tenant = $this->tenant_model->get_single_tenant($t_id);
		$query_tenant_gallery = $this->tenant_model->get_single_tenant_gallery($t_id);
		$logo_path = _EIP_UPLOAD_HREF_TENANTS_LOGO.'/';
		$gallery_path = _EIP_UPLOAD_HREF_TENANTS_GALLERY.'/';
		if($query_tenant != NULL)
		{	
			foreach ($query_tenant as $row)
			{		
				$tenant_detail['cmsdir_id'] = $row->cmsdir_id;
				$tenant_detail['cmsdir_name'] = $row->cmsdir_name;
				$tenant_detail['cmsdir_unit'] = $row->cmsdir_unit;
				$tenant_detail['cmsdir_tel1'] = $row->cmsdir_tel1;
				$tenant_detail['cmsdir_tel2'] = $row->cmsdir_tel2;
				$tenant_detail['cmsdir_fax'] = $row->cmsdir_fax;
				$tenant_detail['cmsdir_web'] = $row->cmsdir_web;
				$tenant_detail['cmsdir_email'] = $row->cmsdir_email;
				$tenant_detail['cmsdir_openinghours'] = stripslashes(utf8_decode($this->stripslashes_deep($row->cmsdir_openinghours)));
				$tenant_detail['cmsdir_description'] = stripslashes(utf8_decode($this->stripslashes_deep($row->cmsdir_description)));
				$tenant_detail['cmsdircat_name'] = $row->cmsdircat_name;
				$logo = explode("|" , $row->cmsdir_logo);
				$tenant_detail['cmsdir_logo'] = $logo_path.$logo[0];
			}			
				$data['tenant_detail'] = $tenant_detail;
		
		
			$this->load->view('blocks/tenant_1',$data);
			
			$count = 0;	
			if($query_tenant_gallery != NULL){
				foreach ($query_tenant_gallery as $row)
				{		
					$cmsdirphoto_image = explode("|" , $row->cmsdirphoto_image);
					$tenant_detail_gallery[$count]['cmsdirphoto_image'] = $gallery_path.$cmsdirphoto_image[0];
					
					$tenant_detail_gallery[$count]['cmsdirphoto_description'] = stripslashes(utf8_decode($this->stripslashes_deep($row->cmsdir_description)));
					
					$cmsdirphoto_thumbnail = explode("|" , $row->cmsdirphoto_thumbnail);
					$tenant_detail_gallery[$count]['cmsdirphoto_thumbnail'] = $gallery_path.$cmsdirphoto_thumbnail[0];
					
					if($count>=1)
					{
						$data['tenant_detail_gallery'] = $tenant_detail_gallery;
						$data['isdesktop'] = false;
						$this->load->view('blocks/tenant_gallery',$data);
						$count = 0;
						 $tenant_detail_gallery = null;
					}
					else
						$count++;
					
				}
				if($count==1){
					$data['tenant_detail_gallery'] = $tenant_detail_gallery;
					$data['isdesktop'] = false;
					$this->load->view('blocks/tenant_gallery',$data);
				}
			}
			
			$this->load->view('blocks/tenant_2',$data);
			$count = 0;	
			if($query_tenant_gallery != NULL){
				foreach ($query_tenant_gallery as $row)
				{		
					$cmsdirphoto_image = explode("|" , $row->cmsdirphoto_image);
					$tenant_detail_gallery[$count]['cmsdirphoto_image'] = $gallery_path.$cmsdirphoto_image[0];
					
					$tenant_detail_gallery[$count]['cmsdirphoto_description'] = stripslashes(utf8_decode($this->stripslashes_deep($row->cmsdir_description)));
					
					$cmsdirphoto_thumbnail = explode("|" , $row->cmsdirphoto_thumbnail);
					$tenant_detail_gallery[$count]['cmsdirphoto_thumbnail'] = $gallery_path.$cmsdirphoto_thumbnail[0];

					
					if($count>=3)
					{
						$data['tenant_detail_gallery'] = $tenant_detail_gallery;
						$data['isdesktop'] = true;
						$this->load->view('blocks/tenant_gallery',$data);
						$count = 0;
						 $tenant_detail_gallery = null;
					}
					else
						$count++;
					
				}
				if($count>1){
					$data['tenant_detail_gallery'] = $tenant_detail_gallery;
					$data['isdesktop'] = true;
					$this->load->view('blocks/tenant_gallery',$data);
				}
			}
			
			$this->load->view('blocks/tenant_3',$data);
		}
		
	}
	public function stripslashes_deep($value)
	{
	    $value = is_array($value) ?
				 array_map('stripslashes_deep', $value) :
				 stripslashes($value);
	
	    return $value;
	}
}

/* End of file living.php */
/* Location: ./application/controllers/living.php */