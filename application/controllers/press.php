<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Press extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('event_model');
		$this->load->helper('date');
		 $GLOBALS['yearnow'] = 2014;
		 //$GLOBALS['yearnow'] =date("Y");
	}
	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$data['yearnow'] = $GLOBALS['yearnow'];
		$this->load->view('includes/sub-nav-header-press.php',$data);
		$this->_press_content($data['yearnow']);
		$this->load->view('includes/sub-nav-footer-press.php');
		$this->load->view('includes/footer');
	}
	
	public function _press_content($yearnow){
		$query_event = $this->event_model->get_event_by_year();
		$path = _EIP_UPLOAD_HREF_SPECIAL_CONTAIN;
		if($query_event != NULL)
		{	
			$count = 0;	
			foreach ($query_event as $row)
			{	
				if($yearnow==date("Y", $row->cmsscontnews_date))
				{
					$event_details[$count]['cmsscontnews_title'] = stripslashes($row->cmsscontnews_title);
					$event_details[$count]['cmsscontnews_description'] = stripslashes($row->cmsscontnews_description);
					$event_details[$count]['cmsscontnews_attachment'] = $path.$row->cmsscontnews_attachment;
					$event_details[$count]['cmsscontnews_date'] = date("d F Y", $row->cmsscontnews_date);
					if($count>=1)
					{
						$data['event_details'] = $event_details;
						$this->load->view('blocks/press',$data);
						$count = 0;
						 $event_details= null;
					}
					else
						$count++;
				}
				
			}
			if($count==1){
				$data['event_details'] = $event_details;
				$this->load->view('blocks/press',$data);
			}
		}
	}
	
	public function others()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$data['yearnow'] = $GLOBALS['yearnow'];
		$this->load->view('includes/sub-nav-header-press.php',$data);
		$this->_press_content_others($data['yearnow']);
		$this->load->view('includes/sub-nav-footer-press.php');
		$this->load->view('includes/footer');
	}
	
	public function _press_content_others($yearnow){
		$query_event = $this->event_model->get_event_by_year();
		$path = _EIP_UPLOAD_HREF_SPECIAL_CONTAIN;
		if($query_event != NULL)
		{	
			$count = 0;	
			foreach ($query_event as $row)
			{	
				if($yearnow>date("Y", $row->cmsscontnews_date))
				{
					$event_details[$count]['cmsscontnews_title'] = stripslashes($row->cmsscontnews_title);
					$event_details[$count]['cmsscontnews_description'] = stripslashes($row->cmsscontnews_description);
					$event_details[$count]['cmsscontnews_attachment'] = $path.$row->cmsscontnews_attachment;
					$event_details[$count]['cmsscontnews_date'] = date("d F Y", $row->cmsscontnews_date);
					if($count>=1)
					{
						$data['event_details'] = $event_details;
						$this->load->view('blocks/press_others',$data);
						$count = 0;
						 $event_details= null;
					}
					else
						$count++;
				}
				
			}
			if($count==1){
				$data['event_details'] = $event_details;
				$this->load->view('blocks/press_others',$data);
			}
		}
	}
}

/* End of file press.php */
/* Location: ./application/controllers/press.php */