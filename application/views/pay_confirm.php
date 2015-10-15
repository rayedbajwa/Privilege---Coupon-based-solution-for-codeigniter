<?php  $this->load->view('temp_navbar');?>
<body><center>
    
    <div id="clear" style="height:300px"></div>
    <div id="text-view" style="height:300px">
    <p>
        Your Payment is being reviewed by Moderators.</br>
        An Email Notification will be sent to you soon.</br>
        <?php echo anchor('home','Home');
        $this->load->view('temp_footer');
        ?>
    </p>
    </div>
    </center>