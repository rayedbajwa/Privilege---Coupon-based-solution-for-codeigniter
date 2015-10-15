        <!-- Header -->
     <?php $this->load->view('admin/header'); ?>
<!-- /Header -->

      <div class="col-md-9">
            <div class="row">
          <div class="well">                   

          </div>
                <table class="table table-striped">  
                                             
                                                <?php echo form_open('admin/admin_category/input'); ?>
                                                 <?php echo form_hidden('id',$idd); ?>
                                                 
 
                                              <tr>
                                                  <td>Name </td> 
                                                  <td>
                                                      <?php echo form_input('fname',$nam); ?>
                                                  </td>
                                              </tr>
                                                 <tr><td>Type </td>
                                                 <td><?php echo form_dropdown('ftype',$btype,$selected2); ?></td></tr>
                 
                                             
                                              <td>Icon: &nbsp&nbsp</td><td><input type="text" name="userfile" size="20" value=<?php echo '"'.$curr_image.'"'; ?> /></td>
                                              </tr>
                                              <td>Color: &nbsp&nbsp</td>
                                              
                                              <td>
                                              
                                              <input type="color" name="cat_color" value=<?php echo '"'.$curr_color.'"'; ?> >
                                              </td>
                                              </tr> 
                                                    <td> <?php echo form_submit('mysubmit','Update');  ?>
                                               </td></tr>
                                                
                                                
                                                    <?php echo form_close(); ?>
                                                                                       </table>
                                   


</div><!--/row-->
      
     
  	</div><!--/col-span-9-->
</div>
</div>
<!-- /Main -->

<footer class="text-center">WeDevz</footer>
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <!-- JavaScript jQuery code from Bootply.com editor -->
        
        <script type='text/javascript'>
        
        $(document).ready(function() {
        $(".alert").addClass("in").fadeOut(4500);
        /* swap open/close side menu icons */
        $('[data-toggle=collapse]').click(function(){
  	// toggle icon
  	$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
        });
        });
        
        </script>
        
 
   
    </body>
</html>