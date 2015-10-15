<html>
<head>
<meta name="generator" content="PhpED Version 7.0 (Build 7019)">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/deals.js"></script>
<title>Add new DEAL</title>
<link rel="shortcut icon"  href="">
</head>
<body>

                                              <?php 
   echo form_open('deals/add_new');
   
   
   ?>

Name:<input type=text name'name'></input>
     <br>Expiry Date:<input type=date name'name'></input>
              <br>
For: 
  <select>
  
  <option value="Cloths">Bonanza</option>
  <option value="Food">Hot Shots</option>
  </select>
                            
   <br>
Image: 
   <input type="file" name='pic' size="20"/> <br>
  <input type=submit value='Submit'></input>
      <?php
          form_close();
      ?>
</body>
</html>