          
          <?php $this->load->view('admin/header'); ?>
          <div class="col-md-9">
            <div class="row">
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
   Add Deal
    </button>     
          <hr> 
            <div class="well">
       <?php echo heading('List of Deal',3); ?>
                            <table border="1" class="table table-striped">
  <tr>
                 <th> Title</th>
                 <th> Real Price</th>
                 <th> Discount Price</th>
                 <th> Category</th>
                 <th> Image</th>
                 <th> Publish Date</th>
                 <th> Expire Date</th>
                 <th> Status </th>
                 <th> Edit </th>
                 <th> Delete </th>
  </tr>
<?php 
   foreach($query as $row)
       {
        echo "<tr>";
        echo "<td>". $row->name ."</td>";
	echo "<td>". $row->realPrice ."</td>";
        echo "<td>". $row->discountPrice ."</td>";
	echo "<td>". $row->category_id ."</td>";
	echo "<td>". $row->image."</td>";
        echo "<td>". $row->create_time."</td>";
        echo "<td>". $row->expire_time."</td>";
        echo "<td>". $row->status."</td>";
       echo "<td>". anchor('admin/admin_deal/input/'.$row->name,'Edit') ."</td>";
	echo "<td>". anchor('admin/admin_deal/del/'.$row->name,'Delete') ."</td>";
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
        <h4 class="modal-title" id="myModalLabel">Add Deal</h4>
      </div>
      <div class="modal-body">
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
            echo '<tr><td>Catagory: &nbsp&nbsp</td><td><select name="dcatagory" value="'. $dvcategory .'">';
                    foreach($query1 as $row)
                    {
                    if($dvcategory!=$row->name)
                    {
                    echo '<option value= "'.$row->name.'">'.$row->name.'</option>';
                    }
                    else
                    {
                    echo '<option value="'.$row->name.'" selected>'.$row->name.'</option>';    
                    }
                    }
            echo '</select></td>';
             echo '</tr><tr>';
            echo '<td>Image: &nbsp&nbsp</td><td><input type="file" name="userfile" size="20" value="'. $dvimage .'"/></td>';
            echo '</tr><tr>';
            echo '<td>Expire&nbspDate: &nbsp&nbsp</td><td><input type="date" style="height:30px;" name="dedate" value="'.$dvedate.'"></td>';
             echo '</tr><tr>';
            echo '<td>Html&nbspCode: &nbsp&nbsp</td><td> <textarea name="dhtml" class="textarea"  style="width: 400px; height: 150px" form="usrform" value="'.$dvhtml.'"></textarea> </td>';
             echo '</tr>';
             echo '</table>';
             
            ?>
          
         
      </div>
      <div class="modal-footer">
            <?php             
            echo 'Activate :<input type="checkbox" name="dactivate" value="'.$dvactivate.'"'.$sel.' >';
            echo '<input type="submit" name="dsubmit" value="'.$dvsubmit.'">';
            echo '</form>';
            ?>
      </div>
    </div>
  </div>
</div>          
        
          
<script src="<?php echo base_url('assets/lib/js/wysihtml5-0.3.0.js') ?>" ></script>
<script src="<?php echo base_url('assets/lib/js/jquery-1.7.2.min.js') ?>" ></script>
<script src="<?php echo base_url('assets/src/bootstrap-wysihtml5.js') ?>" ></script>

<script>
	$('.textarea').wysihtml5();
</script>
    </body>
</html>