<head>
             <?php    $this->load->view('temp_navbar');
              ?>
               <link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/css/member.css");?> />                                  
</head>
<body>
    <div class="fill" style="padding-top: 10%;">
        <center>
    <table id="membership-table" style="border: 1px solid #ebebeb;
text-align: center;
padding: 10px 10px;">
<tr>
                
                
<th class="plan-header"></th>
                   

                

                    <th class="plan-header plan-header-free "><h2>INTRO</h2><p class="membership-price"><sup>PKR</sup>199<span>.99</span></p><aside>month</aside></th>

                

                   

                

                    

                

                    <th class="plan-header plan-header-standard "><div class="header-standard-inner"><span class="standard-head">&nbsp; </span><h2>STANDARD</h2><span class="recommended-plan-ribbon">RECOMMENDED</span><p class="membership-price"><sup>PKR</sup>999<span>.99</span></p><aside>month</aside></div></th>

                

                    <th class="plan-header plan-header-blue "><h2>PREMIUM</h2><p class="membership-price"><sup>PKR</sup>1199<span>.95</span></p><aside>month</aside></th>

                
            </tr>
            <tr>
                
                <td><h3>For Members</h3></td>
                
                 
    <?php           


                 foreach ($viewall as $row)
                                    {
                     ?>  <td> <?php
                                                                                             
                                                                                                                                         
                                                 
                                                                echo form_open('/cart/add_new_item');     ?>
                                                                
            <center>
                                                                     <label>Months:</label>
                                                                     <?php   
                                                                         echo form_input('quan','1','maxlength="2"');?><br><?php
                                                                         echo form_hidden('pid',$row->id);
                                                                         echo '<input type="submit" id="subButton" value="Buy It">';
                                                                     ?>
                                                             </center>            </td>
                                                                <?php
                                                                    echo form_close();
                                                                ?>
                                                             
                                     <?php
                                                  
                                               
                                        
                                    }
                                    
                                    ?></tr>

    <tr>
        
        <td>Food</td>
        <td>YES</td>
        <td>YES</td><td>YES</td>
        
    </tr>
     <tr>
        
        <td>Cloths</td>
        <td>NO</td>
        <td>YES</td><td>YES</td>
        
    </tr>
</table>
              
             <div id='feedback'></div> </div> </center>
              
</body>
<?php $this->load->view('temp_footer');?>
