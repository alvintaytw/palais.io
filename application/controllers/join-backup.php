<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
		$this->load->helper('form');
		//$this->load->model('session_model');
		$this->load->model('form_validation_model');
	}
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		
		$data['options'] = $this->getCountryCode();
		$data['COR_options'] = $this->getCOR();
		$this->load->view('blocks/join',$data);
		$this->load->view('includes/footer');
	}
	
	public function getCountryCode(){
		$query = $this->contact_model->get_contry_code();
		if($query != NULL)
		{
			$full_option = array('' => 'Country Code');
			foreach ($query as $row)
			{		
				
				$option =  array(
				   $row->iso => $row->nicename.' (+'.$row->phonecode.')',
				 );
				
				$full_option =array_merge($full_option,$option);
			}
			return $full_option;
		}
	}
	
	public function getCOR(){
		$query = $this->contact_model->get_contry();
		if($query != NULL)
		{
			$full_option = array('' => 'Country of Residence');
			foreach ($query as $row)
			{		
				
				$option =  array(
				   $row->nicename  => $row->nicename,
				 );
				
				$full_option =array_merge($full_option,$option);
			}
			return $full_option;
		}
	}
	
	
	function join_form_registration()
	{
/*		if($this->form_validation_model->validate_joinus() == FALSE)
		{
			$this->session_model->add_joinus_session();
			$this->index();
		}
		else
		{
			$this->_completed();		
		}	*/
			$this->_completed();		
	}
	
	function _completed()
	{	
		//$this->session_model->clear_join_session();
		
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$data['message'] = "Thank you.";
		$data['title'] = "JOIN MAILING LIST";
		$this->load->view('blocks/blank',$data);
		$this->load->view('includes/footer');
		
	}
	
	 function _choice_of_receive() {
	   if (isset($_POST['option-survey'])) 
	    	{	return true;
		}
		else{
		    $this->form_validation->set_message('_choice_of_receive', 'At least one item to receive updates on is required.');
			return false;
			
		}
	}
	
	 function _choice_of_communication() {
	   if (isset($_POST['option-communicate'])) 
	    	{	return true;
		}
		else{
		    $this->form_validation->set_message('_choice_of_communication', 'At least one communication channel is required.');
			return false;
			
		}
	}
	
	function _accept_terms() {
	   if (isset($_POST['option-communicate-agree'])) 
	    	{	return true;
		}
		else{
		    $this->form_validation->set_message('_accept_terms', 'Please agree to receive news and information from Palais Renaissance via the above channels.');
			return false;
			
		}
	}

}

/* End of file join.php */
/* Location: ./application/controllers/join.php */