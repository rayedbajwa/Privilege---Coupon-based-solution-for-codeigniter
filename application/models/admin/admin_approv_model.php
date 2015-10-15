<?php
class admin_approv_model extends CI_Model
{
 	function admin_approv_model(){
         parent::__construct();
  		$this->load->helper('url');				
 	}
      
        
  
         function get_panding()
         {
   $this->load->database();
   $query = $this->db->query("select * from users where id IN (select user_id from payment where verified='N')");
  return $query->result();
  }
  
      function get_unpaid()
         {
   $this->load->database();
   $query = $this->db->query("select * from users where id NOT IN (select user_id from payment ) AND flag = 'User' AND paid='N' ");
  return $query->result();
  }
 function get_detail($username)
{
   $this->load->database();
    $query = $this->db->query("select * from payment where user_id = (select id from users where username='".$username."' )");
     return $query->row_array();	
    
 }
  
 function verified()
{
      $this->load->database();
        $this->db->where('id',$this->input->post('id'));
        $dat= array(
        'paid'=>'Y'
        );
        
    $this->db->update('users',$dat);
        
        $this->db->where('user_id',$this->input->post('id'));
        $dat= array(
        'paid'=>'Y'
        );
        
    $this->db->update('payment',$dat);

    
 }
   
 function getById()
{
   $this->load->database();
   $query = $this->db->get_where('users',array('id'=>$this->input->post('id')));
   return $query->row_array();	
    
 }


}