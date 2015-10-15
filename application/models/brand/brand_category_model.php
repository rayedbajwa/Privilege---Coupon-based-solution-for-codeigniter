<?php
class brand_category_model extends CI_Model
{
 	function admin_category_model()
        {
         parent::__construct();
  		$this->load->helper('url');				
 	}
       function entry_insert()
        {
    $this->load->database();
	$data = array(
                          'id' => NULL,
                          'name'=>$this->input->post('fname'), 
                         'type'=>$this->input->post('ftype'),    
	                );
	$this->db->insert('category',$data);
         }
  
         function getall()
         {
         $this->load->database();
         $query = $this->db->get('category');
         return $query->result();
         }
  
         function delete($username)
        {
        $this->load->database();
        $this->db->delete('category', array('name' => $username)); 
        }

 function get($username)
{
$this->load->database();
   $query = $this->db->get_where('category',array('name'=>$username));
   return $query->row_array();		  
 }
 
}


