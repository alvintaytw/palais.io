<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact_model extends CI_Model {
	 public function __construct()
	 {
	  parent::__construct();
           $this->load->database();
	  
	 }
	 
	 
	 public function get_feedback_option(){
		$selector = "
		select * from " . _EIP_DB_OWNERNAME . "crm_feedback_configuration order by crmfeedbackconfig_sequence";
	 	$query = $this->db->query($selector);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			
		}
	 }
	 
	  public function get_all_admin(){
		  
		 $seletor_mail = "SELECT crmfeedbackconfig_emailto FROM " . _EIP_DB_OWNERNAME . "crm_feedback_configuration " .
				"WHERE crmfeedbackconfig_site = " . _EIP_SITE_ID . " " .
				"AND crmfeedbackconfig_id = " . intval($this->input->post('c_type'));
		$query_mail = $this->db->query($seletor_mail);
		$sendto = array();
		if ($query_mail->num_rows() > 0)
		{
		   foreach ($query_mail->result() as $row)
		   {
			 
			$sendto = explode("|",  $row->crmfeedbackconfig_emailto);
		   }
		}
		$selector = "
		SELECT admusr_email FROM " . _EIP_DB_OWNERNAME . "admin_user " .
				"WHERE admusr_id IN (" . implode(",", $sendto) . ")";
	 	$query = $this->db->query($selector);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			
		}
	 }
	 
	 
	 
	 public function add_post()
	 {
		$this->db->trans_start();
		$this->db->query("INSERT INTO " . _EIP_DB_OWNERNAME . "crm_feedback (crmfeedback_site, crmfeedback_type, crmfeedback_name, crmfeedback_email, crmfeedback_subject, crmfeedback_status, crmfeedback_initialdatetime, crmfeedback_lastresponddatetime, crmfeedback_lastrespondfrom, crmfeedback_authcode) VALUES ('1', " .
				 "'" . intval($this->input->post('c_type')) . 
				 "', '" . $this->input->post('c_name') .
				 "', '" . $this->input->post('c_email') . 
				 "', '" . $this->input->post('c_subject'). 
				 "', 'open'" .
				 ", '". time() ."' " .
				 ", '". time() ."' " .
				 ", '0' " .
				 ", '". $this->getUniqueCode() ."')");
		$c_id = $this->db->insert_id();
		
		$this->db->query("INSERT INTO " . _EIP_DB_OWNERNAME . "crm_feedback_message (crmfeedbackmsg_site, crmfeedbackmsg_feedback, crmfeedbackmsg_from, crmfeedbackmsg_datetime, crmfeedbackmsg_message, crmfeedbackmsg_ipaddress, crmfeedbackmsg_useragent) VALUES ('1', " .
				 "'" . $c_id . "', ".
				 "'0', ".
				 "'". time() ."', " .
				 "'". $this->input->post('c_comment') ."', ".
				 "'". $_SERVER['REMOTE_ADDR'] ."', ".
				 "'". $_SERVER['HTTP_USER_AGENT'] ."')");
		$this->db->trans_complete(); 
	 }
	 
	
	 
	 public function getUniqueCode() {
			$code  = md5(uniqid(mt_rand(), true));
			$code .= md5(uniqid(mt_rand(), true));
			return $code;
		}
		
	
}
?>