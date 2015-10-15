<?php                
   class Cart extends CI_Controller
   {                
                function __contruct()
                {
                    parent::__construct();
                    
                      $this->load->library('cart');
                    
                             $this->load->model('maindb');
                }
                
                  
            function viewCart(){
                
               
                      $q=$this->session->userdata['userid'];
                     $paid='';
                          $this->load->model('pay');
                          $res=$this->pay->paidCheck($q);
             foreach($res as $row){
            $paid=$row->paid;}
                                   
                     if($this->session->userdata('logged_in')){
               
                     if(!$this->pay->checkMem($q) && $this->cart->total_items()==0)
                     {
                         
                        $this->load->view('temp_navbar');
                         $this->load->view('empty_cart');
                         $this->load->model('maindb');
                         $data['viewall']=$this->maindb->getAllProducts();
                         $this->load->view('home_prod',$data);
                         $this->load->view('temp_footer');
                         
                     }
 elseif ($this->cart->total_items()>0 ){
                        
                        redirect('pay');}
else{ 
                          $this->load->view('temp_navbar');
                 $data['stat']=$this->pay->memStat($q);
                    
                    $this->load->view('mem_status',$data);
                     $this->load->view('temp_footer');
                         
                     }
                     }
                     else
                     {
                         
                         redirect('main');
                     }
                     
   } 
   function extendMem()
   {
       
       
            
               
              
                      $this->load->model('maindb');
      $usid= $this->session->userdata['userid'];
              
                 $this->maindb->paidN($usid);          
              $months=$this->input->post('quan');
            $q=     $this->maindb->searchById($this->input->post('pid'));
              
            
                      foreach($q as $row){    
              
                    $yo=array(
                        'id'=>$row->id,
                        'qty'=>$this->input->post('quan'),
                        'price'=> $row->price,
                        'name'=>$row->name
                        
                    )  ;
                     }
                                         
                           $this->cart->insert($yo);
                    
                                     
                              
                               
                         $this->viewCart();   }
                
                        
                  
     function add_new_item()
       { $paid=''; 
        
      $usid=$this->session->userdata['userid'];
          
         $this->load->model('pay');
          $qid=$this->session->userdata['userid'];
                          $res=$this->pay->paidCheck($qid);
             foreach($res as $row){
            $paid=$row->paid;}
                        if($this->session->userdata('logged_in'))
                        {
                         if($this->cart->total_items()>0 && $paid=='N'){
                             $this->load->view('temp_navbar');
                             $this->load->view('paymentdue');
                             $this->load->view('temp_footer');
                             
                         }      else{
                      $this->load->model('maindb');
             
       
           $q=     $this->maindb->searchById($this->input->post('pid'));
           
                     foreach($q as $row){    
              
                    $yo=array(
                        'id'=>$row->id,
                        'qty'=>$this->input->post('quan'),
                        'price'=> $row->price,
                        'name'=>$row->name
                        
                    )  ;
                     }
                                     
                                
                                $this->maindb->paidN($usid);           
                           $this->cart->insert($yo);
                           
                               
                         $this->viewCart();   }
                         }
                         else
                         {
                             redirect('main');
                             
                         }
       }
       
        function update_item()             
   {                                               
 
   $i=1;
  foreach($this->input->post('rowid') as $row)
  {               $a=implode($this->input->post($i));
      $data=array(
            'rowid'=>$row  ,
      'qty'=>$a
      )        ;
      $this->cart->update($data);
      $i++;
      
  }
                           
                           
                           
                                  $this->load->view('cart/viewCart');
   }      
   
   function empty_cart()
   
   {
       $this->cart->destroy();
       redirect('cart/viewCart');
       
   }                                                 
   }
 
  
?>
