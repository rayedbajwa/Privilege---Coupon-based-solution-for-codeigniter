<?php
class Purchased extends CI_Model
  {
   
    public function add_deal($uid,$did)
    
    { 
        $data=array(
            'user_id'=>$uid,
            'deal_id'=>$did
            
            
        );
       $this->db->insert('purchased',$data) ;
       $id=$this->db->insert_id();
       return $id;
    }
    public function ret_deals()
    {
        $q=$this->db->get_where('purchased',array('user_id'=>$this->session->userdata('userid')));
        
        return $q->result();
        
    }
    
    public function ret_pur_deals($user)
    {
        
        $q=$this->db->get_where('purchased',array('user_id'=>$user));
        $pur=$q->result();
        
        foreach($pur as $row){
            $res=array();
            
        $q1=$this->db->get_where('deals',array('id'=>$row->deal_id));
        $q2=$this->ret_coup($row->coup_id);
        $res1=array_merge($q1->row_array(),$q1->row_array(),array('coup'=>$q2,'pur_id'=>$row->id));
        
        array_push($res,$res1);
        }
        return $res;
    }
    public function ret_coup($coup_id)
    {       
        $q=$this->db->get_where('coupon',array('id'=>$coup_id));
        
        $row =$q->row();
      return $row->data;
        
    }
    public function view_deals()
    {
        
        $deals=$this->ret_deals();
        
        foreach($deals as $row)
        {
        $data=$this->db->get_where('deals',array('id'=>$row->deal_id));
        $dat[]=''; 
            $dat=$data->row_array();
            $dat=array_merge($dat,array('coup'=>$this->ret_coup($row->coup_id),'pur_id'=>$row->id));
          $yo[]=$dat;
        }
        if(!empty($yo)){
        return $yo;}
        
    }
    function delDeal($purid)
    {
        var_dump($purid);
       
        $this->db->delete('purchased',array('id'=>$purid));
        redirect('deals');
        
    }
    
  }

?>