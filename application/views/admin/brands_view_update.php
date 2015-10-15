    
        <!-- Header -->
        <?php $this->load->view('admin/header'); ?>
<!-- /Header -->
         <div class="col-md-9">
            <div class="row">
          	  <div class="well">      
              <table  class="table table-striped">  
                                              
                                                <?php echo form_open('admin/admin_brands/input'); ?>
                                                 <?php echo form_hidden('id',$idd); ?>
                                              <tr>
                                                  
                                                  <td>Name </td> 
                                                <td>
                                                      <?php echo form_input('fname',$nam); ?>
                                                  </td>
                                                  </tr>
                                                
                                              <tr>
                                                  
                                                  <td>Website </td> 
                                                <td>
                                                      <?php echo form_input('fwebsite',$web); ?>
                                                  </td>
                                               
                                              </tr>
                                             
                                              <tr> <td>Email  </td>
                                                 <td> 
                                               <?php echo form_input('femail',$email); ?>
                                                  </td></tr>
                                                <tr>
                                                    <tr>
                                              <td>Address</td>
                                               <td> 
                                                <?php echo form_textarea('faddress',$add); ?>
                                              </td>
                                                    <?php echo form_close(); ?>
                                          </table>
                                                         
                                                &nbsp&nbsp&nbsp  Activate : 
                                                <?php echo form_checkbox('fstatus','yes',TRUE); ?>
                                                <?php echo form_submit('mysubmit','Update');  ?>
                                              
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