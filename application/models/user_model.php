<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
 function login($username, $password)
 {
   $this -> db -> select('id, flag , username, email , password ');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 function get_id($em)
 {
  $this->load->database();
   $query = $this->db->get_where('users',array('email'=>$em));
   return $query->row_array();	 }
 
 public function create_session($sec_data)
 {
  
     $this->session->set_userdata($sec_data);
 }
 public function destory_session()
	{
		$this->session->sess_destroy();
	}

	public function loggedin ()
	{
		return (bool) $this->session->userdata('loggedin');
	}
       function user_update()
	{
	
	$this->db->query("UPDATE users SET status='Yes' WHERE email='".$this->input->post('email')."';");

		}

		function pass_update()
	{
	$this->db->query("UPDATE users SET password='". md5($this->input->post('pass'))."' WHERE id='".$this->input->post('id')."' AND username ='".$this->input->post('un')."';");
         }
	
	public function add_user()
	{
		$data=array(	  
                    'id' => NULL ,
                    'flag'=> 'User',
                    'name'=>$this->input->post('user_full_name'), 
			'username'=>$this->input->post('user_name'),
			'email'=>$this->input->post('email_address'),
			'password'=>md5($this->input->post('password')),
		     'status'=>'0',	
                    );
		$this->db->insert('users',$data);
	}
        public function add_sub()
	{
		$data=array(
                    	'email_id'=>$this->input->post('subEmail'),
			);
		$this->db->insert('subscriber',$data);
	}
}
?>