<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
		$this->load->helper('form');
		$this->load->model('session_model');
		$this->load->model('form_validation_model');
		
		$this->load->library('validation');
		$this->load->helper('recaptcha_helper');
		$this->load->library('email');
	}
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		
		$data['options'] = $this->getFeedback();
		$this->load->view('blocks/contact',$data);
		$this->load->view('includes/footer');
	}
	
	public function getFeedback(){
		$query = $this->contact_model->get_feedback_option();
		if($query != NULL)
		{
			$full_option = array(0  => 'Message Type');
			
			foreach ($query as $row)
			{		
				$option =  array(
				   $row->crmfeedbackconfig_id => $row->crmfeedbackconfig_type,
				 );
				$full_option =array_merge($full_option,$option);
				
			}
			return $full_option;
		}
	}
	function contact_form_registration()
	{
		if($this->form_validation_model->validate_contact() == FALSE)
		{
			$this->session_model->add_contact_session();
			$this->index();
		}
		else
		{
			
			$this->contact_model->add_post();
			$this->_completed();
			
		}	
			
	}
	
	function checktype(){
		 if (isset($_POST['c_type'])&&($_POST['c_type']!=0)) 
	    	{	return true;
		}
		else{
		    $this->form_validation->set_message('checktype', 'The Message type field is required.');
			return false;
			
		}
	}
	
	function recaptcha_matches() {
		$CI = & get_instance();
		$CI->config->load('recaptcha');
		$public_key = $CI->config->item('recaptcha_public_key');
		$private_key = $CI->config->item('recaptcha_private_key');
		$response_field = $CI->input->post('recaptcha_response_field');
		$challenge_field = $CI->input->post('recaptcha_challenge_field');
		$response = recaptcha_check_answer($private_key, 'palais.sg', $challenge_field, $response_field);
		
		if ($response->is_valid) {
		 return TRUE;
		}
		else {
		  $this->form_validation->set_message('recaptcha_matches', 'Your answer for the security question was incorrect, please try again.');
		 return FALSE;
		}
	}
	
	function _sendMail($admusr_email = null){
		 $config = array (
           	   'protocol'  => 'sendmail',
                  'mailtype' => 'html',
                  'charset'  => 'iso-8859-1',
			   'wordwrap' => TRUE,
                  'priority' => '1',
			   'mailpath' => '/usr/sbin/sendmail'
                   );
		 $data = array(
			   'message' => "<BR><BR>You have received an enquiry. Please login to view / reply here:<BR><A HREF='" .  base_url() . "_SYNCHRO'>" . base_url()  . "_SYNCHRO</A><BR><BR>&nbsp;",
				);
		$this->email->initialize($config);
		$this->email->from('admin@palais.sg', 'Palais');
		$this->email->to($admusr_email);
		$this->email->subject('Palais Customer Feedback/Enquiry');
		$message=$this->load->view('template/contactus_mail',$data,TRUE);
		$this->email->message($message);
        	$this->email->send();  
		//echo $this->email->print_debugger();
		//$this->load->view('template/contactus_mail',$data);
	}
	
	function _completed()
	{	
	/*	$admin_query = $this->contact_model->get_all_admin();
		if($admin_query!=NULL)
		foreach($admin_query as $rows)
		{
			$this->_sendMail($rows->admusr_email);
		}*/
		$this->_sendMail('alvin.tay@patroids.com');
		$this->session_model->clear_contact_session();	
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$data['message'] = "Thank for your submition.";
		$data['title'] = "Contact us";
		$this->load->view('blocks/blank',$data);
		$this->load->view('includes/footer');
		
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */