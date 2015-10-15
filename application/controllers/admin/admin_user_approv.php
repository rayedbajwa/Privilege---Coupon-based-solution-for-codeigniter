<?php

class admin_user_approv extends CI_Controller
{
    function admin_user_approv()
    {
        parent::__construct();
    }
    
    function index()
    {
       $this->load->library('session');
       if($this->session->userdata('logged_in'))
      {
        $this->load->helper('form'); 
         $this->load->helper('html');    
         $this->load->model('admin/admin_model');
         $data = $this->admin_model->general();
         $this->load->model('admin/admin_approv_model');
         $data['query'] = $this->admin_approv_model->get_unpaid();
         $this->load->view('admin/user_approval_view',$data);
      } 
       else
      {
        redirect('main', 'refresh');    
      }
    }
    function panding()
    {
     $this->load->library('session');
       if($this->session->userdata('logged_in'))
      {
        $this->load->helper('form'); 
         $this->load->helper('html');    
         $this->load->model('admin/admin_model');
         $data = $this->admin_model->general();
         $this->load->model('admin/admin_approv_model');
         $data['query'] = $this->admin_approv_model->get_panding();
         $this->load->view('admin/user_panding_view',$data);
      }
       else
      {
        redirect('main', 'refresh');    
      }
    
    }
    
     function check($un)
    {
     $this->load->library('session');
       if($this->session->userdata('logged_in'))
      {
      $this->load->helper('form'); 
         $this->load->helper('html');    
         $this->load->model('admin/admin_model');
         $data = $this->admin_model->general();
         $this->load->model('admin/admin_approv_model');
         $data['query'] = $this->admin_approv_model->get_detail($un);
        $this->load->view('admin/user_verify_view',$data);

      }
       else
      {
        redirect('main', 'refresh');    
      }
    
    }
     function varified()
    {
     $this->load->library('session');
       if($this->session->userdata('logged_in'))
      {
      $this->load->model('admin/admin_approv_model');
      $this->admin_approv_model->verified();
    redirect('admin/admin_user_approv/panding', 'refresh');       }
       else
      {
        redirect('main', 'refresh');    
      }
    
    }
     function not_varified()
    {
     $this->load->library('session');
       if($this->session->userdata('logged_in'))
      {
      
      $this->load->model('admin/admin_approv_model');
      $query=$this->admin_approv_model->getById();
                      $this->load->library('email');
		$this->email->from('pass_support@privilegedpk.com', 'Komail');
		$this->email->to($query['email']); 
		$this->email->subject('Reset Password');
		$this->email->message('Your request is not approved . please contact us again. ');	

		$this->email->send();
		 redirect('admin/admin_user_approv/panding', 'refresh'); 
    

      }
       else
      {
        redirect('main', 'refresh');    
      }
    
    }  
}