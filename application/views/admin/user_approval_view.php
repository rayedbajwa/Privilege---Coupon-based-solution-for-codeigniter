        
        <!-- Header -->
         <?php $this->load->view('admin/header'); ?>
<!-- /Header -->

     <div class="col-md-9">
            <div class="row">   
          <hr> 
          <div class="well">
          	<?php echo heading('List of User',3); ?>
                            <table border="1" class="table table-striped">
  <tr>
    <th>Username</th>
    <th>Delete</th>
  </tr>
<?php 
   foreach($query as $row){
        echo "<tr>";
        echo "<td>". $row->username ."</td>";
        echo "<td>". anchor('admin/admin_user/del/'.$row->name,'Delete') ."</td>";
  echo "</tr>";	
}
?>
</table>
            	
          </div>

            </div>
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