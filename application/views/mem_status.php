<center><div class='fill'>
        <div style="height:300px"></div>
<?php


    echo '<h2>Membership Type:'.$stat[0]['mtype'].'</br>';
      echo 'Valid Till:'.$stat[0]['expire_time'].'</br></h2>';
    echo '<h3>Select below to extend: </h3>';
  
        echo form_open('/cart/extendMem');     
                                                                
            
                                                                     echo 'Months:';
                                                                              echo form_input('quan','1','maxlength="2"');?></br><?php
                                                                              $hidden=array('pid'=>$stat['pid'],'name'=>$stat[0]['mtype']);
                                                                        echo form_hidden($hidden);
                                                                         echo '<input type="submit" id="subButton" value="Extend Now">';
                                                                     
                                                                   
                                                               
                                                                    echo form_close();
                                                                




                                                                    ?></div>
</center>