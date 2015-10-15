<h1>Thanks for joining us</h1>
<h2>one step more.. click on virfy button </h2>
<?php echo form_open("signup/update_record");
     echo form_hidden('email',$_GET['email']); ?>
      
         <button type="submit" >virfy</button> 
	<?php echo form_close(); ?>