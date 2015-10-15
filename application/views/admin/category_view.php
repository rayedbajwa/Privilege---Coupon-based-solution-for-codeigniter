        <!-- Header -->
     <?php $this->load->view('admin/header'); ?>
<!-- /Header -->

      <div class="col-md-9">
            <div class="row">
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
   Add Category
    </button>     
          <hr> 
          <div class="well">                   
	<?php echo heading('List of Category',3); ?>
                            <table border="1" class="table table-striped">
  <tr>
      <th>Name</th>
    <th>Type</th>    
    <th>Update</th>
    <th>Delete</th>
  </tr>
<?php 
   foreach($query as $row){
        echo "<tr>";
        echo "<td>". $row->name ."</td>";
        echo "<td>". $row->type ."</td>";
	echo "<td>". anchor('admin/admin_category/input/'.$row->name,'Edit') ."</td>";
	echo "<td>". anchor('admin/admin_category/del/'.$row->name,'Delete') ."</td>";
  echo "</tr>";	
}
?>
</table>
            	
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
        
 
   <div class="modal fade" id="myModal" tabindex="-5" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">User</h4>
      </div>
      <div class="modal-body">
                                      
                                          <table >  
                                              
                                                <?php echo form_open('admin/admin_category/input'); ?>
                                                 <?php echo form_hidden('id',$idd); ?>
                                              <tr>
                                                  <td>Name </td> 
                                                  <td>
                                                      <?php echo form_input('fname',$nam); ?>
                                                  </td>
                                                  
                                              </tr>
                                              <tr>
                                              <td>icon: &nbsp&nbsp</td><td><input type="text" name="userfile" size="20"/></td>
                                              <td>Color: &nbsp&nbsp</td>
                                              <td>
                                              <input type="color" name="cat_color">
                                              </td>
                                              </tr>                                     </table>
                                <?php echo $inputError; ?>:
  
      </div>
      <div class="modal-footer">
                                                
                                                &nbsp&nbsp&nbsp Type : 
                                                <?php echo form_dropdown('ftype',$btype,$selected2); ?>
                                               &nbsp&nbsp&nbsp   <?php echo form_submit('mysubmit','Add');  ?>
                                                    <?php echo form_close(); ?>
                                   
          
          
      </div>
    </div>
  </div>
</div>          
        
    </body>
</html>