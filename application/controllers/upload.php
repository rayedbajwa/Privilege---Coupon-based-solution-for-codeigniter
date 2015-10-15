<?php
class Upload extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
       
	
	}
	public function do_upload()
	{
		
       $config['upload_path']='./assets/images/receipts/';
        $config['allowed_types']='gif|jpg|png|bmp|jpeg';
        $config['max_size']='2048';
     
		$this->load->library('upload',$config);
        $this->upload->initialize($config);
        $this->upload->do_upload('picFile');
        
     
       $data=$this->upload->data();
       
        
      $usern=$this->session->userdata('userid');
       
       $yo=array('receipt_pic'=>$data['file_name']);
      $dats=$this->input->post();
    
     $dats=  array_merge($yo,$dats);
       $dats=  array_merge($dats,array('user_id'=>$usern));
        $this->load->model('pay');
        $this->pay->submit($dats);
      $daty['hey']=$dats;
           $this->load->view('pay_confirm',$daty);

     
	}
	
    
}


?>