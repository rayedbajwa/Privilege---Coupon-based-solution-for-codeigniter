     <?php echo form_open("forget_pass/change_pass");
     echo form_hidden('id',$_GET['id']); 
     echo form_hidden('un',$_GET['un']); ?>
     
       <p><input type="password"  name="pass" placeholder="new password">
       <p><input type="password"  name="repass" placeholder="re enter">
         <button type="submit" >Set</button> 
	<?php echo form_close(); ?>