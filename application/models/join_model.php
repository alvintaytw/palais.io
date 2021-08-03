<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Join_model extends CI_Model {
	 public function __construct()
	 {
	  parent::__construct();
           $this->load->database();
	 }
	 
	 
	 
	 
	  public function get_contry_code(){
		$selector = "
		select * from country order by nicename";
	 	$query = $this->db->query($selector);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			
		}
	 }
	 
	   public function get_contry(){
		$selector = "
		select * from country order by nicename";
	 	$query = $this->db->query($selector);
		if ($query->num_rows() > 0)
		{
			return $query->result();
			 
		}
	 }
	 
	 private function _get_check(){
		$checkbox_val = array(
			'Email' => '',
			'SMS' => '',
			'Calls' => '',
			'Mail' => '',
			'Palais' => '',
			'City' => '',
			'Quayside' => '',
			'Properties' => '',
		);
		foreach ($this->input->post('option-communicate') as $selected_communicate){
				if($selected_communicate == "Email")
				$checkbox_val['Email'] = "Email";
				if($selected_communicate == "SMS")
				$checkbox_val['SMS'] = "SMS";
				if($selected_communicate == "Calls")
				$checkbox_val['Calls'] = "Calls";
				if($selected_communicate == "Mail")
				$checkbox_val['Mail'] = "Mail";
		}
		
		foreach ($this->input->post('option-survey') as $selected_survey){
				if($selected_survey == "Palais Renaissance")
				$checkbox_val['Palais'] = "Palais Renaissance";
				if($selected_survey == "City Square Mall")
				$checkbox_val['City'] = "City Square Mall";
				if($selected_survey == "Quayside Isle")
				$checkbox_val['Quayside'] = "Quayside Isle";
				if($selected_survey == "CDL Properties")
				$checkbox_val['Properties'] = "CDL Properties";
		}
		
		return $checkbox_val;
	 }
	 
	  public function add_join_post()
	 {
		 
		$timeNow = date ("Y-m-d H:i:s");
		 
		$checkbox_val = $this->_get_check();
		 
		//$this->db->trans_start();
		$this->db->query("INSERT INTO " . _EIP_DB_OWNERNAME . "crm_consent_signups (crmmbr_id, crmmbr_site, crmmbr_createdDate, crmmbr_modifiedDate, crmmbr_syncDate, crmmbr_name, crmmbr_phone, crmmbr_mobile, crmmbr_overCountry, crmmbr_overArea, crmmbr_overPhone, crmmbr_email, crmmbr_street, crmmbr_postalCode, crmmbr_country, crmmbr_viaEmail, crmmbr_viaSMS, crmmbr_viaCalls, crmmbr_viaDirectmailer, crmmbr_palais, crmmbr_citySquare, crmmbr_quayside, crmmbr_properties) VALUES (null, '1', '" . $timeNow . "', '" . $timeNow . "', null, ".
				 $this->aes_encrypt_formatstringdb($this->input->post('j_name'), 240, true) . ", " .
				 $this->aes_encrypt_formatstringdb($this->input->post('j_telephone'), 8) . ", " .
				$this->aes_encrypt_formatstringdb($this->input->post('j_mobile'), 8) . ", " .
				 $this->aes_encrypt_formatstringdb($this->input->post('j_country_code'), 4) . ", " .
				 $this->aes_encrypt_formatstringdb($this->input->post('j_area_code'), 6) . ", " .
				 $this->aes_encrypt_formatstringdb($this->input->post('j_phone_no'), 20) . ", " .
				 $this->aes_encrypt_formatstringdb($this->input->post('j_email'), 240, true) . ", " .
				 $this->aes_encrypt_formatstringdb($this->input->post('j_street_address'), 240, true) . ", " .
				 $this->aes_encrypt_formatstringdb($this->input->post('j_postal_code'), 20, true) . ", " .
				 $this->aes_encrypt_formatstringdb($this->input->post('j_cor'), 240, true) . ", " .
				 "'" . ($checkbox_val['Email'] == 'Email' ? 'Y' : 'N') . "', " .
				 "'" . ($checkbox_val['SMS'] == 'SMS' ? 'Y' : 'N') . "', " .
				 "'" . ($checkbox_val['Calls'] == 'Calls' ? 'Y' : 'N') . "', " .
				 "'" . ($checkbox_val['Mail'] == 'Mail' ? 'Y' : 'N') . "', " .
				 "'" . ($checkbox_val['Palais']  == 'Palais Renaissance' ? 'Y' : 'N') . "', " .
				 "'" . ($checkbox_val['City']  == 'City Square Mall' ? 'Y' : 'N') . "', " .
				 "'" . ($checkbox_val['Quayside'] == 'Quayside Isle' ? 'Y' : 'N') . "', " .
				 "'" . ($checkbox_val['Properties'] == 'CDL Properties' ? 'Y' : 'N') ."')");
		
		$query = "INSERT INTO " . _EIP_DB_OWNERNAME . "crm_consent_log (crmmbrlog_id, crmmbrlog_direction, crmmbrlog_entry_created, crmmbrlog_synced, crmmbrlog_contact_type, crmmbrlog_contact_value, crmmbrlog_context_type, crmmbrlog_updated_date, crmmbrlog_updated_time, crmmbrlog_name, crmmbrlog_action, crmmbrlog_file_name, crmmbrlog_line_number, crmmbrlog_original) VALUES ";
		$count = 0;
		$datetime = time();
		if ($checkbox_val['Calls'] == 'Calls') {
			if (strlen($this->input->post('j_telephone')) > 0) {
				$query .= $this->format_consent_log($count, $this->input->post('j_telephone'), 8, 'CAL', $datetime, $this->input->post('j_name'));
			}
			if (strlen($this->input->post('j_mobile')) > 0) {
				$query .= $this->format_consent_log($count, $this->input->post('j_mobile'), 8, 'CAL', $datetime, $this->input->post('j_name'));
			}
			if (strlen($this->input->post('j_phone_no')) > 0) {
				$query .= $this->format_consent_log($count, $this->formatstringdb($this->input->post('j_country_code'), 4) . '|' . $this->formatstringdb($this->input->post('j_area_code'), 6) . '|' . $this->formatstringdb($this->input->post('j_phone_no'), 20), 32, 'CAL', $datetime, $this->input->post('j_name'));
			}
		}
		if ($checkbox_val['SMS'] == 'SMS') {
			if (strlen($this->input->post('j_mobile')) > 0) {
				$query .= $this->format_consent_log($count, $this->input->post('j_mobile'), 8, 'SMS', $datetime, $this->input->post('j_name'));
			}
		}
		if ($checkbox_val['Email'] == 'Email ') {
			if (strlen($this->input->post('j_email')) > 0) {
				$query .= $this->format_consent_log($count, $this->input->post('j_email'), 240, 'EML', $datetime, $this->input->post('j_name'));
			}
		}
		if ($checkbox_val['Mail'] == 'Mail') {
			if (strlen($this->input->post('j_street_address')) > 0) {
				$query .= $this->format_consent_log($count, $this->formatstringdb($this->input->post('j_street_address'), 240) . '|' . $this->formatstringdb($this->input->post('j_postal_code'), 20) . '|' . $this->formatstringdb($this->input->post('j_cor'), 240), 530, 'DML', $datetime, $this->input->post('j_name'));
			}
		}
		
		if ($count > 0) {
			$this->db->query($query);
		}
		//$this->db->trans_complete(); 
	 }
		
		
	public function aes_encrypt_formatstringdb($s, $max_length, $toupper = false) {
		return "AES_ENCRYPT('" . $this->formatstringdb($s, $max_length, $toupper) . "', '" . $this->config->item('_EIP_AES_KEY') . "')";
	}

	public  function formatstringdb($s, $max_length, $toupper = false) {
		$s1 = substr(trim($s), 0, $max_length);
		if ($toupper) {
			$s1 = strtoupper($s1);
		}
		return mysql_real_escape_string($s1);
	}
	
	public function format_consent_log(&$count, $s, $max_length, $contact_type, $datetime, $name) {
		$checkbox_val = $this->_get_check();
		
		$subquery = "";
		if ($checkbox_val['Palais']  == 'Palais Renaissance') {
			$subquery .= ($count++ > 0 ? ", " : "") . "(null, 'TO_CDL', NOW(), null, '" . $contact_type . "', " .
						$this->aes_encrypt_formatstringdb($s, $max_length, true) . ", 'PLS', '" . date('Ymd', $datetime) . "', '" . date('His', $datetime) . "', " .
						$this->aes_encrypt_formatstringdb($name, 240, true) . ", 'C', null, null, null)";
		}
		if ($checkbox_val['City'] == 'City Square Mall') {
			$subquery .= ($count++ > 0 ? ", " : "") . "(null, 'TO_CDL', NOW(), null, '" . $contact_type . "', " .
						$this->aes_encrypt_formatstringdb($s, $max_length, true) . ", 'CSM', '" . date('Ymd', $datetime) . "', '" . date('His', $datetime) . "', " .
						$this->aes_encrypt_formatstringdb($name, 240, true) . ", 'C', null, null, null)";
		}
		if ($checkbox_val['Quayside'] == 'Quayside Isle') {
			$subquery .= ($count++ > 0 ? ", " : "") . "(null, 'TO_CDL', NOW(), null, '" . $contact_type . "', " .
						$this->aes_encrypt_formatstringdb($s, $max_length, true) . ", 'QSI', '" . date('Ymd', $datetime) . "', '" . date('His', $datetime) . "', " .
						$this->aes_encrypt_formatstringdb($name, 240, true) . ", 'C', null, null, null)";
		}
		if ($checkbox_val['Properties'] == 'CDL Properties') {
			$subquery .= ($count++ > 0 ? ", " : "") . "(null, 'TO_CDL', NOW(), null, '" . $contact_type . "', " .
						$this->aes_encrypt_formatstringdb($s, $max_length, true) . ", 'PLH', '" . date('Ymd', $datetime) . "', '" . date('His', $datetime) . "', " .
						$this->aes_encrypt_formatstringdb($name, 240, true) . ", 'C', null, null, null)";
		}
		
		return $subquery;
	}
	
}
?>