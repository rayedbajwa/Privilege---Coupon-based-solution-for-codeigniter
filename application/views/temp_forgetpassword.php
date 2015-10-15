  
<li><a data-toggle="modal" href="#forget" >Login</a> </li>
	    <div class="modal fade" id="forget" tabindex="-5" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
   				<div class="modal-content">
   					<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <h2 class="modal-title" id="myModalLabel">Log into your privileges</h2>
                                
					</div>
					<div class="modal-body">
                                            <center>
				    <?php echo form_open("login"); ?>
					<p><input type="text" class="span3" id="username" name="username" placeholder="User Name" value=""></p>
				      </center> <p style="margin-left:300px;"><button type="submit" class="btn btn-success">Continue</button> <a href="">Forgot Password</a></p>
					<?php echo form_close(); ?>
                                      
                                        </div>
                                    
					<div class="modal-footer">          
               
                                        </div>              	 																		
				</div>
            </div>
	    </div>