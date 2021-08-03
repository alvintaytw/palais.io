<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Replythread_model extends CI_Model {
	 public function __construct()
	 {
	  	parent::__construct();
           $this->load->database();
	  
	 }
	 
	  public function get_feedback($authcode)
	  {
		$selector = "SELECT * FROM " . _EIP_DB_OWNERNAME . "crm_feedback " .
			"WHERE crmfeedback_authcode = '" . stringtodb($authcode) . "' " .
			"AND crmfeedback_site = " . _EIP_SITE_ID . "";
	 	$query = $this->db->query($selector);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			
		}
	 }
	 
	 public function get_feeback_message($feedbackid)
	 {
		 	$selector = 	"SELECT * FROM " . _EIP_DB_OWNERNAME . "crm_feedback_message " .
			"WHERE crmfeedbackmsg_site = 1 " .
			"AND crmfeedbackmsg_feedback = " . $feedbackid . " " .
			"AND crmfeedbackmsg_value = 0 " .
			"ORDER BY crmfeedbackmsg_datetime ASC";
			$query = $this->db->query($selector);
			if ($query->num_rows() > 0)
			{
				return $query->result();
				
			}
	 }
	 
	  public function add_feedback_message($feedbackid,$senderComments)
	 {
		 $respondtime = time();
		$this->db->query("INSERT INTO " . _EIP_DB_OWNERNAME . "crm_feedback_message " .
				 "(crmfeedbackmsg_site, crmfeedbackmsg_feedback, crmfeedbackmsg_from, crmfeedbackmsg_datetime, crmfeedbackmsg_message, crmfeedbackmsg_ipaddress, crmfeedbackmsg_useragent) " .
				 "VALUES (" . _EIP_SITE_ID . ", " . $feedbackid . ", 0, " . $respondtime . ", " .
				 "'" . stringtodb(str_replace("\n", "<BR>", $senderComments), 5000) . "', " .
				 "'" . stringtodb($_SERVER['REMOTE_ADDR'], 30) . "', ". 
				 "'" . stringtodb($_SERVER['HTTP_USER_AGENT'], 200) . "')");
		
		
	 }
	 
	 public  function update_feedback($feedbackid)
	 {
		 $respondtime = time();
	 	$this->db->query("UPDATE " . _EIP_DB_OWNERNAME . "crm_feedback " .
				"SET crmfeedback_status = 'open', " . 
					"crmfeedback_lastresponddatetime = " . $respondtime . ", " . 
					"crmfeedback_lastrespondfrom = 0 " .
				"WHERE crmfeedback_site = " . _EIP_SITE_ID . " " .
					"AND crmfeedback_id = " . $feedbackid);
	 }
	 
	 public function get_mailto($feedbacktype)
	 {
	 	 $seletor_mail = "SELECT crmfeedbackconfig_emailto FROM " . _EIP_DB_OWNERNAME . "crm_feedback_configuration " .
				"WHERE crmfeedbackconfig_site = " . _EIP_SITE_ID . " " .
				"AND crmfeedbackconfig_id = " . $feedbacktype;
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
	 	
}
?>