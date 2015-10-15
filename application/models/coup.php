<?php
  class Coup extends CI_Model
  {
            public function getAllCoupons(){
        
        $q=$this->db->get('coupon');
        $res=$q->result();
        return $res;
        
        
    }
     public function gen_coupon($id)
                {
                   $this->generate();
                                   $q=$this->rand_coup();
                                  
                    if($q)
                      {         
                         
                         $this->db->where('id',$id);
                           $this->db->update('purchased',array('coup_id'=>$q[0]['id']))  ;
                           $this->db->update('coupon',array('consume'=>'Y'),array('id'=>$q[0]['id']));
                         
                  }          
                  
                     else {
                         echo 'No More Coupons<br>';
                         
                }}
       public function rand_coup()
        {
               
                 $this->db->order_by('id','RANDOM');
                 $this->db->limit(1);
            $q=$this->db->get_where('coupon',array('consume'=>'N'));
            var_dump($q->result_array());
            return $q->result_array();
            
            
            
        }
        public function exist($id)
        {
            
            $q=$this->db->get_where('coupon',array('p_id'=>$id));
               return $q->num_rows();
            
            
        }
      
      
      public function getcoupon($pid)
      {
          $q=$this->db->get_where('coupon',array('p_id'=>$pid,'consume'=>'N'));
         return $q->result();
         
          
          
      }
      public function unused()
      {
          
          $q=$this->db->get_where('coupon',array('deal_id'=>0));
            return $q;
      }
      public function generate()
      {
           $date = date('Y-m-d', time());
                
                 $exdate= date('Y-m-d',strtotime("+3 months",time()));
                      $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

                
          
           
                
                   $res = "";   
      for ($j = 0; $j < 10; $j++) {
      $res .= $chars[mt_rand(0, strlen($chars)-1)];}


            
                 $data=array(
                 'data'=>$res,
                 'create_time'=>$date,
                'expire_time'=>$exdate
                 );
      $this->db->insert('coupon',$data);
          
      }
  }
?>
