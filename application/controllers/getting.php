<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getting extends CI_Controller {
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navigation');
		$this->load->view('blocks/getting');
		$this->load->view('includes/footer');
	}
}

/* End of file getting.php */
/* Location: ./application/controllers/getting.php */