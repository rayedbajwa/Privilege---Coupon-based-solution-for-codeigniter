
        <!-- Header -->
        <?php $this->load->view('admin/header'); ?>
<!-- /Header -->

          <div class="col-md-9">
            <div class="row">
          	  <div class="well">      
              <table  class="table table-striped">  
                                              
                                      <table >  
                                              
                                                <?php echo form_open('admin/admin_user/input'); ?>
                                                 <?php echo form_hidden('id',$idd); ?>
                                              <tr>
                                                  
                                                  <td>Name </td> 
                                                <td>
                                                      <?php echo form_input('fname',$nam); ?>
                                                  </td>
                                                   
                                              </tr>
                                              <tr>
                                                  
                                                  <td>Username </td> 
                                                <td>
                                                      <?php echo form_input('fusername',$n); ?>
                                                  </td>
                                               
                                              </tr>
                                              
                                              <tr>
                                                  <td>
                                                  <?php echo form_hidden('fpassword',$pass); ?>
                                              </td>
                                              
                                              </tr>
                                             
                                              <tr> <td>Email  </td>
                                                 <td> 
                                                <?php echo form_input('femail',$email); ?>
                                                  </td></tr>
                                                                                          </table>
                               
    
    <p>                                            
                                                  Type : 
                                                <?php echo form_dropdown('ftype',$utype,$selected); ?>
                                                &nbsp&nbsp&nbspActivate : 
                                                <?php echo form_checkbox('fstatus','yes',TRUE); ?>                                
                                                &nbsp&nbsp&nbsp<?php echo form_submit('mysubmit','Update');  ?>
                                                    <?php echo form_close(); ?>
      
                  </div>



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