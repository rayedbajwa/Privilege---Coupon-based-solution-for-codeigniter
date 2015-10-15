<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login with CodeIgniter - Private Area</title>
 </head>
 <body>
   <h1>User Home</h1>
   <h2>Welcome <?php echo $username; ?>!</h2>
   <?php
   echo  anchor('main/logout','Login') ;
 ?>
   </body>
</html>