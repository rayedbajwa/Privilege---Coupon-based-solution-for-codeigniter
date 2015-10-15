<html>
<head>   
  
  
                                                      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/core.css">
                                                
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
<title>Coupons</title>
</head>
<body>      <center>

   <table class="coupons" border="1px"><?php    
                           echo '<th>Data</th>  <th>Deal_id</th><th>Create time</th><th>Expire time</th>'; 
                 foreach ($coup as $row)
                                    {          echo '<tr><td>';
                                               
                                        echo $row->data;
                                        echo '<td>'.$row->deal_id.'</td>';
                                        echo '<td>'.$row->create_time.'</td>';
                                        echo '<td>'.$row->expire_time.'</td>';
                                        echo '</td></tr>';
                                    }
                                    
                                    
              ?></table>
              <?php
                   echo form_open('coupon/generate');
                   echo form_input(array('name'=>'qua','id'=>'qty','value'=>0,'size'=>2,'maxlength'=>2));
                   echo form_submit('','Generate');
                   
               ?>
             <?php		echo anchor('coupon\destroy_all','Destroy');
                                                       echo '<br>'.anchor('home','Home');
                                                   ?>   </center>
              
</body>
</html>
