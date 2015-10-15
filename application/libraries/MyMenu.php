<?php
class MyMenu{
 	function show_menu(){
  		$obj =& get_instance();
  		$obj->load->helper('url');
		
                $menu="<ul class="." list-unstyled collapse in"." id="."userMenu".">";
                $menu.="<li>";
                $menu.=anchor("admin/mainPage/index","Deshboard");
                $menu.="</li>";
		$menu.="<li>";
                $menu.=anchor("admin/admin_user","User");
                $menu.="</li>";
		$menu.="<li>";
                $menu.=anchor("admin/admin_subscribe","Subscriber");
                $menu.="</li>";
                $menu.="<li>";
                $menu.=anchor("admin/admin_category","Category");
                $menu.="</li>";
		$menu.="<li>";
                $menu.=anchor("admin/admin_brands","Brands");
                $menu.="</li>";
                $menu.="<li>";
                $menu.=anchor("admin/mainPage/logout/","Logout");
                $menu.="</li>";
               $menu.="</ul>";
              
  		return $menu;
 	}
}
?>