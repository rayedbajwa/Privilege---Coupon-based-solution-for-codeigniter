<?php

class admin_brands extends CI_Controller
{
    function admin_brands()
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
         $this->load->model('admin/admin_brands_model');
         $data['query'] = $this->admin_brands_model->getall();
         $this->load->model('admin/admin_user_model');
         $query1=$this->admin_brands_model->getUser();
         $options=array();
         if($query1)
         {
          foreach($query1 as $row)
          {
          $options[$row->username] = $row->username;
          }
         $data['brandUser']=$options;
         $data['trace']='done';
          }  
           else
       {
          $data['trace']='ud';
       }
      $this->load->view('admin/brands_view',$data);
          
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
                $this->load->model('admin/admin_brands_model');
                $data = $this->admin_model->general();
               
            if($this->input->post('mysubmit')&&$this->input->post('fname')!="")
                {
    
            if($this->input->post('id')>-1)
                {
               
                 $this->admin_brands_model->entry_update();
                 $data['inputError']='Record updated .. Add new or click X for back';
                  redirect('admin/admin_brand/','refresh');
              
                 
                } 
                else
                {
                  
                    $this->admin_brands_model->entry_insert();
                     $data['inputError']='Record inserted .. Add new or click X for back';
                redirect('admin/admin_brand/','refresh');
                }
    
                }
             
                  
            if($un!="")
                {
                $query = $this->admin_brands_model->get($un);
                $data['idd'] = $query['id'];
                $data['nam'] = $query['name'];
                $data['web'] = $query['website'];
                $data['email'] = $query['email'];
                $data['add'] = $query['address'];
                if($query['status']=='yes'){
                $data['check'] = TRUE;
                }else{
                $data['check'] = FALSE;	  
                    }
                }
                $data['query'] = $this->admin_brands_model->getall();      
                $this->load->view('admin/brands_view_update',$data);		
      }
      else
      {
       redirect('index', 'refresh');    
      }
                  
                }
                
                  function del($name)
                {
                    $this->load->library('session');
                    if($this->session->userdata('logged_in'))
                    {
                      $this->load->helper('form');
                      $this->load->library('table');
                      $this->load->helper('html');	
                      $this->load->model('admin/admin_brands_model');
                      $query = $this->admin_brands_model->get($name);
                      
                      $this->load->model('admin/admin_deal_model');
                      $this->admin_deal_model->delete_by_brand($query['id']);
                    
                      $this->load->model('admin/admin_user_model');
                      $this->admin_user_model->delete_by_id($query['user_id']);
                    
                      $this->load->model('admin/admin_brands_model');
                      $this->admin_brands_model->delete($name);
                      $this->load->model('admin/admin_model');      
                      $data = $this->admin_model->general();
                      $data['query'] = $this->admin_brands_model->getall();
                      redirect('admin/admin_brands', 'refresh');
                      $this->load->view('admin/brands_view',$data);    
                    }
                   else
                   {
                      redirect('index', 'refresh');    
                   }
          }
        
    
}
