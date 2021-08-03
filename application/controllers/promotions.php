<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotions extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('promotion_model');
		$this->load->helper('date');
		
	}
	
	public $path = _EIP_UPLOAD_HREF_PDF;
	
	public function images_path()
	{
		$images_path = _EIP_UPLOAD_HREF_PROMOTIONS_THUMB.'/';
		return $images_path;
	}
	
	public function wide_images_path()
	{
		$images_path = _EIP_UPLOAD_HREF_PROMOTIONS_WIDE.'/';
		return $images_path;
	}
	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->_promotion_content();
		$this->load->view('includes/footer');
	}
	
	public function promotion_page($promo_id = NULL){
		if($promo_id != NULL || $promo_id != "")
		{
			$this->load->view('includes/header');
			$this->load->view('includes/navigation');
			$this->_promotion_page_contain($promo_id);
			$this->load->view('includes/footer');
		}
		else
			$this->index();
	}
	
	
	public function _promotion_page_contain($promo_id){
		if($promo_id != "static")
		{
			$query_event = $this->promotion_model->get_promotion_by_id($promo_id);
			if($query_event != NULL)
			{	
				foreach ($query_event as $row)
				{
					$promo_details['cmsscontpro_image']  = $this->wide_images_path().$row->cmsscontpro_image;
					$promo_details['cmsscontpro_title'] = html_entity_decode (htmlentities(stripslashes($row->cmsscontpro_title), ENT_COMPAT, "UTF-8"));
					$promo_details['cmsscontpro_description'] = stripslashes($row->cmsscontpro_description);
					$promo_details['cmsscontpro_linktype']  = $row->cmsscontpro_linktype;
					$promo_details['cmsscontpro_link']  = $row->cmsscontpro_link;
					$promo_details['cmsscontpro_attachment']  = $this->path.$row->cmsscontpro_attachment;
					$data['promo_details'] = $promo_details;
					$data['withContent'] = true;
					$this->load->view('blocks/promotion_page',$data);
				}
			}
			else
				$this->index();
		}
		else if($promo_id == "static")
		{	
			$data['withContent'] = false;
			$data['promotion_img'] = $this->images_path().'/promo-01.jpg';
			$this->load->view('blocks/promotion_page',$data);
		}
	}
	
	public function _promotion_content(){
		$query_event = $this->promotion_model->get_promotion();
		if($query_event != NULL)
		{	
			$data['promotion_img'] = $this->images_path().'/promo-01.jpg';
			$this->load->view('blocks/promotion_1',$data);
			
			$count = 0;	
			foreach ($query_event as $row)
			{	
				$promo_details[$count]['cmsscontpro_id'] = $row->cmsscontpro_id;
				$promo_details[$count]['cmsscontpro_image']  = $this->images_path().$row->cmsscontpro_image;
				$promo_details[$count]['cmsscontpro_title'] = html_entity_decode (htmlentities(stripslashes($row->cmsscontpro_title), ENT_COMPAT, "UTF-8"));
				$promo_details[$count]['cmsscontpro_description'] = stripslashes($row->cmsscontpro_description);
				$promo_details[$count]['cmsscontpro_linktype']  = $row->cmsscontpro_linktype;
				$promo_details[$count]['cmsscontpro_link']  = $row->cmsscontpro_link;
				$promo_details[$count]['cmsscontpro_attachment']  = $this->path.$row->cmsscontpro_attachment;
				if($count>=1)
				{		
					$data['promo_details'] = $promo_details;
					$data['isdesktop'] = true;
					$this->load->view('blocks/promotion_content',$data);
					$count = 0;
					 $promo_details = null;
				}
				else
					$count++;
				
			}
			if($count==1){
				$data['promo_details'] = $promo_details;
					$data['isdesktop'] = true;
				$this->load->view('blocks/promotion_content',$data);
				$promo_details = null;
				$data['promo_details'] = null;
			}
			
			$this->load->view('blocks/promotion_2');
			
			$count = 0;	
			foreach ($query_event as $row)
			{	
				$promo_details[$count]['cmsscontpro_id'] = $row->cmsscontpro_id;
				$promo_details[$count]['cmsscontpro_image']  = $this->images_path().$row->cmsscontpro_image;
				$promo_details[$count]['cmsscontpro_title'] = html_entity_decode (htmlentities(stripslashes($row->cmsscontpro_title), ENT_COMPAT, "UTF-8"));
				$promo_details[$count]['cmsscontpro_description'] = stripslashes($row->cmsscontpro_description);
				$promo_details[$count]['cmsscontpro_linktype']  = $row->cmsscontpro_linktype;
				$promo_details[$count]['cmsscontpro_link']  = $row->cmsscontpro_link;
				$promo_details[$count]['cmsscontpro_attachment']  = $this->path.$row->cmsscontpro_attachment;
				if($count>=1)
				{		
					$data['promo_details'] = $promo_details;
					$data['isdesktop'] = false;
					$this->load->view('blocks/promotion_content',$data);
					$count = 0;
					 $promo_details = null;
				}
				else
					$count++;
				
			}
			if($count==1){
				$data['promo_details'] = $promo_details;
					$data['isdesktop'] = false;
				$this->load->view('blocks/promotion_content',$data);
				$promo_details = null;
				$data['promo_details'] = null;
			}
			$this->load->view('blocks/promotion_3');
		}
	}
}

/* End of file promotion.php */
/* Location: ./application/controllers/promotion.php */