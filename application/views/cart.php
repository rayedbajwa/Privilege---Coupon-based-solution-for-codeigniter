<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/js/jquery-2.1.0.min.js">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/core.css">
<meta name="generator" content="PhpED Version 7.0 (Build 7019)">
<title>Cart</title>
<link rel="shortcut icon"  href="">
  
</head>
<body bgcolor="#D0D0D0" alink="#000000">    <center>
<?php
                     $i=1;      
                        $hey=$this->cart->contents();
                foreach($hey as $row):   echo form_open('/cart/update_item');                     
         ?><ul class="cart" > <?php     echo form_hidden('rowid[]',$row['rowid']);
       
                          ?> <li> <?php          echo 'Membership ID: '.$row['id'].'<br>';                           ?>      
                          <?php           echo 'Type: '.$row['name'].'<br>';                         ?>      
                                <?php      echo 'Price: '.$row['price'].'<br>';                          ?>       
                                   <?php echo 'Months: '.form_input(array('name'=>$i.'[qty]','value'=>$row['qty'],'maxlength'=>2,'size'=>'2'));              ?> 
                                         </li>
                                   <?php
                                                                    $i++;
                                                      
                                                       endforeach;    
                                                     ?>                 
                                                                                                      </ul><?php  echo '<br>Total: '.$this->cart->total();    
                                                                                                      echo anchor('cart/empty_cart','Empty Cart','class="empty"')  ;
                                                                                                        echo '<br>'.form_submit('','Update Cart'); echo form_close();
                                                         
              echo '&nbsp';
              echo anchor('main','Products');      
?>                             <br>   <?php echo form_open('/pay'); echo form_submit('','Payment');  echo form_close();?>   </center>


</body>
</html>