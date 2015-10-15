<?php
$this->load->view('temp_navbar');
?><center><h1>Error found</h1>
    </br>
    <?php
    echo $error;
    ?></br>
    <a href=<?php echo base_url('home');?>>Home</a>
</center>

<?php
$this->load->view('temp_footer');
?>