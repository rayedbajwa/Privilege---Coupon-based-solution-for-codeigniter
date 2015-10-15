<?php
class brand_menu{
 	function show_menu(){
  		$obj =& get_instance();
  		$obj->load->helper('url');
		
                $menu="<ul class="." list-unstyled collapse in"." id="."userMenu".">";
               // $menu.="<li>";
              //  $menu.=anchor("brand/brand_deshboard.php","Deshboard");
              //  $menu.="</li>";
              $menu.="<li>";
                $menu.=anchor("brand/brand_deal","Deals");
                $menu.="</li>";
                $menu.="<li>";
                $menu.=anchor("brand/brand_category","Category");
                $menu.="</li>";
                $menu.="<li>";
                $menu.=anchor("brand/brand_deal/logout/","Logout");
                $menu.="</li>";
               $menu.="</ul>";
              
  		return $menu;
 	}
}
?>