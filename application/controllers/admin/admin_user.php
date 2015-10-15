<?php

class admin_user extends CI_Controller
{
    function admin_user()
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
         $this->load->model('admin/admin_user_model');
         $data['query'] = $this->admin_user_model->getall();
         $this->load->view('admin/user_view',$data);
      } 
       else
      {
        redirect('main', 'refresh');    
      }
    }
    function input($un="")
              {
         $this->load->library('session');
       if($this->session->userdata('logged_in'))
      {
              $this->load->helper('form');  
                $this->load->helper('html'); 
                $this->load->model('admin/admin_model');
                $this->load->model('admin/admin_user_model');
                $data = $this->admin_model->general();
                $p=$this->input->post('fpassword');
                if(strlen($p)>5)
                  {
            if($this->input->post('mysubmit')&&$this->input->post('fusername')!="")
                {
    
            if($this->input->post('id')>-1)
                {
               
                 $this->admin_user_model->entry_update();
                 redirect('admin/admin_user/','refresh');
                } 
                else
                {
                  
                    $this->admin_user_model->entry_insert();
     \                 redirect('admin/admin_user/','refresh');
                }
    
                }
             
                  }
                else {
                    if(strlen($p)<5)
                    {
                        $data['inputError']='password must b grater then 5 latter';
                    }
                        else {
                       $data['inputError']='password not match';
                    }
                   
                     }

                  
 
            if($un!="")
                {
                $query = $this->admin_user_model->get($un);
                $data['idd'] = $query['id'];
                $data['nam'] = $query['name'];
                $data['n'] = $query['username'];
                $data['pass'] = $query['password'];
                $data['email'] = $query['email'];
                $data['selected'] = $query['flag'];
                if($query['status']=='yes'){
                $data['check'] = TRUE;
                }else{
                $data['check'] = FALSE;	  
                    }
                }

                

                	
       $data['query'] = $this->admin_user_model->getall();      
                $this->load->view('admin/user_view_update',$data);		
                
                  
      }
                 else
      {
        redirect('main', 'refresh');    
      }
                }
                
                  function del($username){
                       $this->load->library('session');
       if($this->session->userdata('logged_in'))
      {
                      $this->load->helper('form');
                     $this->load->library('table');
                     $this->load->helper('html');	
                     $this->load->model('admin/admin_user_model');
                     $this->admin_user_model->delete($username);
                               
                $this->load->model('admin/admin_model');
                
                $data = $this->admin_model->general();
                $data['query'] = $this->admin_user_model->getall();
                redirect('admin/admin_user', 'refresh');
                $this->load->view('admin/user_view',$data);    
      }
           else
      {
       redirect('index', 'refresh');    
      }     
      }
     
    
    
}