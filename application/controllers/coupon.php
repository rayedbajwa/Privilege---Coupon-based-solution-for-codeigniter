<?php
  class Coupon extends CI_Controller
 {
     public function __contruct()
     {
         
         parent::__construct();
        
         
     }
     public function index()
     {                    $this->load->model('coup');
         $data['coup']=$this->coup->getAllCoupons();
         $this->load->view('coupons',$data);
         
     }
     
                public function gen_coupon()
                {
                     $this->generate();
                    $this->load->model('coup');
                    $did= $this->input->post('did') ;
                       
                
                $exist=$this->coup->exist($did);
                    
                               
                                   $q=$this->coup->rand_coup();
                                   
                       $i=0;              
                    if($q)
                      {         
                         foreach($q as $row)
                       
                           $this->db->where('id',$row->id);
                           $this->db->update('coupon',array('p_id'=>$did))  ;
                         $i++;
                  }          
                  
                     else {
                         echo 'No More Coupons<br>';
                         
                     } $total=$this->coup->unused();  
                          $res=$this->coup->getcoupon($did);
                          echo "Coupons generated: ".$i.'<br>';    
                       
                          
                      
                                
                             
                }
                function view()
                {   
                     
                               
                    $this->load->model('coup');
                    $did= $this->input->post('did') ;
                      $qty=$this->input->post('qty');  
                      $res=$this->coup->getcoupon($did);
                       foreach($res as $row)
                          echo '<li>'.$row->data.'</li>';
                         
                      
                }
                
              
                     
                     
                 
                // $this->index();
                            
                            function destroy_all()
                            {
                            	$this->db->empty_table('coupon');     
                            	echo 'All coupons Destroyed'; 
                            	$this->load->view('home');            
                             }  
}
