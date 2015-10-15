<?php
     class Deals extends CI_Controller
     {
     public function __contruct()
     {
         parent::__construct();
    
         
     }
     function index()
     {      $this->load->model('purchased');
            $this->load->model('coup');
                            $dat['pdeals']=$this->purchased->view_deals();
                       
                 $this->load->view('temp_navbar');
                 if(!empty($dat['pdeals'])){ 
                 $this->load->view('purchased',$dat);}
                 else
                 {
                     $dat['error']="No Deals Purchased";
                     $this->load->view('empty',$dat);}
                 $this->load->view('temp_footer');
         
     }
     function  add_deal()
     {
                       
                
                
                    $this->load->view('newdeal');
         
     }
             function add_to_cart()
             {
                 $this->load->model('pay');
                 $this->load->model('purchased'); $this->load->model('coup');
                 if($this->session->userdata('logged_in')){
                     
                     
                if($this->pay->checkMem($this->session->userdata('userid')))
                {
               if($this->input->post('id')!=0){
                $q= $this->purchased->add_deal($this->session->userdata('userid'),$this->input->post('id'));
             $this->coup->gen_coupon($q);
               
               }
              
                 $dat['pdeals']=$this->purchased->view_deals();
                redirect('deals');
                }
                else 
                    {redirect('cart');}
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
      
      )        ;
      $this->cart->update($data);
    
      $i++;
      
      
  }
                           $this->load->view('dcart',$data);
   } 

    public  function productdetails()
      {
          if(isset($_GET["id"])){
          $id= $_GET["id"];
          
          
         $this->load->model('maindb');
       $result['desc']=  $this->maindb->getAlldealsById($id);
          $this->load->view('productdetails',$result);}
          else
          {
              $dat['error']="No Detail found";
              $this->load->view('empty',$dat);
              
          }
         
      }
 function delete()
 {
     $purid=$_GET['id'];
     $this->load->model('purchased');
     $this->purchased->delDeal($purid);
     redirect('deals');
 }
 
 function ret_pur()
 {
     
     if(isset($_POST['user'])){
   $user_id= $_POST['user'];
     
      $this->load->model('purchased');
      $res['deals']=$this->purchased->ret_pur_deals($user_id);
     print(json_encode($res));}
 }
     }
?>
