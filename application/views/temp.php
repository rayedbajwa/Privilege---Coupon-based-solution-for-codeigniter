<html>
      <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="deals pakistan, discount cards, website pakistani, groupon pakistani, discount pak, HTML" />









 <link href='<?php echo base_url(); ?>assets\css\bootstrap.min.css' rel='stylesheet'> </link>
         
                    <link href='<?php echo base_url(); ?>assets\css\bootstrap-responsive.css' rel='stylesheet'> </link>
            <link href='<?php echo base_url(); ?>assets\css\core.css' rel='stylesheet'> </link>
         
           <link href='<?php echo base_url(); ?>assets\css\bootstrap-theme.min.css' rel='stylesheet'>       </link>
      

     
<link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/css/styles.css");?> />


          <title>PrivilegedPK....Feel Privileged !!!</title>
          </head>
      <body >

<div class="navbar navbar-inverse" role = "navigation">
              <div class="navbar-inner">
                  <ul class="nav navbar-nav navbar-static-top">
                      <li>  <a class='navbar-brand' href='#'>Home</a></li>
                       <li>  <a href=<?php echo base_url('index.php/deals');?>>All Deals</a></li>
                        <li>  <a href='#'>Latest Deals</a></li>
                         <li>  <a href='#'>Hot Deals</a></li>
                  </ul>
                   <ul class = "nav pull-right">
                  <?php 
                  
                  
                 
                    if(!$this->session->userdata('logged_in'))
                    {  echo ' 
                      <li><a data-toggle="modal" href="#login" >Login</a></li>
					  <div class="modal hide fade" id="login">
							<div class="modal-header">
									<div align="right">	<a href="#"  data-dismiss="modal">×</a> </div>
											<h4>Welcome to privilege</h4>
							</div>
						   <div class="modal-body">
									<div  style="width:55%;float:left; ">
								
                                                                            <?php echo form_open("login"); ?>
									<p><input type="text" class="span3" id="username" name="username" placeholder="User Nsme" value=""></p>
									<p><input type="password" class="span3" id="pass" name="pass" placeholder="Enter Password"></p>
									<p><button type="submit" class="btn btn-success">Sign in</button> <a href="">Forgot Password</a></p>
									 <?php echo form_close(); ?>
									</div>
									<div style="height:60%;width:45%;float:left;">
									<button class="btn btn-facebook"><i class="fa fa-facebook"></i> f&nbsp| Connect with Facebook</button>
			f                      						</div>
							</div>																	
					</div>
              
                      <li><a data-toggle="modal" href="#signup" >Sign up</a></li>
					  
					  <div class="modal hide fade" id="signup">
							<div class="modal-header">
									<div align="right">	<a href="#"  data-dismiss="modal">×</a> </div>
											<h4>Welcome to privilege</h4>
							</div>
						   <div class="modal-body">
									<div  style="width:55%;float:left; ">
                                                                            
									<?php echo form_open("signup"); ?>
									<p><input type="text" class="span3" id="user_full_name" name="user_full_name" placeholder="Enter Name" value=""></p>
									<p><input type="text" class="span3" id="user_name" name="user_name" placeholder="Enter User Name" value=""></p>
									<p><input type="text" class="span3" id="email_address" name="email_address" placeholder="Enter Email" value=""></p>
									<p><input type="password" class="span3" id="password" name="password" placeholder="Enter Password"></p>
									<p><input type="password" class="span3" id="con_password" name="con_password" placeholder="ReEnter Password"></p>
									<p><button type="submit" class="btn btn-success">Sign up</button> </p>
									<?php echo form_close(); ?>
									</div>
									<div style="height:60%;width:45%;float:left;">
									<button class="btn btn-facebook"><i class="fa fa-facebook"></i> f&nbsp| Signup with Facebook</button>
									</div>
							</div>																	
					</div>';
                    }
                    else{}
                    
                    
                  ?>
                
                      <li>  <a class='navbar-brand' href=<?php echo base_url('index.php/cart/viewCart');?>>Cart</a></li>
                  </ul>
                </div>
              </div>
<center>

 <div id="myCarousel" class="carousel slide" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
             <div class="fill" style="background-image:url(<?php echo base_url('assets/images/1.jpg'); ?>);">
             </div>
          <div class="container">
            <div class="carousel-caption">
              <h2>Subscribe to PrivilegedPK</h2>
              <p>Get the best deals in Pakistan.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="fill" style="background-image:url(<?php echo base_url('assets/images/2.jpg'); ?>);">
             </div>
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>What the hell</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
         <div class="fill" style="background-image:url(<?php echo base_url('assets/images/3.jpg'); ?>);">
             </div>
          <div class="container">
            <div class="carousel-caption">
              <h1>Kick ASS offer</h1>
              <p>blah blah</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="pull-center">
      <a class="carousel-control left " href="#myCarousel" data-slide="prev">&ltrif;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rtrif;</a>
      </div></div>
  
    
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
            
        
        <div id="sidebar">
            <h3>Categories</h3>
            <ul class="sidebar_menu">
			    <li><a href="#">All Deals</a></li>
                <li><a href="#">Accessories</a></li>				
                <li><a href="#">Automobile</a></li>
                <li><a href="#">Books</a></li>				
            	<li><a href="#">Electronics</a></li>
                <li><a href="#">Health &amp; Fitness</a></li>     
                <li><a href="#">Food</a></li>				
                <li><a href="#">Events &amp; Activites</a></li>
				<li><a href="#">Jewelry &amp; Watches</a></li>
				<li><a href="#">Home &amp; Lifestyle</a></li>
				<li><a href="#">Toys &amp; Arts</a></li>
                <li><a href="#">Sports</a></li>
			</ul>
            <h3><a class="sidebar_title" href="http://PrivilegedPK" title="http://PrivilegedPK.com/"  target="_blank">Newsletter</a></h3>
            <p>Subscribe to Privilege</p>
            <div id="newsletter">
                <form action="#" method="get">
                  <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div> <!-- END of sidebar -->
        
      
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    
   
</div>



</body>
<footer>
    
 
<script type="text/javascript" src="<?php echo base_url(); ?>assets\js\jquery-2.1.0.min.js"   ></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" ></script>
<script src="<?php echo base_url('assets/js/bootstrap.js') ?>" ></script>

</footer>
</html>