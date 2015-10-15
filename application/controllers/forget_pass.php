<?php                
   class forget_pass extends CI_Controller
   {                
                function __contruct()
                {
                    parent::__construct();
                                       
                }
                function index()
                {
                  $this->load->view('forget_pass_view');
                }
                function send_link()
                {
                $this->load->model('user_model');
                $query = $this->user_model->get_id($this->input->post('email'));
              
                if($query)
                {
                $this->load->library('email');
		$this->email->from('pass_support@privilegedpk.com', 'Komail');
		$this->email->to($this->input->post('email')); 
		$this->email->subject('Reset Password');
		$this->email->message('http://privilegedpk.com/prev/index.php/forget_pass/set_pass?id='.$query['id']. '&&un='.$query['username']);	

		$this->email->send();
		echo $this->email->print_debugger();
                }
                else
                {
                echo 'email not exist';
                
                }
                }
                  function set_pass()
                {
                  $this->load->view('forget_setpass_view');
                }
                function change_pass()
                {
                
               if($this->input->post('pass')!=""&&$this->input->post('repass')==$this->input->post('pass'))
               {
                 $this->load->model('user_model');
                $this->user_model-> pass_update();
                
               echo  "Password changed";
               
               }
               else
               {
               echo 'Error';
               }
               
                }
                
                
                                                     
   }
 
  
?>