<?php
$this->load->view('temp_navbar');


foreach($desc as $row){
?>


    <div class='main' style="width: 900px;
margin: auto;
padding: 4%;">
        <center>
        <div class="prod_info">
           
            
        </div>
        <div class="buy_deal">
        <?php
       
       echo '<img style="
float: right;
width: 35%;"src='.base_url().$row->image.' alt="product1"/>';
       ?>
            <div class="buy_info">
                <h1 style="
    text-decoration: line-through;
">
                    <?php
                    echo 'PKR '.$row->realPrice.'/-';
                    
                    ?>
            
                </h1>
                <h2>
                    <?php
                    echo 'Our Price: PKR '.$row->discountPrice.'/-';
                    
                    ?>
                    
                </h2>
                <div class="dicount-info" style="text-align: -webkit-center;">
                    <table>
                        <tbody style="
    text-align: center;
" >
                            <tr>
                        <th>
                            Value
                        </th>
                        <th>
                            Discount
                        </th>
                        <th>
                            You Save
                        </th>
                            </tr>
                            <tr id="discount-cal" >
                                <td>
                                    
                                    <?php
                                    
                                    echo 'PKR '.$row->realPrice;
                                    ?>
                                </td>
                               
                                <td>
                                    <?php
                                    echo (intval((($row->realPrice-$row->discountPrice)/$row->realPrice)*100)).'%';
                                    ?>
                                </td>
                                  <td> 
                                    
                                    <?php
                                    
                                    echo 'PKR '.($row->realPrice-$row->discountPrice);
                                    ?>
                                </td>
                                
                            </tr>
                        </tbody>
                        
                    </table>
                
                </div>
                
                <div class="time-left" style="margin-right: 37%;">
                    <p class="product_price">
                    <?php $time1=strtotime($row->expire_time )-time(    ) ;
                                                                      
                   echo '<br><span class="glyphicon glyphicon-time"></span>  '. floor($time1/(60*60*24)).' Days and '.(floor($time1/(60*60))-floor($time1/(60*60*24))*24)  .' hours<br>';                                           
                                                                                              
                                ?>
                </p>
                    
                </div>
            </div>
            
            <?php echo form_open('/deals/add_to_cart');   ?>
             <?php 
                 
                 
              $naid=array('id'=>$row->id,'name'=>$row->name);
                                                                          echo form_hidden($naid);
                                                                          ?>
        </div>  <p><input type="submit" class="btn btn-primary btn-lg"style="float: center;
width: 20%;" role="button" value="Buy"></p>
            <div class="jumbotron">
               <?php echo form_close();?>
  <h1 style="margin-top: -20%;"><?php echo $row->name; ?></h1>
  <p>  <?php
            echo $row->description;
            ?></p>
 
</div>
         </center>

    </div>


<?php
$this->load->view('temp_footer');
}
?>