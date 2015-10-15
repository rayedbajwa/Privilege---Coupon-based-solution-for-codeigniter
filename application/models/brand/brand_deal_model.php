<?php
class brand_deal_model extends CI_Model
{
 	function brand_deal_model(){
         parent::__construct();
  		$this->load->helper('url');				
 	}
        function entry_insert()
        {
        $this->load->database();
        $this->load->helper('date');
        $datestring = "%Y-%m-%d";
        $time = time();
          
          
        if($this->input->post('dactivate')=='yes')
        {
        $sta='ACTIVE';
        }
        else 
        {
        $sta='EXPIRED';
        }
        $this->load->model('admin/admin_category_model');
        $query = $this->admin_category_model->get($this->input->post('dcatagory'));
        $catid = $query['id'];
        $this->load->model('admin/admin_brands_model');
           $query = $this->admin_brands_model->get_by_userid($this->session->userdata('userid'));
            $brndid = $query['id'];
       $config['upload_path'] = './assets/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
                        $str='';
		}
		else
		{
			$data1 = $this->upload->data();
                       echo $data1["file_name"];
                       
			$str='assets/images/'.$data1['file_name'];
		}
        
    	$data = array( 
 	  'brand_id'=>$brndid,
	  'create_time'=>mdate($datestring, $time),
          'description'=>$this->input->post('dhtml'),               
          'id' => NULL,
          'image'=>$str,
          'name'=>$this->input->post('dname'),
          'category_id'=>$catid,
    	 'expire_time'=>$this->input->post('dedate'),	
         'realPrice'=>$this->input->post('drprice'),
          'discountPrice'=>$this->input->post('ddprice'),                  
          'status'=> $sta,                 
	        );
                
	$this->db->insert('deals',$data);
      
        }
     
  function getbrand_by_userid($id)
{
    $this->load->database();
   $query = $this->db->get_where('brands',array('user_id'=>$id));
   return $query->row_array();		  
 }  
         function getall()
         {
    
             $this->load->database();
  $query = $this->db->get('deals');
  return $query->result();
  }
     function getall_by_brand($username)
   {
              $this->load->database();
              $query = $this->db->get_where('deals',array('brand_id'=>$username));
              return $query->result();	
   }
   function delete($username)
   {
  $this->load->database();
  $this->db->delete('deals', array('name' => $username)); 
}

 function get($username)
{
   $this->load->database();
   $query = $this->db->get_where('deals',array('name'=>$username));
   return $query->row_array();		  
 }
  function entry_update()
 {
   
    $this->load->database();
      if($this->input->post('dactivate')=='ACTIVE')
      {
        $sta='ACTIVE';     
      }
      else 
     {
         $sta='EXPIRED';
     }      
      $this->load->model('admin/admin_category_model');
      $query = $this->admin_category_model->get($this->input->post('dcatagory'));
      $catid = $query['id'];
      $query = $this->get($this->input->post('dname'));
       $config['upload_path'] = 'g:/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
$query = $this->get($this->input->post('dname'));
		if ( ! $this->upload->do_upload())
		{
	 
     $data1['full_path']=$query['image'];
		}
		else
		{
			$data1 = $this->upload->data();
		}
           
      $this->load->model('admin/admin_brands_model');
      $data = array(	                 
          'brand_id'=>  $this->input->post('dbrand'),
	  'create_time'=>$query['create_time'],
          'description'=>$this->input->post('dhtml'),               
          'id' => $this->input->post('id'),
          'image'=>$data1['full_path'],
          'name'=>$this->input->post('dname'), 
          'category_id'=>$catid,
    	 'expire_time'=>$this->input->post('dedate'),	
         'realPrice'=>$this->input->post('drprice'),
          'discountPrice'=>$this->input->post('ddprice'),                  
          'status'=>$sta,
	            );
      $this->db->where('id',$this->input->post('id'));
      $this->db->update('deals',$data);  
  }
}

