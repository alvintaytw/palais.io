<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Form_validation_model extends CI_Model {
	 public function __construct()
	 {
	  parent::__construct();
	   	$this->load->library('form_validation');
	  
	 }
	 public function validate_contact(){
		$this->load->library('validation');
		$this->load->helper('recaptcha_helper');
		$this->form_validation->set_rules('c_name', 'Name', 'trim|required|max_length[200]|xss_clean');
		$this->form_validation->set_rules('c_contact', 'Contact', 'trim|required|max_length[100]|xss_clean');
		$this->form_validation->set_rules('c_type', 'Message Type', 'trim|required|max_length[10]|callback_checktype|xss_clean');
		$this->form_validation->set_rules('c_email', 'Email', 'trim|required|max_length[200]|valid_email|xss_clean');
		$this->form_validation->set_rules('c_subject', 'Subject', 'trim|required|max_length[200]|xss_clean');
		$this->form_validation->set_rules('c_comment', 'Comment', 'trim|required|max_length[500]|xss_clean');
		$this->form_validation->set_rules('recaptcha_challenge_field', 'Recaptcha', 'required|callback_recaptcha_matches');
		
		return $this->form_validation->run();
	 }
	 
	  public function validate_joinus(){
		$this->form_validation->set_rules('j_name', 'Name', 'trim|required|max_length[200]|xss_clean');
		$this->form_validation->set_rules('j_email', 'Email', 'trim|max_length[200]|valid_email|xss_clean');
		$this->form_validation->set_rules('j_telephone', 'Telephone', 'trim|max_length[100]|numeric|xss_clean');
		$this->form_validation->set_rules('j_mobile', 'Mobile', 'trim|max_length[100]|numeric|xss_clean');
		$this->form_validation->set_rules('j_country_code', 'Country Code', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('j_area_code', 'Area Code', 'trim|max_length[20]|numeric|xss_clean');
		$this->form_validation->set_rules('j_phone_no', 'Phone Number', 'trim|max_length[100]|numeric|xss_clean');
		$this->form_validation->set_rules('j_cor', 'Country of Residence', 'trim|max_length[100]|xss_clean');
		$this->form_validation->set_rules('j_postal_code', 'Postal Code', 'trim|max_length[100]|numeric|xss_clean');
		$this->form_validation->set_rules('j_street_address', 'Street Address', 'trim|max_length[500]|xss_clean');
		$this->form_validation->set_rules('option-survey[]', 'receive', 'callback__choice_of_receive');
		$this->form_validation->set_rules('option-communicate[]', 'communication', 'callback__choice_of_communication');
		$this->form_validation->set_rules('option-communicate-agree', 'terms and conditions', 'callback__accept_terms');
		return $this->form_validation->run();
	 }
	 
	  public function validate_feedback(){
		$this->form_validation->set_rules('senderComments', 'Reply', 'trim|required|max_length[1200]|xss_clean');
		$this->form_validation->set_rules('feedbacktype', 'feedback', 'trim|required|xss_clean');
		$this->form_validation->set_rules('feedbackid', 'feedback', 'trim|required|xss_clean');
		$this->form_validation->set_rules('feedbackauthcode', 'feedback', 'trim|required|xss_clean');
		return $this->form_validation->run();
	 }
	 
	
	 
	
}
?>