<?php
class Verifypay extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	
	}
	public function verify()
	{
            
            
            $this->load->model('pay');
            $data=$this->input->post();
        if(!$this->pay->checkMem($this->session->userdata('userid'))){
        $this->pay->updatePaid($data['user_id']);
    $this->pay->addMember($data);
            }
 else {
   
     $this->pay->extendMember($data['user_id'],$data['months']);
      $this->pay->updatePaid($data['user_id']);
     $this->pay->updateMem($this->session->userdata['userid'],$data['mtype']);
 }
       
		        $this->cart->destroy();
            echo 'Verified';
            
	}
	
    
}

?>