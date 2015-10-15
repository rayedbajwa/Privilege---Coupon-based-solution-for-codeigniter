<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class subscribe extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		
                      	$this->load->library('form_validation');

		$this->form_validation->set_rules('subEmail', 'emailId', 'required|is_unique[subscriber.email_id]|valid_email');
		
                
     	if ($this->form_validation->run() == true )
	{
                        $this->user_model->add_sub();
			redirect('main', 'refresh');
        }
	}	
	
		
}
?>