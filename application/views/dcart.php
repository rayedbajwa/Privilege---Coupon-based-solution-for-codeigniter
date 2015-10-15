<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="deals pakistan, discount cards, website pakistani, groupon pakistani, discount pak, HTML" />
 
                  <link href='<?php echo base_url(); ?>assets/css/bootstrap-responsive.css' rel='stylesheet'> </link>
            <link href='<?php echo base_url(); ?>assets/css/core.css' rel='stylesheet'> </link>
         
           <link href='<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css' rel='stylesheet'>       </link>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="deals pakistan, discount cards, website pakistani, groupon pakistani, discount pak, HTML" />
 <link href='<?php echo base_url(); ?>assets\css\bootstrap.css' rel='stylesheet'> </link>
                    <link href='<?php echo base_url(); ?>assets/css/bootstrap-responsive.css' rel='stylesheet'> </link>
            <link href='<?php echo base_url(); ?>assets/css/core.css' rel='stylesheet'> </link>
         
           <link href='<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css' rel='stylesheet'>       </link> 
          
      
         
<meta name="generator" content="PhpED Version 7.0 (Build 7019)">
<title>Cart</title>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js"></script>
          <script type="text/javascript">
                 $(document).ready(function()
                 {           
                     $("ul.cart #gen").click(function(){
                       var id=$(this).val();
                         //$(this).hide();
                       var generator="ul.cart #gener";
                       generator+=id;
                       var quan=  $('[name="'+id+'[qty]"').val();
                      
                          for(var i=0;i<quan;i++){        
                        $.post(
                        "<?php echo base_url();?>index.php/coupon/gen",
                         {action:'test' ,did:id,qty:quan},
                       
                         function(output){
                     
                                 $(generator).html(output);
                         }                 
                          );}              return false;
                     });                  
                     $("ul.cart #view").click(function(){
                       var id=$(this).val();
                         //$(this).hide();
                       var generator="ul.cart #gener";
                       generator+=id;
                       var quan=  $('[name="'+id+'[qty]"').val();
                      
                          for(var i=0;i<quan;i++){        
                        $.post(
                        "<?php echo base_url();?>index.php/coupon/view",
                         {action:'test' ,did:id,qty:quan},
                       
                         function(output){
                     
                                 $(generator).html(output);
                         }                 
                          );}              return false;
                     });                  
                 }   
                 );  
          
          </script>
          <?php
              $this->load->view('temp_navbar');        
            
              ?>
          
</head>
<body bgcolor="#D0D0D0" alink="#000000">     
    <div class="row-fluid">
        <div class="span4 offset2">
    <h4>Cart:</h4>
    Confirm your deal purchases here....
    </br></div>
    </div>
    <center>
    
<div class="fill">
     
     
     
                  
                  <?php
                        $hey=$this->cart->contents();
                foreach($hey as $row):  
                 echo form_open('/deals/update_item');                     
         ?><ul class="cart" > <?php    
         
                             
       
                          ?> <li> <?php          echo 'Deal ID: '.$row['id'].'<br>'; 
                                                       
                                                    
                                                 ?>      
                          <?php           echo 'Name: '.$row['name'].'<br>';                         ?>      
                                <?php                               ?>       
                                   <?php echo 'Quantity: ';
                                      
                                                echo form_input(array('id'=> $row['id'].'id', 'name'=>$row['id'].'[qty]','value'=>$row['qty'],'maxlength'=>2,'size'=>'2'));              
                                 
                                     
                                    ?>                                                                              
                            <button type=submit id="gen" name="generate" value="<?php echo $row['id'] ?>">Generate Coupons</button> 
                             <button type=submit id="view" name="view coupons" value="<?php echo $row['id'] ?>">View Coupons</button> 
                            <div id="<?php echo 'gener'.$row['id']?>"></div> 
                               
                                                                           </li>   
                                   <?php
                                                                  
                                                      
                                                       endforeach;    
                                                     ?>                
                                                                                                      </ul>
                                                                                                    <?php   
                                                                             echo anchor('cart/empty_cart','Empty Cart','class="empty"')  ;
                                                                             echo '<br>'.form_submit('','Update Cart');
                                                         
              echo '&nbsp';
              echo anchor('main','Membsership ');
                            echo '&nbsp';   
              echo '&nbsp';
              echo anchor('deals','All Deals');   
              ?>                          </div>        </center>

     </body>
     
     <?php $this->load->view('temp_footer');?>
</html>