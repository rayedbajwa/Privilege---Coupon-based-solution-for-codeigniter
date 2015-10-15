<?php

class homepage extends CI_Controller
{
    function homepage()
    {
        parent::__construct();
    }
    function index()
    {
       
      $this->load->view('homepage_view');
    }
 
}
?>