<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Promotion_model extends CI_Model {
	 public function __construct()
	 {
	  parent::__construct();
	  
	 }
	 
	 
	 public function get_promotion(){
		$this->load->database();
		$selector = "
		SELECT * 
		FROM " . _EIP_DB_OWNERNAME . "cms_specialcontent_promotions
		WHERE
		(
			((cmsscontpro_displayfrom = 0) AND (cmsscontpro_displayto = 0)) OR 
			((cmsscontpro_displayfrom = 0) AND (cmsscontpro_displayto > 0) AND (" . time() . " <= cmsscontpro_displayto)) OR 
			((cmsscontpro_displayfrom > 0) AND (cmsscontpro_displayto = 0) AND (" . time() . " >= cmsscontpro_displayfrom)) OR
			((cmsscontpro_displayfrom > 0) AND (cmsscontpro_displayto > 0) AND (cmsscontpro_displayfrom <= " . time() . ") AND (cmsscontpro_displayto >= " . time() . "))
			)
		AND cmsscontpro_status = 'live'
		AND cmsscontpro_status != 'deleted' 
		AND cmsscontpro_status != 'unused'
		";
	 	$query = $this->db->query($selector);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			
		}
	 }
	 
	  public function get_promotion_by_id($promo_id){
		$this->load->database();
		$selector = "
		SELECT * 
		FROM " . _EIP_DB_OWNERNAME . "cms_specialcontent_promotions
		WHERE
		(
			((cmsscontpro_displayfrom = 0) AND (cmsscontpro_displayto = 0)) OR 
			((cmsscontpro_displayfrom = 0) AND (cmsscontpro_displayto > 0) AND (" . time() . " <= cmsscontpro_displayto)) OR 
			((cmsscontpro_displayfrom > 0) AND (cmsscontpro_displayto = 0) AND (" . time() . " >= cmsscontpro_displayfrom)) OR
			((cmsscontpro_displayfrom > 0) AND (cmsscontpro_displayto > 0) AND (cmsscontpro_displayfrom <= " . time() . ") AND (cmsscontpro_displayto >= " . time() . "))
			)
		AND cmsscontpro_status = 'live'
		AND cmsscontpro_status != 'deleted' 
		AND cmsscontpro_status != 'unused'
		AND cmsscontpro_id = ".$promo_id."
		";
	 	$query = $this->db->query($selector);
		if ($query->num_rows() == 1)
		{
			return $query->result();
			
		}
	 }
	 
	
}
?>