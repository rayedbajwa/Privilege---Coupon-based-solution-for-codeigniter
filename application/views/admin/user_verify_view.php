        
        <!-- Header -->
         <?php $this->load->view('admin/header'); ?>
<!-- /Header -->

     <div class="col-md-9">
            <div class="row">
          <hr> 
          <div class="well">
          	<?php echo heading('Detail',3); ?>
        <?php echo '<a href="'.base_url("/assets/images/receipts/".$query['receipt_pic']).'"><img src="'.base_url("/assets/images/receipts/".$query['receipt_pic']).'" width="80%" height="200" /></a>'; ?>
          <table border="1" class="table table-striped">
 <?php 
        echo "<tr><td>ID :</td><td>".$query['id']."</td></tr>";	
        echo "<tr><td>User ID :</td><td>".$query['user_id']."</td></tr>";	
        echo "<tr><td>Pay Methiod :</td><td>".$query['pay_method']."</td></tr>";	
        echo "<tr><td>Total Amount :</td><td>".$query['total_amount']."</td></tr>";
        echo "<tr><td>Time :</td><td>".$query['time']."</td></tr>";
        echo "<tr><td>Transaction ID :</td><td>".$query['trans_id']."</td></tr>";
        echo "<tr><td>Agent Name :</td><td>".$query['name_agent']."</td></tr>";
        echo "<tr><td>ez_code :</td><td>".$query['ez_code']."</td></tr>";
        echo "<tr><td>Mob # :</td><td>".$query['mob_no']."</td></tr>";
        echo "<tr><td>Months :</td><td>".$query['MONTHS']."</td></tr>";
        echo "<tr><td>Type :</td><td>".$query['mtype']."</td></tr>";
      
?>
</table>
        <table>                                  <?php echo form_open('admin/admin_user_approv/varified'); ?>
                                                 <?php echo form_hidden('id',$query['user_id']); ?> 
                                                 <tr> 
                                                 <td> <?php echo form_submit('mysubmit','Verify');  ?>
                                                 </td></tr>
                                                 <?php echo form_close(); ?>
                                                  <?php echo form_open('admin/admin_user_approv/not_varified'); ?>
                                                 <?php echo form_hidden('id',$query['user_id']); ?> 
                                                 <tr> 
                                                 <td> <?php echo form_submit('mysubmit','Not Now');  ?>
                                                 </td></tr>
                                                 <?php echo form_close(); ?>
          
          
  </table> 
    </a>
          </div>

            </div>
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