<div id="banner">
    <div id="smallb">
<a href="#"  sl-processed="1"><img class="img-blur" src=<?php echo base_url()."assets/DunkinDonuts02.jpg";?> id="img_ban" style="margin-top: 100px; height: 300px;
                 margin-bottom: -60px; float:left;"></a>
                 
                
    </div>
<div id="smallb2">
<a href="#2"  sl-processed="1"><img class="img-blur" src=<?php echo base_url()."assets/images/Facebook-Small-Homepage-Banner.jpg";?> id="img_ban" style="float: right;
margin-top: 200px;
margin-bottom: -60px;
"/></a>
    </div>
</div>
<div id="content">
  
             <?php  foreach ($viewdeals as $row){    
              ?> <?php echo form_open('/deals/add_to_cart');   ?>
        	<div class="col col_14 product_gallery">
                   <div id="cat-<?php echo $row->category_id;?>">
                    <a href="<?php echo 'deals/productdetails?id='.$row->id;?>"><img src="<?php echo base_url().$row->image;?>" alt="Product 01" /></a>
                <h3><?php echo $row->name; ?></h3>
                <p class="product_price">
                    <?php $time1=strtotime($row->expire_time )-time(    ) ;
                                                                      
                   echo '<br>Time remaining:';echo floor($time1/(60*60*24)).' Days and '.(floor($time1/(60*60))-floor($time1/(60*60*24))*24)  .' hours<br>';                                           
                                                                                              
                                ?>
                </p>
                
                 <?php 
                 
                 
              $naid=array('id'=>$row->id,'name'=>$row->name);
                                                                          echo form_hidden($naid);
                                                                          ?><span class="brand_display">by <?php echo $row->brand_name;?></span></br><?php 
                                                                   
                                                                       ?> <input type="submit" style="margin-top: -100%;" id="subButton" value=""><?php
                                                                         echo form_close();
             
             
             
             ?>
                   </div>
            </div> 
      <?php      	
          } ?> 
 </div>