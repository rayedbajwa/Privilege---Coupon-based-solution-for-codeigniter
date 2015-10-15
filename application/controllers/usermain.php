<?php

class UserMain extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
        

    }
    public function index(){
               
                 $this->load->model('maindb');
                     $dat['viewall']=$this->maindb->getAllProducts();
        $this->load->model('pay');
              $q=$this->session->userdata['userid'];
              $res=$this->pay->paidCheck($q);
             foreach($res as $row)
                 $paid=$row->paid;
        if($paid=='N')
        $this->load->view('home_prod',$dat) ;
        else
        {
        echo 'Already a Member';
        $this->load->view('home');    
        }
 
    }
}