<div id="sidebar">
    
 
       
            <div class="list-group" style="opacity: 0.7;">
                <?php 
                
                
                foreach($viewcat as $catname){?>
                <div id="sidebar-icon">
                    
                <li class="yo" style="list-style: none;">   <a  class="list-group-item" style="height:20%; " href="<?php echo '?category='.$catname->id ?>"><i class="<?php echo $catname->icon; ?> fa-2x" style="color:<?php echo $catname->color;?>;float:left; "></i><div id="text"><?php echo '<p class="text-side"  style="float:right;display:none;">'.$catname->name.'</p>'; ?></div></a>
                    
                    </li>
                </div>
                <?php
                
                echo '<style>#cat-'. $catname->id.'> a > img{'
                . 'border-bottom: 7px solid '.$catname->color.' !important;'
                        . '}</style>';
                }?>
			</div>
<!--            <h3><a class="sidebar_title" href="http://PrivilegedPK" title="http://PrivilegedPK.com/"  target="_blank">Newsletter</a></h3>
            <p>Subscribe to Privilege</p>-->
<!--            <div id="newsletter">
                <form action="#" method="get">
                  <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>-->
                <div class="cleaner"></div>
            </div>
