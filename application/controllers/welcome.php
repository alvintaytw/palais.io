<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tenant_model');
		$this->load->helper('form');
	}
	public function images_path()
	{
		$images_path = _EIP_UPLOAD_HREF_TENANTS_LOGO_SMALL."/";
		return $images_path;
	}
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		
		$home_promo[0]['title']="ANTOINETTE ";
		$home_promo[0]['unit']="#B1-08/09/10C";
		$home_promo[0]['desc']="Bringing Antoinette's Parisian flair to this swanky shopping destination, Chef Pang sought inspiration from the renowned Ch&Acirc;teau de Versailles and its lush gardens to create Le Jardin d?";
		$home_promo[0]['link']=base_url("food/tenant/18");
		$home_promo[0]['img']= base_url("assets")."/images/home-product-01.png";
		
		$home_promo[1]['title']="Free Parking at Palais Renaissance";
		$home_promo[1]['unit']="";
		$home_promo[1]['desc']="With 2 new establishments in Palais Renaissance, be spolit for choice after shopping! From satisfying set lunches to leisurely afternoon teas and delectable dinners, let the pampering begin!";
		$home_promo[1]['link']=base_url("")."promotions/promotion_page/34";
		$home_promo[1]['img']= base_url("assets")."/images/home-product-03.png";
		
		$home_promo[2]['title']="SUSHI KUU";
		$home_promo[2]['unit']="#01-06/07";
		$home_promo[2]['desc']="Founded in Hong Kong, Sushi Kuu brings you the freshest ingredients in a casual and relaxed environment. Come try our popular Assorted Seafood on Sushi Rice, or order our Omakase to get the full dining experience. ";
		$home_promo[2]['link']=base_url("food/tenant/38");
		$home_promo[2]['img']= base_url("assets")."/images/home-product-04.png";

		$home_promo[3]['title']="PS.CAFE";
		$home_promo[3]['unit']="#02-09A";
		$home_promo[3]['desc']="Unique; distinctive; a class of its own. Architecture of various influences meet, binding beautifully into an art of sophistication. PS Caf&eacute; brings together food and flair to new heights.";
		$home_promo[3]['link']=base_url("food/tenant/21");
		$home_promo[3]['img']= base_url("assets")."/images/home-product-05.png";
		
		$data['home_promo']=$home_promo;
		
		$this->load->view('blocks/index',$data);
		$this->load->view('includes/footer');
	}
	
	public function search(){
		
		
		if($this->input->post('location-field')!=NULL)
		{
			$this->load->view('includes/header');
			$this->load->view('includes/navigation');
			$this->load->view('includes/sub-nav-header');
			$query_tenant = $this->tenant_model->get_tenant_by_name($this->input->post('location-field'));
					
			if($query_tenant != NULL)
			{	
				$count = 0;	
				foreach ($query_tenant as $row)
				{	
					$tenant_detail[$count]['cmsdir_category'] = $row->cmsdir_category;
					$tenant_detail[$count]['cmsdir_id'] = $row->cmsdir_id;
					$tenant_detail[$count]['cmsdir_name'] = $row->cmsdir_name;
					$tenant_detail[$count]['cmsdir_unit'] = $row->cmsdir_unit;
					$tenant_detail[$count]['cmsdir_tel1'] = $row->cmsdir_tel1;
					$tenant_detail[$count]['cmsdir_tel2'] = $row->cmsdir_tel2;
					$tenant_detail[$count]['cmsdir_fax'] = $row->cmsdir_fax;
					$tenant_detail[$count]['cmsdir_web'] = $row->cmsdir_web;
					$logo = explode("|" , $row->cmsdir_logo);
					$tenant_detail[$count]['cmsdir_logo'] = $this->images_path().$logo[0];
					switch($tenant_detail[$count]['cmsdir_category'])
					{
						case 1:
							$tenant_detail[$count]['category_url']= 'living';
							break;
						case 2:
							$tenant_detail[$count]['category_url'] = 'fashion';
							break;
						case 3:
							$tenant_detail[$count]['category_url'] = 'food';
							break;
						case 4:
							$tenant_detail[$count]['category_url'] = 'beauty';
							break;
							
					}
					if($count>=1)
					{
						
						
						$data['tenant_detail'] = $tenant_detail;
						$this->load->view('blocks/directory',$data);
						$count = 0;
						 $tenant_detail= null;
					}
					else
						$count++;
					
				}
				if($count==1){
					$data['tenant_detail'] = $tenant_detail;
					$this->load->view('blocks/directory',$data);
				}
			}
			else{
				$data['message'] = 'No result was found.';
				$this->load->view('blocks/blank_directory',$data);
			}
			
			$this->load->view('includes/sub-nav-footer');
			$this->load->view('includes/footer');
		}
		else{
			redirect('/beauty');
		}
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */