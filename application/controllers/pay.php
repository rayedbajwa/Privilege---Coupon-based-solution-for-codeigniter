<?php

class Pay extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		
	}
	function index()
	{
		
		
		 $this->load->view('temp_navbar');
                   $this->load->view('pay_process'); 
                               $this->load->view('temp_footer');
		
		
	}
    function verify_pay($data)
    {
    $this->load->model('pay');
    $this->pay->updatePaid($this->session->userdata['userid']);
    
    $this->cart->destroy();
    $this->load->view('verify_payment');
    
    }
		
	
}

?>