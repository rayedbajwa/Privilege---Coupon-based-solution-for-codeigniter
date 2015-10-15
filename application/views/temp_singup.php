				    <?php
                                     if(isset($_GET['un'])||isset($_GET['nam'])||isset($_GET['email'])||isset($_GET['pass'])||isset($_GET['pass1']))
                                        {
                                       
                                           echo "<style>#signup{display:block;}.fade {
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
				<li><a data-toggle="modal" href="#signup" >Sign up</a></li>		  
		<div class="modal fade" id="signup">
		    <div class="modal-dialog">
   				<div class="modal-content">
   					<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				    <div style="float : right ">
				    <?php   
				   
				  if(isset($_GET['un'])||isset($_GET['nam'])||isset($_GET['email'])||isset($_GET['pass'])||isset($_GET['pass1']))
                                      
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
				    <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
					</div>
				    <div class="modal-body">
                                        <center>
				    <table>
				    <?php echo form_open("signup"); ?>
					<tr><td>
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
			
					<p><input type="text" class="span3" id="user_full_name" name="user_full_name" placeholder="Enter Full Name" value=""></p>
					</td>
					<td>&nbsp;<?php if(isset($_GET['nam'])) { echo $_GET['nam']; } ?></td>
					</tr>
					<tr><td>
					<p><input type="text" class="span3" id="user_name" name="user_name" placeholder="Enter User Name" value=""></p>
					</td>
					<td>&nbsp;<?php if(isset($_GET['un'])) { echo $_GET['un']; } ?></td>
					</tr>
					<tr><td>
					<p><input type="text" class="span3" id="email_address" name="email_address" placeholder="Enter Email" value=""></p>
				        </td>
				        <td>&nbsp;<?php if(isset($_GET['email'])) { echo $_GET['email']; } ?></td>
				        </tr>
					<tr><td>
					<p><input type="password" class="span3" id="password" name="password" placeholder="Enter Password"></p>
					</td>
					<td>&nbsp;<?php if(isset($_GET['pass'])) { echo $_GET['pass']; } ?></td>
					</tr>
					<tr><td>
					<p><input type="password" class="span3" id="con_password" name="con_password" placeholder="ReEnter Password"></p>
                                        </td>
                                        <td>&nbsp;<?php if(isset($_GET['pass1'])) { echo $_GET['pass1']; } ?></td>
                                        </tr>
                                        </center>
					<tr><td align="right">
                                        <p ><button type="submit" class="btn btn-success">Sign up</button> </p>
				         </td></tr>
					
		
				</table>
					<?php echo form_close(); ?>
					
					</div>
					 
					<div class="modal-footer">          
                    <div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true">Log in</div>
                    </div> 
				</div>	
                    </div></div>