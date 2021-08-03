<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
		//$this->load->library('encrypt');
		$this->load->helper('form');
		//$this->load->model('session_model');
		$this->load->model('form_validation_model');
		
		$this->load->library('validation');
		$this->load->helper('recaptcha_helper');
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
			$full_option = array('' => 'Message Type');
			foreach ($query as $row)
			{		
				
				$option =  array(
				   $row->crmfeedbackconfig_id  => $row->crmfeedbackconfig_type,
				 );
				
				$full_option =array_merge($full_option,$option);
			}
			return $full_option;
		}
	}
	function contact_form_registration()
	{
	/*	if($this->form_validation_model->validate_contact() == FALSE)
		{
			$this->session_model->add_contact_session();
			$this->index();
		}
		else
		{
			
			$this->contact_model->add_post();
			$this->_completed();		
		}*/
		$this->_completed();	
			
	}
	
	function _completed()
	{	
		//$this->session_model->clear_contact_session();
		
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$data['message'] = "Thank you.";
		$data['title'] = "Contact us";
		$this->load->view('blocks/blank',$data);
		$this->load->view('includes/footer');
		
	}
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */