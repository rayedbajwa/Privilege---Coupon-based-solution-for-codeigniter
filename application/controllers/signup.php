<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class signup extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
			$this->load->library('form_validation');
	        $this->form_validation->set_rules('user_full_name', 'Name', 'required|min_length[5]');
		$this->form_validation->set_rules('user_name', 'username', 'required|min_length[5]|is_unique[users.username]');
		$this->form_validation->set_rules('email_address', 'Email', 'required|is_unique[users.email]|valid_email');
                $this->form_validation->set_rules('password', 'Password ', 'required|min_length[5]|matches[con_password]');
                $this->form_validation->set_rules('con_password', 'Password', 'required|min_length[5]');
                $this->form_validation->set_message('required', 'required');
		 $this->form_validation->set_message('min_length', 'lenght');
		 $this->form_validation->set_message('is_unique', 'Allready exist');
		 $this->form_validation->set_message('valid_email', 'Invalid Email');
		  $this->form_validation->set_message('matches', 'password not match');
		if ($this->form_validation->run() == true )
		{
        
                    $this->user_model->add_user();
                    
             $this->load->library('email');
		$this->email->from('pass_support@privilegedpk.com', 'Komail');
		$this->email->to($this->input->post('email_address')); 
		$this->email->subject('Email Verification');
		$this->email->message('http://privilegedpk.com/prev/index.php/signup/verify?email='.$this->input->post('email_address'));	

		$this->email->send();
		//echo $this->email->print_debugger();
                redirect('main', 'refresh');
                                 
                 		 
              	}
		else
		{      
		
		redirect($this->input->post('current').'un='.form_error('user_name').'&&nam='.form_error('user_full_name').'&&email='.form_error('email_address').'&&pass='.form_error('password').'&&pass1='.form_error('con_password'));
   
                                
		}
                
  
		}	
	    function verify()
                {
                  $this->load->view('verify_email_view');
                }
                function update_record()
                {
                 $this->load->model('user_model');
                $this->user_model->user_update();
               redirect('main', 'refresh'); 
                }
		
               
}
?>