        <!-- Header -->
        <?php $this->load->view('admin/header'); ?>
<!-- /Header -->
          <div class="col-md-9">
            <div class="row">
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
   Add Brands
    </button>     
          <hr> 
          	  <div class="well">      
	<?php echo heading('List of Brands',3); ?>
                            <table border="1" class="table table-striped">
  <tr>
      <th>Name</th>
    <th>Web site</th>
    <th>Email ID</th>    
    <th>Address</th>    
    <th>Status</th> 
    <th>Update</th>
    <th>Delete</th>
    <th>Deals</th>
  </tr>
<?php 
   foreach($query as $row){
        echo "<tr>";
        echo "<td>". $row->name ."</td>";
	 echo "<td>". $row->website ."</td>";
        echo "<td>". $row->email ."</td>";
	echo "<td>". $row->address ."</td>";
	echo "<td>". $row->status ."</td>";
        echo "<td>". anchor('admin/admin_brands/input/'.$row->name,'Edit') ."</td>";
	echo "<td>". anchor('admin/admin_brands/del/'.$row->name,'Delete') ."</td>";
        echo "<td>". anchor('admin/admin_deal/test/'.$row->name,'Deals') ."</td>";
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
        <h4 class="modal-title" id="myModalLabel">Brand</h4>
      </div>
      <div class="modal-body">
        
                                        
<?php 
     if($trace=="done")
     {
     echo '<table >';  
      echo form_open('admin/admin_brands/input#openModal');
      echo form_hidden('id',$idd); 
      echo '<tr><td>Name </td><td>';
      echo form_input('fname',$nam); 
      echo '</td></tr> <tr> <td>Website </td>  <td>';
      echo form_input('fwebsite',$web);
      echo '</td> </tr> <tr> <td>Email  </td>  <td>' ;
      echo form_input('femail',$email); 
      echo '</td></tr> <tr><tr><td>Address</td><td>'; 
      echo form_textarea('faddress',$add); 
      echo '</td> </table>';
     }
 else {
         echo 'No Brand User avaliable First Creat a Brand User';    
     }     
                                              ?>
      <div class="modal-footer">
      <?php
     if($trace=="done")
     {
      echo 'User :'; 
      echo form_dropdown('fbu',$brandUser);            
      echo '&nbsp&nbsp&nbsp  Activate :'; 
      echo form_checkbox('fstatus','yes',TRUE); 
      echo form_submit('mysubmit','Add');  
      echo form_close();
     }
     else 
     {
     echo form_close();
     echo '<a href="admin_brands/">OK</a> ';    
     }
     ?>
        </div>
      </div>
    </div>
  </div>
</div>
        
        
    </body>
</html>