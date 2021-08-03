<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Replythread extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('replythread_model');
		$this->load->model('session_model');
		$this->load->model('form_validation_model');
		$this->load->library('email');
		$this->load->helper('form');
	}
	
	
	
	public function index()
	{
		redirect('/', 'refresh');
	}
	
	public function feedback($authcode = NULL)
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		
		$data['title'] = "Feedback";
		$feedback_val = $this->_getfeedback($authcode);
		$data['feedbackid'] = $feedback_val['feedbackid'];
		$data['feedbackname'] = $feedback_val['feedbackname'];
		$data['feedbacksubject'] = $feedback_val['feedbacksubject'];
		$data['feedbackauthcode'] = $feedback_val['feedbackauthcode'];
		$data['feedbacktype'] = $feedback_val['feedbacktype'];
		$data['submit_status'] = FALSE;
		
		$feedback_message = $this->replythread_model->get_feeback_message($data['feedbackid']);
		$data['result'] = $feedback_message;
		$this->load->view('blocks/replythread_view',$data);
		$this->load->view('includes/footer');
	}
	
	public function feedback_done($authcode = NULL)
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		
		$data['title'] = "Feedback";
		$feedback_val = $this->_getfeedback($authcode);
		$data['feedbackid'] = $feedback_val['feedbackid'];
		$data['feedbackname'] = $feedback_val['feedbackname'];
		$data['feedbacksubject'] = $feedback_val['feedbacksubject'];
		$data['feedbackauthcode'] = $feedback_val['feedbackauthcode'];
		$data['feedbacktype'] = $feedback_val['feedbacktype'];
		$data['submit_status'] = TRUE;
		
		$feedback_message = $this->replythread_model->get_feeback_message($data['feedbackid']);
		$data['result'] = $feedback_message;
		$this->load->view('blocks/replythread_view',$data);
		$this->load->view('includes/footer');
	}
	
	public function submit()
	{
		if($this->form_validation_model->validate_feedback() == FALSE)
		{
			$this->session_model->add_feedback_session();
			$this->feedback($this->input->post('feedbackauthcode'));
		}
		else
		{
			
			$this->replythread_model->add_feedback_message($this->input->post('feedbackid'),$this->input->post('senderComments'));
			$this->replythread_model->update_feedback($this->input->post('feedbackid'));
			$this->_completed();
			
		}	
	}
	
	private function _completed()
	{	
		/*$admin_query = $this->replythread_model->get_mailto($this->input->post('feedbacktype'));
		if($admin_query!=NULL)
		foreach($admin_query as $rows)
		{
			$this->_sendMail($rows->admusr_email);
		}*/
		$this->_sendMail('alvin.tay@patroids.com');
		$this->session_model->clear_feedback_session();	
		redirect('replythread/feedback_done/'.$this->input->post('feedbackauthcode'));
		
	}
	
	private function _sendMail($admusr_email = NULL){
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
	
	private function _getfeedback($authcode = NULL)
	{
		if($authcode==NULL)
		{
			redirect('/', 'refresh');
		}
		
		$query = $this->replythread_model->get_feedback($authcode);
		if($query != NULL)
		{
			foreach ($query as $row)
			{	
				$data['feedbackid'] = intval($row->crmfeedback_id);
				$data['feedbackname'] = $row->crmfeedback_name;
				$data['feedbacksubject'] = $row->crmfeedback_subject;
				$data['feedbackauthcode'] = $row->crmfeedback_authcode;
				$data['feedbacktype'] = intval($row->crmfeedback_type);
			}
			return $data;
		}
		else{
			redirect('/', 'refresh');
		}
	}
	
}

/* End of file replythread.php */
/* Location: ./application/controllers/replythread.php */