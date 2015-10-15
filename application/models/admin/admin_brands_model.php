<?php
class admin_brands_model extends CI_Model
{
 	function admin_brands_model(){
         parent::__construct();
  		$this->load->helper('url');				
 	}
        function entry_insert()
        {
        $this->load->database();
$this->load->model('admin/admin_user_model');      
$quer=$this->admin_user_model->getByUsername($this->input->post('fbu'));

$data = array(
                            'id' => NULL,
                          'name'=>$this->input->post('fname'), 
                           'website'=>$this->input->post('fwebsite'),
			   'email'=>$this->input->post('femail'),
	                    'address'=>$this->input->post('faddress'),
			   'status'=>$this->input->post('fstatus'),  
                           'user_id'=>$quer['id'],          
        );
	$this->db->insert('brands',$data);
        $this->load->database();
       $data1 = array(
	                     
                          'username'=>$this->input->post('fbu'), 
			   'status'=>'used',  
	 );
    $this->db->where('username',$this->input->post('fbu'));
    $this->db->update('branduser',$data1);
        }
  
         function getall()
         {
         $this->load->database();
         $query = $this->db->get('brands');
         return $query->result();
         }
  
   function delete($username)
         {
  $this->load->database();
  $this->db->delete('brands', array('name' => $username)); 
        }
    function getUser()
    {
    $this->load->database();
    $query = $this->db->get_where('branduser',array('status'=>'free'));
    return $query->result();		  
    }

 function get($username)
{
   $this->load->database();
   $query = $this->db->get_where('brands',array('name'=>$username));
   return $query->row_array();		  
 }
  function get_by_userid($id)
{
    $this->load->database();
   $query = $this->db->get_where('brands',array('user_id'=>$id));
   return $query->row_array();		  
 }

 function get_by_id($id)
{
    $this->load->database();
   $query = $this->db->get_where('brands',array('id'=>$id));
   return $query->row_array();		  
 }
  function entry_update(){
   $this->load->database();
$data = array(
	                     
                          'id' => $this->input->post('id'),
                          'name'=>$this->input->post('fname'), 
                           'website'=>$this->input->post('fwebsite'),
			   'email'=>$this->input->post('femail'),
	                    'address'=>$this->input->post('faddress'),
			   'status'=>$this->input->post('fstatus'),  
	 );
$this->db->where('name',$this->input->post('fname'));
$this->db->update('brands',$data);  
 }
}


