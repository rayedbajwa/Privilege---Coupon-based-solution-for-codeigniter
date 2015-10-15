<?php 

class brand_category extends CI_Controller
{
    function brand_category()
    {
        parent::__construct();
    }
    
    function index()
    {
         $this->load->helper('form'); 
         $this->load->helper('html');    
         $this->load->model('brand/brand_model');
         $data = $this->brand_model->general();
         $this->load->model('admin/admin_category_model');
         $data['query'] = $this->admin_category_model->getall();
         $this->load->view('brand/category_view',$data);
        
    }
    function input($un="")
              {
                $this->load->library('session');
                if($this->session->userdata('logged_in'))
                {
                $this->load->helper('form');  
                $this->load->helper('html'); 
                $this->load->model('brand/brand_model');
                $this->load->model('admin/admin_category_model');
                $data = $this->brand_model->general();
               
               if($this->input->post('mysubmit')&&$this->input->post('fname')!="")
                {
    
                 
                    $this->admin_category_model->entry_insert();
                     redirect('brand/brand_category/','refresh');   
          
                }
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
                     $this->load->model('admin/admin_category_model');
                     
                     $this->admin_category_model->delete($name);
                               
                $this->load->model('admin/admin_model');
                
                $data = $this->admin_model->general();
                $data['query'] = $this->admin_category_model->getall();
               redirect('brand/brand_category', 'refresh');
            
                        }
                                   else
                  {
                    redirect('index', 'refresh');    
                    }
                
                        }
        
    
}