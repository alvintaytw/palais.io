<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class session_model extends CI_Model {
	 public function __construct()
	 {
	  parent::__construct();
	  $this->load->library('session');
	 }
	 
	 public function clear_contact_session(){
		$array_items = array(
			/*	'business_code'=>'',*/
				'c_name'=>'',
				'c_contact' => '',
				'c_email' => '',
				'c_type'=>'',
				'c_subject'=>'',
				'c_comment'=>''
		);

		$this->session->unset_userdata($array_items);
	 }
	  public function add_contact_session()
	 {
	
		  $contact_data=array(
			/*'business_code'=>$this->input->post('business_code'),*/
			'c_name'=>$this->input->post('c_name'),
			'c_contact'=>$this->input->post('c_contact'),
			'c_email'=>$this->input->post('c_email'),
			'c_type'=>$this->input->post('c_type_id'),
			'c_comment'=>$this->input->post('c_comment')
		  );
		  $this->session->set_userdata($contact_data);
	 }
	 
	  public function clear_join_session(){
		$array_items = array(
			'j_name'=>$this->input->post('j_name'),
			'j_email'=>$this->input->post('j_email'),
			'j_telephone'=>$this->input->post('j_telephone'),
			'j_mobile'=>$this->input->post('j_mobile'),
			'j_country_code'=>$this->input->post('j_country_code'),			
			'j_area_code'=>$this->input->post('j_area_code'),		
			'j_phone_no'=>$this->input->post('j_phone_no'),	
			'j_cor'=>$this->input->post('j_cor'),
			'j_postal_code'=>$this->input->post('j_postal_code'),
			'j_street_address'=>$this->input->post('j_street_address')
		);

		$this->session->unset_userdata($array_items);
	 }
	 
	   public function add_joinus_session()
	 {
	
		  $join_data=array(
			'j_name'=>$this->input->post('j_name'),
			'j_email'=>$this->input->post('j_email'),
			'j_telephone'=>$this->input->post('j_telephone'),
			'j_mobile'=>$this->input->post('j_mobile'),
			'j_country_code'=>$this->input->post('j_country_code'),			
			'j_area_code'=>$this->input->post('j_area_code'),		
			'j_phone_no'=>$this->input->post('j_phone_no'),	
			'j_cor'=>$this->input->post('j_cor'),
			'j_postal_code'=>$this->input->post('j_postal_code'),
			'j_street_address'=>$this->input->post('j_street_address')
			
		  );
		  $this->session->set_userdata($join_data);
	 }
	 
	  public function clear_feedback_session(){
		$array_items = array(
			'senderComments'=>$this->input->post('senderComments')
		);

		$this->session->unset_userdata($array_items);
	 }
	 
	  public function add_feedback_session()
	 {
	
		  $feedback_data=array(
			'senderComments'=>$this->input->post('senderComments')
		  );
		  $this->session->set_userdata($feedback_data);
	 }
	 
	 

}
?>