 
<li><a data-toggle="modal" href="#login" >Login</a> </li>
<div class="modal fade " id="login" tabindex="-5" role="dialog" >
		    <div class="modal-dialog">
   				<div class="modal-content">
   					<div class="modal-header">
			<div style="float: right;">
                                         
				
                                           </div>
                                     <div style="float : right ">
                                      <?php   
				    
				     if(isset($_GET['login_attempt']))
                                        {
                                  if(uri_string()=="" )
                                  {
                                  echo anchor('main','X');
                                  }
                                   else
                                   if(uri_string()=="main")
                                   {
                                   echo anchor('main','X');
                                   }
                                  else
                                  if(uri_string()=="deals/productdetails")
                                  {
                                  echo anchor(uri_string().'?id='.$_GET['id'],'X');
                                  }
                                  else
                                  {
                                  echo anchor('home','X');                  
                                  }
                                  
                                  }
                                  ?>
                                  </div>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h2 class="modal-title" id="myModalLabel">Log into your privileges</h2>
                      
					</div>
					<div class="modal-body">
                                            <center>
                                    <?php echo form_open("login"); ?>
				
				<?php 		
				if(uri_string()=="deals/productdetails")
				{
			        echo form_hidden('current',uri_string().'?id='.$_GET['id'].'&&'); 
				}
				else
				{
				 echo form_hidden('current',uri_string().'?'); 
				}
				?>
					<p><input type="text" class="span3" id="username" name="username" placeholder="User Name" value=""></p>
				    <p><input type="password" class="span3" id="pass" name="pass" placeholder="Enter Password"></p>
				      </center> <p style="margin-left:300px;"><button type="submit" class="btn btn-success">Sign in</button> 
				      
				      <a href="forget_pass">Forgot Password</a></p>
					<?php
                                       
                                        echo form_close(); ?>
                                     <?php
                                     if(isset($_GET['login_attempt']))
                                        {
                                        if($_GET['login_attempt']==1)
                                        {
                                        echo '<center>Invalid Username or Password</center>';
                                        }
                                        else
                                        {
                                         echo '<center>Please fill in the both fields</center>';
                                        }
                                        
                                        
                                           echo "<style>#login{display:block;}.fade {
opacity: 1;transition: opacity .15s linear;
}.modal.fade .modal-dialog {
-webkit-transform: translate(0,25%);}
.modal-header .close {
margin-top: -2px;
opacity: 0;
cursor: default;
}
</style>";
                                        }
                                    ?>     
                                        </div>
                                 
					<div class="modal-footer">          
                  <?php
                                     
                                        echo '<div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true">Log in</div>';
            
                                      
          ?>
               
                                        </div>              	 																		
				</div>
            </div>
	    </div>