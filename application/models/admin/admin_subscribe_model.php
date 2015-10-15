<?php
class admin_subscribe_model extends CI_Model
{
 	function admin_subscribe_model(){
             parent::__construct();        
            $this->load->helper('url');				
 	}
        function entry_insert()
        {
    $this->load->database();
	$data = array(
        		  'email_id'=>$this->input->post('femail'),         
	        );
	$this->db->insert('subscriber',$data);
         }
  
         function getall()
         {
         $this->load->database();
  $query = $this->db->get('subscriber');
  return $query->result();
  }
  
   function delete($u_id)
  {
  $this->load->database();
  $this->db->delete('subscriber', array('email_id' => $u_id)); 
}

 function get($u_id)
{
$this->load->database();
   $query = $this->db->get_where('subscriber',array('email_id'=>$u_id));
   return $query->row_array();		  
 }
  
}


