<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tenant_model extends CI_Model {
	 public function __construct()
	 {
	  parent::__construct();
	  
	 }
	 
	  public function get_tenant_by_name($c_name){
		$this->load->database();
		$selector = "
		select * 
		from 
		" . _EIP_DB_OWNERNAME . "cms_directory
		where 
		" . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_status = 'live' 
		and 
		" . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_name LIKE '%".$c_name."%'
		order by 
		cmsdir_name asc";
	 	$query = $this->db->query($selector);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			
		}
	 }
	 
	 public function get_single_tenant($t_id){
		$this->load->database();
		$selector = "
		select * 
		from 
		" . _EIP_DB_OWNERNAME . "cms_directory, " . _EIP_DB_OWNERNAME . "cms_directory_category 
		where 
		" . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_status = 'live' 
		and 
		" . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_id = ".$t_id." 
		and 
		" . _EIP_DB_OWNERNAME . "cms_directory_category.cmsdircat_id = " . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_category 
		order by 
		cmsdir_name";
	 	$query = $this->db->query($selector, $t_id);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			
		}
	 }
	 
	 public function get_single_tenant_gallery($t_id){
		$this->load->database();
		$selector = "
		select * 
		from 
		" . _EIP_DB_OWNERNAME . "cms_directory_photo, " . _EIP_DB_OWNERNAME . "cms_directory 
		where 
		" . _EIP_DB_OWNERNAME . "cms_directory_photo.cmsdirphoto_status = 'live' 
		and 
		" . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_id = ".$t_id." 
		and 
		" . _EIP_DB_OWNERNAME . "cms_directory_photo.cmsdirphoto_tenant = " . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_id 
		order by 
		cmsdirphoto_sequence ASC";
	 	$query = $this->db->query($selector, $t_id);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			
		}
	 }
	 
	 public function get_all_tenant(){
		$this->load->database();
		$val_code = "
		select * 
		from 
		" . _EIP_DB_OWNERNAME . "cms_directory, " . _EIP_DB_OWNERNAME . "cms_directory_category 
		where 
		" . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_status = 'live' 
		and 
		" . _EIP_DB_OWNERNAME . "cms_directory_category.cmsdircat_id = " . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_category 
		order by 
		cmsdir_name asc";
		
		$query = $this->db->query($val_code);
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
	 }
	 
	  public function get_tenant_category($c_id){
		$this->load->database();
		$selector = "
		select * 
		from 
		" . _EIP_DB_OWNERNAME . "cms_directory_category 
		where 
		" . _EIP_DB_OWNERNAME . "cms_directory_category.cmsdircat_id = ".$c_id;
	 	$query = $this->db->query($selector);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			
		}
	 }
	 
	  public function get_all_tenant_by_category($t_category){
		$this->load->database();
		$val_code = "
		select * 
		from 
		" . _EIP_DB_OWNERNAME . "cms_directory, " . _EIP_DB_OWNERNAME . "cms_directory_category 
		where 
		" . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_category = ".$t_category." 
		and 
		" . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_status = 'live' 
		and 
		" . _EIP_DB_OWNERNAME . "cms_directory_category.cmsdircat_id = " . _EIP_DB_OWNERNAME . "cms_directory.cmsdir_category 
		order by 
		cmsdir_name asc";
		
		$query = $this->db->query($val_code);
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
	 }
	
}
?>