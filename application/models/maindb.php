<?php

class maindb extends CI_Model {

    public function getAllProducts(){
        $q = $this->db->get('products');
        $res  = $q->result();
       return $res;
    }
    function searchById($id)
    
    {
                                  
        $q=$this->db->get_where('products',array('id'=>$id))  ;
      return $q->result();
        
    }
 function getDealByCat($id)
    
    {
                           
        $q=$this->db->get_where('deals',array('category_id'=>$id,'status'=>'ACTIVE'))  ;
     $res=$q->result();
   $i=0;
         foreach($res as $row){
             
            
           $res[$i]->brand_name=$this->ret_brand($row->brand_id)->name;
           $i++;
     }
        return $res;
    }
                      public function getAlldeals()
    {
        
         $q=$this->db->get_where('deals',array('status'=>'ACTIVE'));
        $res=$q->result();
         $i=0;
         foreach($res as $row){
             
            
           $res[$i]->brand_name=$this->ret_brand($row->brand_id)->name;
           $i++;
     }
      
        return $res;
    }
                      public function getAlldealsById($id)
    {
        
         $q=$this->db->get_where('deals',array('id'=>$id));
        $res=$q->result();$i=0;
           foreach($res as $row){
             
            
           $res[$i]->brand_name=$this->ret_brand($row->brand_id)->name;
           $i++;
     }
        return $res;
    }
    
                     public function getAllCat()
    {
        
         $q=$this->db->get('category');
        $res=$q->result();
        return $res;
    }
        public function retimgpath($id)
        {
            
            $this->db->select('image');
            $q=$this->db->get_where('deals',array('id'=>$id));
            
                  return $q->result();
        }
       public function paidCheck($id)
       {
            $this->db->select('paid');
            $q=$this->db->get_where('users',array('id'=>$id));
            
           return $q->result();
       }
       public function paidN($id)
       {
           
           $data=array('paid'=>'N');
           $this->db->where('id',$id);
           $this->db->update('users',$data);
         
       }
    
       public function ret_brand($id)
       {
           $this->db->select('name');
           $q=$this->db->get_where('brands',array('id'=>$id));
           $res=$q->row();
       
           return $res;
       }
    

}