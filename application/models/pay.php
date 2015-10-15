<?php

class Pay extends CI_Model
{
	function submit($cdata)
	{
		$q=$this->db->insert('payment',$cdata);

	}
    function updatePaid($id)
    {
        
       
        $this->db->where('id',$id);
        $dat= array(
        'paid'=>'Y'
            
        
        );
        
        
    $this->db->update('users',$dat);
        
        
        
        
    }
    
    
    public function checkMem($id)
    {
        
            $q=$this->db->get_where('member',array('user_id'=>$id));
            
          if($q->num_rows() >0)
          {
          return TRUE;}
          else
          {return FALSE;
          }
           
        
        
    }
     public function retMem($id)
    {
        
            $q=$this->db->get_where('member',array('user_id'=>$id));
            
          $row=$q->result_array();
          return $row[0]['mtype'];
           
        
        
    }
     public function paidCheck($id)
       {
            $this->db->select('paid');
            $q=$this->db->get_where('users',array('id'=>$id));
           return $q->result();
       }
    public function memStat($id)
       {
          
           $que=$this->db->get_where('member',array('user_id'=>$id));
           
           
           $row=$que->result_array();
           $name=$row[0]['mtype'];
           $mid=$this->db->get_where('products',array('name'=>$name));
           $namear=$mid->result_array();
         
           $nid=$namear[0]["id"];
         return array_merge_recursive($row,array('pid'=>$nid));
           
          
           
       }
    function addMember($data)
    {
        
          $date = date('Y-m-d', time());
                
                 $exdate= date('Y-m-d',strtotime("+".$data['months']." months",time()));
       $dat= array(
       'expire_time'=> $exdate,
        'join_time'=>$date,
           'mtype'=>$data['mtype'],
           
           'user_id'=>$data['user_id']
           
            
           
       );
   $this->db->insert('member',$dat);
     
        $quer=$this->db->get_where('member',array('user_id'=>$data['user_id']));
           $res=$quer->row();
        $id=$res->id;
        
        $this->db->where('id',$data['user_id']);
        $this->db->update('users',array('member_id'=>$id));
        
    
    }
	public function extendMember($id,$months)
        {
          
           $this->db->select('expire_time');
          $q= $this->db->get_where('member',array('user_id'=>$id));
           $row=$q->result_array();
          
         $old=$row[0]['expire_time'];
          
          $exdate= date('Y-m-d',strtotime($old."+".$months." months"));
          
          $data=array('expire_time'=>$exdate);
          $this->db->where('user_id',$id);
          $this->db->update('member',$data);
             
        } 
        function updateMem($id,$mem)
    {
        
       
        $this->db->where('user_id',$id);
        $dat= array(
        'mtype'=>$mem
            
        
        );
        
        
    $this->db->update('member',$dat);
        
        
        
        
    }
}
?>