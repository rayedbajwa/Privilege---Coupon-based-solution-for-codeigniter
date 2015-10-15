<?php

class admin_subscribe extends CI_Controller
{
    function admin_subscribe()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('table');
        $this->load->helper('html');
        $this->load->model('user_model'); 
        $this->load->library('session');
	
        
    }
    function index()
    {
       
      
     if($this->session->userdata('logged_in'))
      {
       $this->load->model('admin/admin_model');
       $data = $this->admin_model->general();
        $this->load->model('admin/admin_subscribe_model');
         $data['query'] = $this->admin_subscribe_model->getall();
        $this->load->view('admin/subscribe_view',$data);
     }
      else
      {
       redirect('index', 'refresh');    
      }
    }
    function input()
    {
                    $this->load->library('session');
       if($this->session->userdata('logged_in'))
      {
        $this->load->model('admin/admin_subscribe_model');
            
   $this->admin_subscribe_model->entry_insert();
                          
    redirect('admin/admin_subscribe', 'refresh');  
   
    }
    else
      {
       redirect('index', 'refresh');    
      }
    }
    function del($username){
                      	
                    $this->load->library('session');
       if($this->session->userdata('logged_in'))
      {     
                     $this->load->model('admin/admin_subscribe_model');
                     $this->admin_subscribe_model->delete($username);   
                     
               $this->load->model('admin/admin_model');
               $data = $this->admin_model->general();
                $data['query'] = $this->admin_subscribe_model->getall();
              redirect('admin/admin_subscribe', 'refresh');
              //$this->load->view('admin/user_view',$data);    
      }
              else
      {
       redirect('index', 'refresh');    
      }
              
    }
           
    
}

