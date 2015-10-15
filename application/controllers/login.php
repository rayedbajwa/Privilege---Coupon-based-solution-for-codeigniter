<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user_model');
 }

 function index()
 {

  
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('pass', 'Password ', 'required');
                
     	if ($this->form_validation->run() == true )
	{
                $username=$this->input->post('username');
		$password=$this->input->post('pass');
                 
        
                $result=$this->user_model->login($username,$password);
		 if($result)
                 {
                       
                     $sess_array = array();
                       foreach($result as $row)
                     {
                        $sess_array = array(
                        'userid' => $row->id,
                        'flag' => $row->flag, 
                        'username' => $row->username , 
                            'logged_in' => TRUE,
                                            ); 
                     }
                     
                   $this->user_model->create_session($sess_array);


                    redirect('login/loadpage');
                                   return TRUE; 
                  }
                else
                 {
        redirect($this->input->post('current').'login_attempt=1');
       
                 }
        }
 else {

     redirect($this->input->post('current').'login_attempt=2');
     
 }
 
 }
	

	 
 
 function loadpage()
 {
    if($this->session->userdata('logged_in'))
   {
    
     $session_data = $this->session->userdata('logged_in');
     $data['flag'] = $this->session->userdata('flag');
     $data['username'] =$this->session->userdata('username');
  
     if($data['flag']=="User")
     {
     redirect('home',$data);
     }
     else
         if(strcmp($data['flag'],"Admin")==0)
         {
                
              redirect('admin\mainPage','refresh');
             
         }
         else {
          $this->load->library('session');  
          $query=$this->user_model->get_user_id($this->session->userdata('userid'));
      if($query)
      {
         redirect('brand\brand_deal','refresh');
     }
     else
     {
     echo $this->session->userdata('userid');
    echo 'brand not avaliable'; 
     }
             }
     
     }
   else
   {
    // If no session, redirect to login page
    redirect('main', 'refresh');
   }
 }
} 