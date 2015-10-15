<head>
<link rel="icon" href="<?=base_url()?>/favicon.png" type="image/png">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href=<?php echo base_url("assets/css/core.css");?> />
<div class="navbar navbar-default" style="margin-bottom: -2%;"role = "navigation">
    <div class="container-fluid">
              <div class="navbar-inner">
                 <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 
                     <div id="logo" style=" background-image: url('<?php echo base_url('/assets/images/logoo.png');?>'); position: absolute;
    top: 0;
    left: 7%;
    right: 0;
    bottom: 0;background-repeat: no-repeat;
   background-size: cover;
background-position-y: -30px; width:200px">
                     <a class="navbar-brand" style="width: inherit;"href="<?php echo base_url('index.php\home');?>"/> </a> </li>  
                     </div>
                     </div>
       <div class="nav navbar-collapse ">
           
     
                  <div class="nav navbar-nav navbar-right" style="width:170px">
                 
                  <?php 
                  
               
                
                    if(!$this->session->userdata('logged_in'))
                    {  
                       echo '<span class="glyphicon glyphicon-user" style="margin-right: -5%;float:left;margin-top: 10%;"></span>';
                      $this->load->view('temp_signin');
                     echo '<span class="slash" style="margin-top: 10%;
float: left;
}">/</span>';
                      $this->load->view('temp_singup');
                      
                    }
                    else{
                     echo "<li>  <a class='navbar-brand' href=".base_url('index.php/cart/viewCart')."/> <span class='glyphicon glyphicon-shopping-cart'>Cart</span></a></li> "
                    .' <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> </a>
          <ul class="dropdown-menu">
          <li><a href='.base_url('index.php/profile?id='.$this->session->userdata['userid']).'>Logged in as '.$this->session->userdata['username'].'</a></li>
           <li><a href='.base_url('deals').'>Purchased Deals</a></li>
            <li><a href='.base_url('membership').'>Membership</a></li>
            <li><a href='.base_url('index.php/main/logout').'>Logout</a></li>
           ';
                       
                   if($this->session->userdata('flag')=="Admin")
                 
                       echo '<li><a href='.base_url('/admin/mainPage').'>Admin Panel</a></li>';
                   
                    
                    
                  }  
                    
                  ?>
                
                       
                 
                 
                </div>
       </div></div>
    </div></div>

</head>