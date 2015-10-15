<?php

class mainPage extends CI_Controller
{
    
    function mainPage()
    {
        parent::__construct();
    $this->load->model('user_model');     
    }
    function index()
    {
       $this->load->helper('form');  
       $this->load->helper('html');    
       $this->load->library('session');
	
      if($this->session->userdata('logged_in'))
      {
       $this->load->model('admin/admin_model');
      $this->load->model('admin/admin_deshboard');
       $data = $this->admin_model->general();
       $data['usercount']  = $this->admin_deshboard->getallUser();
       $data['brandcount']  = $this->admin_deshboard->getallBrands();
       $data['catcount']  = $this->admin_deshboard->getallCat();
       $data['Dealcount']  = $this->admin_deshboard->getallDeals();
       $data['subcount']  = $this->admin_deshboard->getallSub();
       $data['visitscount']  = $this->admin_deshboard->getallVisiter();
       
       $this->load->view('admin/index',$data);
      }
      else
      {
          redirect('main', 'refresh');    
      }
    }
    function  logout()
    {    
    $this->user_model->destory_session(); 
    redirect('main', 'refresh');    
    }
    
}

