<?php
class admin_model extends CI_Model
{
 	function admin_model(){
         parent::__construct();
  		$this->load->helper('url');				
 	}
        function general()
        {
            $this->load->library('MyMenu');
            $menu = new MyMenu;
               $data['base']	              	= $this->config->item('base_url');
               $data['css']		        = $this->config->item('css');
               $data['menu'] 		        = $menu->show_menu();
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
                $data['selected']       	= 'admin';  
                $data['selected1']      	= '';  
                $data['selected2']      	= '';  
                $data['brand_selected'] 	= 'admin';  
                $data['status'] 	        = 'Activate';
                $data['check'] 	                = TRUE;
                $data['inputError']             ='...';
                
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
                  $data['dvimage']                    = '';  
                   $data['dvpdate']                    = '';
                    $data['dvedate']                    = '';
                     $data['dvactivate']                    = 'yes';
                    $data['dvhtml']                    = '';
                     $data['sel']='';
                    $data['dvsubmit']                    = 'ADD';
                     
                    $this->load->model('admin/admin_deshboard');
     
                
                
                
                return $data;
            
        }
}


