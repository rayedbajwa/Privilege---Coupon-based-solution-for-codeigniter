  <?php

class admin_deal extends CI_Controller
{
    var $abcd;
    function admin_deal()
    {
        parent::__construct();
        
    }
    
    function index()
    {
         $this->load->helper('form'); 
         $this->load->helper('html');    
         $this->load->model('admin/admin_model');
         $data = $this->admin_model->general();
         $this->load->model('admin/admin_deal_model');
         $data['query'] = $this->admin_deal_model->getall();
         $this->load->view('admin/deal_view',$data);
    }
    function test($name="")
    { 
      $this->load->helper('form'); 
      $this->load->helper('html');  
      $this->load->model('admin/admin_model');
      $data = $this->admin_model->general();
    
     $this->load->model('admin/admin_deal_model');
    
      $data['query'] = $this->admin_deal_model->getall_by_brand($name);
      $this->load->model('admin/admin_category_model');
      $data['query1'] = $this->admin_category_model->getall();
      $data['dvbrand'] = $name;	             
      $this->load->view('admin/deal_view',$data);
    }
    function test1($name="")
    { 
      $this->load->helper('form'); 
      $this->load->helper('html');  
      $this->load->model('admin/admin_model');
      $data = $this->admin_model->general();
      $this->load->model('admin/admin_brands_model');
      $temp = $this->admin_brands_model->get_by_id($name);
       redirect('admin/admin_deal/test/'.$temp['name'],'refresh');
    }
    function inp()
    {
    
       $this->load->library('session');
       if($this->session->userdata('logged_in'))
      { 
        $this->load->model('admin/admin_model');
         $this->load->model('myModel');
         $data = $this->admin_model->general();
        $this->load->model('admin/admin_category_model');
         $data['query'] = $this->admin_category_model->getall();
         $this->load->view('admin/deal_input_view',$data);  
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
                $this->load->model('admin/admin_deal_model');
                $data = $this->admin_model->general();
        
                                   
                      
                if($this->input->post('dsubmit')&&$this->input->post('dname')!="")
                {
                if($this->input->post('id')>-1&&$this->input->post('id')!="")
                 {        
                $this->admin_deal_model->entry_update(); 
               redirect('admin/admin_deal/test1/'.$this->input->post('dbrand'),'refresh');
                  }
                else
                {               
                  $this->admin_deal_model->entry_insert();
                   redirect('admin/admin_deal/test/'.$this->input->post('dbrand'),'refresh');
                }
    
                }
             
                  
            if($un!="")
                {  
                 $query = $this->admin_deal_model->get(str_replace('%20', ' ', $un));
                 $data['dvbrand']         = $query['brand_id'];
                 $data['dvpdate']         = $query['create_time'];
                 $data['dvhtml']          = $query['description'];  
                 $data['did']             = $query['id'];
                 $data['dvname']          = $query['name']; 
                 $data['dvcategory']       = $query['category_id'];
                 $data['dvedate']          = $query['expire_time'];                                  
                 $data['dvrprice']        = $query['realPrice'];
                 $data['dvdprice']        = $query['discountPrice'];
                 $data['dvimage']= $query['image'];
               
                if($query['status']=='ACTIVE')
                {                        
                $data['sel']='checked';
                }
                else
                {
                $data['sel']='';	  
                }
                 $data['dvsubmit']            = 'Update';
                 $this->load->model('admin/admin_category_model');
                 $data['query'] = $this->admin_category_model->getall();
                }       
                $this->load->view('admin/deal_input_view',$data);
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
                    $this->load->model('admin/admin_deal_model');
                    $query = $this->admin_deal_model->get(str_replace('%20', ' ', $name));
                    $this->load->model('admin/admin_brands_model');
                    $query1 = $this->admin_brands_model->get_by_id($query['brand_id']);
                    $brndnam = $query1['name']; 
                    $this->admin_deal_model->delete(str_replace('%20', ' ', $name));           
                    $this->load->model('admin/admin_model');        
                    $data = $this->admin_model->general();
                    $data['query'] = $this->admin_deal_model->getall();
                    redirect('admin/admin_deal/test/'.$brndnam,'refresh');                            
      }
                           else
      {
       redirect('index', 'refresh');    
      }     
      }
        
}