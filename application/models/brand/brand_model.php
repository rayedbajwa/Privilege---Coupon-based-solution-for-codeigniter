<?php
class brand_model extends CI_Model
{
 	function brand_model(){
         parent::__construct();
  		$this->load->helper('url');				
 	}
        function general()
        {
             $this->load->library('brand_menu');
            $menu = new brand_menu;
       
               $data['menu'] 		        = $menu->show_menu();
               $data['base']	              	= $this->config->item('base_url');
               $data['css']		        = $this->config->item('css');
              
  	       $data['webtitle']	        = "<p style=\"text-align:right; font-size:24px; font-weight:bold; padding: 50px 40px 0 0;\">Privilage Admin Panel
      </p>";
              	$data['webfooter']	        = '© wedevz ';
	        $data['id']	                = NULL;
                $data['idd']             	= -1;
                $data['n']                      = '';
                $data['nam']                    = '';
                $data['email']                  = '';
                $data['pass1']                  = '';
                $data['add']                    = '';
                $data['web']                    = '';
                $data['pass']                   = '';
                $data['type']	        	= 'Type';
                $data['utype']	        	= array('Admin'=>'Admin','User'=>'User','Brand'=>'Brand');
                $data['btype']	        	= array('Gold'=>'Gold','Dimond'=>'Dimond','King'=>'King'); 
                $data['cbrand']	        	= array('A'=>'A','B'=>'B','C'=>'C');
                $data['selected']       	= 'admin';  
                $data['selected1']      	= '';  
                $data['selected2']      	= '';  
                $data['brand_selected'] 	= 'admin';  
                $data['status'] 	        = 'Activate';
                $data['check'] 	                = TRUE;
                $data['inputError']             ='';
                $data['musub']                    = 'Add';                 
                $data['tit']                    = '';             
                $data['des']                    = '';
                $data['cate']                   = array('A'=>'A','B'=>'B','C'=>'C');
                $data['catSelected']            = '';
                $data['dis']                    = '';
                $data['uimage']                 = '';
                $data['exp']                    = '';
                $data['pub']                    = '';
                $data['nam']                    = '';
                 $data['did']                    = '';
                  $data['dvname']                    = '';
                  $data['dvdescription']                    = '';        
                $data['dvrprice']                    = '';   
                   $data['dvdprice']                    = '';
		  $data['status']                    = '';
                   $data['dvcategory']                    = '';	   
                   $data['dvbrand']                    = '';	                  
                   $data['dvimage']                    = '';  
                   $data['dvpdate']                    = '';
                    $data['dvedate']                    = '';
                     $data['dvactivate']              = 'ACTIVE';
                    $data['dvhtml']                   = '';
                     $data['sel']='';
                    $data['dvsubmit']                    = 'ADD';
                     
                 
                
                
                
                return $data;
            
        }
}

