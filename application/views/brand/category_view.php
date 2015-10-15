<!DOCTYPE html>
<html lang="en">
    <head>
       <title>Privilege Admin Panel</title>
        <link  type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" >
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" ></script>

        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- CSS code from Bootply.com editor -->
        
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
     <?php $this->load->view('brand/header'); ?>
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
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
          <h5>Reports <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>
        
            <ul class="list-unstyled collapse" id="menu2">
                <li><a href="#">Information &amp; Stats</a>
                </li>
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
   Add Category
    </button>     
          <hr> 
          <div class="well">                   
	<?php echo heading('List of Category',3); ?>
                            <table border="1" class="table table-striped">
  <tr>
      <th>Name</th>
    <th>Type</th>    
  </tr>
<?php 
   foreach($query as $row){
        echo "<tr>";
        echo "<td>". $row->name ."</td>";
        echo "<td>". $row->type ."</td>";
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
                                              
                                                <?php echo form_open('brand/brand_category/input'); ?>
                                                 <?php echo form_hidden('id',$idd); ?>
                                              <tr>
                                                  <td>Name </td> 
                                                  <td>
                                                      <?php echo form_input('fname',$nam); ?>
                                                  </td>
                                              </tr>
                                                                                       </table>
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