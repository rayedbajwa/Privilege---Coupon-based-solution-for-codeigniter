<?php
class admin_category_model extends CI_Model
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
                         
                          'name'=>$this->input->post('fname'), 
                          
			  'type'=>$this->input->post('ftype'),
                          'icon'=>$this->input->post('userfile'),
                          'color'=>$this->input->post('cat_color'),
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
  function entry_update(){
   $this->load->database();
   
      
$data = array(
	                 
                          'id' =>$this->input->post('id'),
                          'name'=>$this->input->post('fname'), 
			  'type'=>$this->input->post('ftype'),
			  'icon'=>$this->input->post('userfile'),
                          'color'=>$this->input->post('cat_color'),
	 );
$this->db->where('id',$this->input->post('id'));
$this->db->update('category',$data);  
 }
}