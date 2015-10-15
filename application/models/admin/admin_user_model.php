<?php
class admin_user_model extends CI_Model
{
 	function admin_user_model(){
         parent::__construct();
  		$this->load->helper('url');				
 	}
              function entry_insert()
        {
    $this->load->database();
	$data = array(
                          'id' => NULL,
                          'flag'=>$this->input->post('ftype'),
	                  'name'=>$this->input->post('fname'), 
                          'username'=>$this->input->post('fusername'),
			  'email'=>$this->input->post('femail'),
                           'password'=>md5($this->input->post('fpassword')),
			   'status'=>$this->input->post('fstatus'),
	        );
	$this->db->insert('users',$data);
        if($this->input->post('ftype')=='Brand')
        {
            $data1 = array(
                       
                          'username'=>$this->input->post('fusername'),
			   'status'=>'free',
	        );
        $this->db->insert('branduser',$data1);
        
           
        }
        }
        
  
         function getall()
         {
         $this->load->database();
  $query = $this->db->get('users');
   
  return $query->result();
  }
  
   function delete($username){
  $this->load->database();
  $this->db->delete('users', array('name' => $username));
   
}
function delete_by_id($uid){
  $this->load->database();
  $this->db->delete('users', array('id' => $uid)); 
  }
   
 function getByUsername($username)
{
   $this->load->database();
   $query = $this->db->get_where('users',array('username'=>$username));
   return $query->row_array();	
    
 }

function get($username)
{
   $this->load->database();
   $query = $this->db->get_where('users',array('name'=>$username));
   return $query->row_array();	
  	  
 }
  function getById($id)
{
   $this->load->database();
   $query = $this->db->get_where('users',array('id'=>$id));
   return $query->row_array();		  
 }
  function entry_update()
  {
   $this->load->database();   
 
   
$data = array(
	                  'id' =>  $this->input->post('id'),
                          'flag'=>$this->input->post('ftype'),
	                  'name'=>$this->input->post('fname'), 
                          'username'=>$this->input->post('fusername'),
			  'email'=>$this->input->post('femail'),
                           'password'=>$this->input->post('fpassword'),
			   'status'=>$this->input->post('fstatus'),			 
	        );       
     
 
   
$this->db->where('id', $this->input->post('id'));
$this->db->update('users',$data);  
 }
}