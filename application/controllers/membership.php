<?php

class Membership extends CI_Controller
{
    
    function __construct()
    
            {
        
                parent::__construct();
            }
            
        function index()
        {
            
            $this->load->model('maindb');
    $this->load->model('pay');
          $id=$this->session->userdata('userid');
              $data['viewall']=$this->maindb->getAllProducts();
           
          $this->load->view('home_prod',$data);
              
           
        }
    
}

?>