<?php

class Home extends CI_Controller{
 
 
 

public function index()

{
    $this->load->model('maindb');
                   
                 if(isset($_GET['category'])  ){
                     if($_GET['category']=='1')
                     { $dat['viewdeals']=$this->maindb->getAllDeals();}
                     else
                 $dat['viewdeals']= 
                     $this->maindb->getDealByCat($_GET['category']);
                 }
                 
                 else
                     {
                     
                     $dat['viewdeals']=$this->maindb->getAllDeals();
                     }                     
                     $dat['viewcat']=$this->maindb->getAllCat();
                     

                     
               $this->load->view('home',$dat);
}
}
?>
