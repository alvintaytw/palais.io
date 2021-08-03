<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Event_model extends CI_Model {
	 public function __construct()
	 {
	  parent::__construct();
	  
	 }
	 
	 
	 public function get_event_by_year(){
		$this->load->database();
		$selector = "
		SELECT * FROM 
		" . _EIP_DB_OWNERNAME . "cms_specialcontent_news 
		WHERE 
		cmsscontnews_status = 'live'
		AND cmsscontnews_status != 'deleted'
		AND cmsscontnews_status != 'unused'
		ORDER BY cmsscontnews_date DESC, cmsscontnews_title";
	 	$query = $this->db->query($selector);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			
		}
	 }
	 
	
}
?>