<html>
<head>   
  
  
                                                      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/core.css">
                                                
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
<title>Deals</title>
</head>
<body>      <center>
    
    <div id="content">
                 <?php   foreach ($viewdeals as $row){  ?>
    <ul class="deals">            
                 
                                    
                                  <li>   <?php                echo 'ID:'.$row->id;  ?><br><?php
                                                                                             
                                                               echo '&nbspDeal Name:'.$row->name;
                                                               echo '<br>Description: '.$row->desc;                   
                                                              $q='<img src="'.base_url().$row->image.'"/>';
                                                      
                                                              echo $q;
                                                              $time1=time(    ) -strtotime($row->expire_time );
                                                                      
                                                             
                                                                                                 
                                echo '<br>Time remaining:';echo floor($time1/(60*60*24)).' Days and '.(floor($time1/(60*60))-floor($time1/(60*60*24))*24)  .' hours<br>';
                                echo form_open('/deals/add_to_cart');     ?>
                                                                <fieldset>
                                                                
                                                                     <label>Quantity: </label>
                                                                     <?php     
                                                                          $naid=array('id'=>$row->id,'name'=>$row->name,'img'=>$q);
                                                                          echo form_hidden($naid);
                                                                         echo form_input('quan','0','maxlength="2"');
                                                                   
                                                                         echo form_submit('','Add');
                                                                     ?>
                                                                </fieldset>
                                                                <?php               
                                                                    echo form_close();
                                                                    
                                                                    echo anchor('deals/add_deal',"ADD NEW DEAL");
                                                                ?>
                                                             
                                      </li><?php
                                                  
                                               
                                        
                                    }
                                    
              ?></ul>
    </div>
             <?php
                                                       echo anchor('home','Home');
                                                   ?>   </center>
              
</body>
</html>
