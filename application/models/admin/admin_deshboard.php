<?php
class admin_deshboard extends CI_Model
{
   	
    function admin_deshboard(){
             parent::__construct();        
            $this->load->helper('url');				
 	}
       
    
   function getallUser()
   {
       
  $this->load->database();
  return $this->db->count_all_results('users');
  }
  
  function getallBrands()
   {
       
  $this->load->database();
  return $this->db->count_all_results('brands');
  }
  function getallCat()
   {
       
  $this->load->database();
  return $this->db->count_all_results('category');
  }
  function getallDeals()
   {
  $this->load->database();
  return $this->db->count_all_results('deals');
  }
  function getallSub()
   {
       
  $this->load->database();
  return $this->db->count_all_results('subscriber');
  }
  function getallVisiter()
   {
       
  $this->load->database();
  return $this->db->count_all_results('users');
  } 
  
}


