<?php $this->load->view('admin/header'); ?>
          <div class="col-md-9">
            <div class="row">
       
          <hr> 
            <div class="well">
      
                          <?php
           
          $attributes = array('id' => 'usrform');
            echo '<table>';
            echo form_open_multipart("admin/admin_deal/input", $attributes );
            echo '<tr>'; 
            echo '<input type="hidden" name="id" value="'. $did .'">';
            echo '<input type="hidden" name="dbrand" value="'. $dvbrand .'">';
            echo '</tr>';
            echo '<tr>';  
            echo '<td> Name: &nbsp&nbsp</td><td><input type="text" style="height:30px;" name="dname" value="'. $dvname .'" ></td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Real&nbspPrice: &nbsp&nbsp</td><td> <input type="text" style="height:30px;" name="drprice" value="'. $dvrprice .'"></td>';
            echo '</tr><tr>';
            echo '<td>Discount&nbspPrice: &nbsp&nbsp&nbsp&nbsp</td><td><input type="text" style="height:30px;" name="ddprice" value="'. $dvdprice .'"> </td>';
            echo '</tr>';
            echo '<tr><td>Category: &nbsp&nbsp</td><td><select name="dcatagory" value="'. $dvcategory .'">';
           
                    foreach($query as $row)
                    {
                    if($dvcategory!=$row->id)
                    {
                   
                    echo '<option value= "'.$row->name.'">'.$row->name.'</option>';
                    }
                    else 
                    {
                    echo $row->name;
                    echo '<option value="'.$row->name.'" selected>'.$row->name.'</option>';    
                    }
                    }
            echo '</select></td>';
            echo '</tr><tr>';
             echo '<td>Image: &nbsp&nbsp</td><td><img src="'.base_url($dvimage).'" width="100" height="100" /><input type="file" name="userfile" size="20" value="'.$dvimage.'"/></td>';
          
           
            
            echo '</tr><tr>';
            
            echo '<td>Expire&nbspDate: &nbsp&nbsp</td><td><input type="date" style="height:30px;" name="dedate" value="'.$dvedate.'"></td>';
             echo '</tr><tr>';
             echo '<td>Html&nbspCode: &nbsp&nbsp</td><td> <textarea name="dhtml" class="textarea"  style="width: 600px; height: 200px" form="usrform" >'.$dvhtml.'</textarea> </td>';
             echo '</tr><tr>';
             echo  '<td>Activate: &nbsp&nbsp</td><td> <input type="checkbox" name="dactivate" value="'.$dvactivate.'"'.$sel.' </td>';
             echo '</tr><tr>';
             echo  '<td>&nbsp&nbsp</td><td><input type="submit" name="dsubmit" value="'.$dvsubmit.'"></td>';
             echo '</tr>';
             echo  '</form>';
             echo '</table>';
            ?>
                
<script src="<?php echo base_url('assets/lib/js/wysihtml5-0.3.0.js') ?>" ></script>
<script src="<?php echo base_url('assets/lib/js/jquery-1.7.2.min.js') ?>" ></script>
<script src="<?php echo base_url('assets/src/bootstrap-wysihtml5.js') ?>" ></script>

<script>
	$('.textarea').wysihtml5();
</script>
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