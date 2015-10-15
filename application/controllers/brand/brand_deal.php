  <?php

class brand_deal extends CI_Controller
{
   
    function brand_deal()
    {
        parent::__construct();
        
    }
    
    function index()
    {
        $this->load->library('session'); 
        $this->load->helper('form'); 
        $this->load->helper('html');    
         if($this->session->userdata('logged_in'))
      {
        $this->load->model('brand/brand_model');
        $data = $this->brand_model->general();
        $this->load->model('brand/brand_deal_model');
        $que=$this->brand_deal_model->getbrand_by_userid($this->session->userdata('userid')); 
        $data['query'] = $this->brand_deal_model->getall_by_brand($que['id']);        
        $this->load->model('brand/brand_category_model');
        $data['query1'] = $this->brand_category_model->getall();
        $this->load->view('brand/deal_view',$data);
      }
 else {
          echo 'heloo';    
      }
         
      }
    
    function inp()
    {
       $this->load->library('session');
       if($this->session->userdata('logged_in'))
      { 
        $this->load->model('brand/brand_model');
         $this->load->model('myModel');
         $data = $this->brand_model->general();
        $this->load->model('brand/brand_category_model');
         $data['query'] = $this->brand_category_model->getall();
         $this->load->view('brand/deal_input_view',$data);  
      }
         
      }
    function input($un="")
              {
        $this->load->library('session');
       if($this->session->userdata('logged_in'))
             {
           
                $this->load->helper('form');  
                $this->load->helper('html'); 
                $this->load->model('brand/brand_model');
                $this->load->model('brand/brand_deal_model');
                $data = $this->brand_model->general();
                
       if($this->input->post('dsubmit')&&$this->input->post('dname')!="")
         {  
                if($this->input->post('id')>-1&&$this->input->post('id')!="")
                 {         
                    $this->brand_deal_model->entry_update(); 
                    redirect('brand/brand_deal', 'refresh');
                  }
                else
                {                
                    $this->brand_deal_model->entry_insert();                    
                    redirect('brand/brand_deal', 'refresh');
                }   
                }
             
                  
                 if($un!="")
                {  
                 $query = $this->brand_deal_model->get(str_replace('%20', ' ', $un));
                
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
                 
                $this->load->view('brand/deal_input_view',$data);
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
                  redirect('brand/brand_deal', 'refresh');                   
                         
      }
                           else
      {
       redirect('index', 'refresh');    
      }     
      }
        function  logout()
    {    
    $this->load->model('user_model');
    $this->user_model->destory_session(); 
    redirect('main', 'refresh');    
    } 
    
}