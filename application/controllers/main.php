<?php

class main extends CI_Controller
{
    function main()
    {
        parent::__construct();
    }
    function index()
    {
        $this->load->helper('form');  
     //           $this->load->helper('html');    
    //         $this->load->model('main_model');
    //   $data = $this->main_model->general();
        $this->load->helper('url');  
        $this->load->model('admin/admin_deal_model');
        $this->admin_deal_model->date_update();
        $data['login_error']='';
    $this->load->view('leadingPage',$data);
      $this->load->view('temp_footer');
    }
    function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('main');
 }
}
?>