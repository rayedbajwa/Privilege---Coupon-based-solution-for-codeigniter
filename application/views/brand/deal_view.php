<!DOCTYPE html>
<html lang="en">
    <head>
     
      <title>Privilege Admin Panel</title>
<link  type="text/css" href="<?php echo base_url('assets/lib/css/bootstrap.min.css') ?>" rel="stylesheet" >
<link  type="text/css" href="<?php echo base_url('assets/src/bootstrap-wysihtml5.css') ?>" rel="stylesheet" >

      <link  type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" >
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" ></script>
        
    <style type="text/css">
            .navbar-static-top {
  margin-bottom:20px;
}

i {
  font-size:16px;
}

.nav > li > a {
  color:#787878;
}
  
footer {
  margin-top:20px;
  padding-top:20px;
  padding-bottom:20px;
  background-color:#efefef;
}

/* count indicator near icons */
.nav>li .count {
  position: absolute;
  bottom: 12px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  background: rgba(51,200,51,0.55);
  color: rgba(255,255,255,0.9);
  line-height: 1em;
  padding: 2px 4px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}

/* indent 2nd level */
.list-unstyled li > ul > li {
   margin-left:10px;
   padding:8px;
}
        </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
        
        <!-- Header -->
     

<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <a class="navbar-brand" href="http://privilegedpk.com/prev/index.php/home">Privilege</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">My Profile</a></li>
          </ul>
        </li>
        <li><a href="../../mainPage/logout/"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
      </ul>
    </div>
  </div><!-- /container -->
</div>

     
<!-- /Header -->

<!-- Main -->
<div class="container">
<div class="row">
	<div class="col-md-3">
      <!-- Left column -->
    
      
      <ul class="list-unstyled">
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
          <h5>Main Menu <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
          	<?php 	$this->load->view('brand/main_menu'); ?>
        </li>
        <li class="nav-header"> 
          <a href="#" data-toggle="collapse" data-target="#menu2">
          <h5>Reports <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>
            <ul class="list-unstyled collapse" id="menu2">
                <li><a href="#">Information &amp; Stats</a></li>
                <li><a href="#">Views</a>
                </li>
                <li><a href="#">Requests</a>
                </li>
                <li><a href="#">Timetable</a>
                </li>
                <li><a href="#">Alerts</a>
                </li>
            </ul>
        </li>
        <li class="nav-header">
        <a href="#" data-toggle="collapse" data-target="#menu3">
          <h5>Social Media <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>
        
            <ul class="list-unstyled collapse" id="menu3">
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
            </ul>
        </li>
      </ul>
   	</div><!-- /col-3 -->
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
       echo "<td>". anchor('brand/brand_deal/input/'.$row->name,'Edit') ."</td>";
	echo "<td>". anchor('brand/brand_deal/del/'.$row->name,'Delete') ."</td>";
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
            echo form_open_multipart("brand/brand_deal/input", $attributes );
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