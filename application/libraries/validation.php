<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Validation extends CI_Form_validation
{
	 function __construct()
    {
        parent::__construct();  
    }
    
    function Validation()
    {
    }
    
   function recaptcha_matches() {
    $CI = & get_instance();
    $CI->config->load('recaptcha');
    $public_key = $CI->config->item('recaptcha_public_key');
    $private_key = $CI->config->item('recaptcha_private_key');
    $response_field = $CI->input->post('recaptcha_response_field');
    $challenge_field = $CI->input->post('recaptcha_challenge_field');
    $response = recaptcha_check_answer($private_key, $_SERVER['REMOTE_ADDR'], $challenge_field, $response_field);
    
    if ($response->is_valid) {
      return TRUE;
    }
    else {
      $this->recaptcha_error = $response->error;
      $this->set_message('recaptcha_matches', 'Your answer for the security question was incorrect, please try again.');
      return FALSE;
    }
  }
    
} 