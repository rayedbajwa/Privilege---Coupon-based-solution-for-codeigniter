<?php
class Session extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
	}
	public function index()
    {
    
    $this->load->library('session');
        var_dump($this->session->all_userdata());
        
       
    }
    public function update($user)
    {
        $data=array('user_name'=>$user);
        $this->session->set_userdata($data);
    }
    public function session_out()
    {
    $this->session->sess_destroy();
    
    }
}


?>