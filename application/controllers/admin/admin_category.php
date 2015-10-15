<?php 

class admin_category extends CI_Controller
{
    function admin_category()
    {
        parent::__construct();
    }
    
    function index()
    {
         $this->load->helper('form'); 
         $this->load->helper('html');    
         $this->load->model('admin/admin_model');
         $data = $this->admin_model->general();
         $this->load->model('admin/admin_category_model');
         $data['query'] = $this->admin_category_model->getall();
         $this->load->view('admin/category_view',$data);
        
    }
    function input($un="")
              {
                $this->load->library('session');
                if($this->session->userdata('logged_in'))
                {
                $this->load->helper('form');  
                $this->load->helper('html'); 
                $this->load->model('admin/admin_model');
                $this->load->model('admin/admin_category_model');
                $data = $this->admin_model->general();
               
               if($this->input->post('mysubmit')&&$this->input->post('fname')!="")
                {
    
               if($this->input->post('id')>-1)
                {
               
                 $this->admin_category_model->entry_update();
                 
                       redirect('admin/admin_category/','refresh');             
                } 
                else
                {
                 
                    $this->admin_category_model->entry_insert();
                     redirect('admin/admin_category/','refresh');   
                }
    
                }
             
                  
            if($un!="")
                {
                $query = $this->admin_category_model->get(str_replace('%20', ' ', $un));
                $data['idd'] = $query['id'];
                $data['nam'] = $query['name'];
                 $data['selected2'] = $query['type'];
                 $data['curr_image'] = $query['icon'];
                $data['curr_color'] = $query['color'];
                }
                $data['query'] = $this->admin_category_model->getall();      
                $this->load->view('admin/category_view_update',$data);		
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
               redirect('admin/admin_category', 'refresh');
                $this->load->view('admin/category_view',$data);    
                        }
                                   else
                  {
                    redirect('index', 'refresh');    
                    }
                
                        }
        
    
}