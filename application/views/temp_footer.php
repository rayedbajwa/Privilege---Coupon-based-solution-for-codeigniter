<!--<footer>
     <div class="cleaner"></div>
    
<div id="templatemo_footer" >
    <div  class="row" >
    	<div class="col col_16">
        	<h4>Categories</h4>
            <ul class="footer_menu">
			    <li><a href="#">All Deals</a></li>
                <li><a href="#">Accessories</a></li>				
                <li><a href="#">Automobile</a></li>
                <li><a href="#">Books</a></li>				
		  </ul>  
        </div>
        <div class="col col_16">
        	<h4>Pages</h4>
            <ul class="footer_menu">
            	<li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Privacy</a></li>
			</ul>  
        </div>
        <div class="col col_16">
       	  <h4>Social</h4>
            <ul class="footer_menu">
            	<li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">LinkedIn</a></li> 
		  </ul>  
        </div>
        <div class="col col_13 no_margin_right">
        	<h4>About Us</h4>
            <p>WeDevz</p>
        </div>
        
        <div class="cleaner h40"></div>
		
			Copyright 2014 Privilege | Designed by <a href="http://www.wedevz.com" rel="nofollow" target="_parent">WeDevZ</a>
		</center>
    </div>
    </div> -->  
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets\js\jquery-2.1.0.min.js"   ></script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
       <script>
          
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1442367142672909',
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any authentication related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below 
  // will be handled. 
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs. 
    if (response.status === 'connected') {
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they 
      // have logged in to the app.
      testAPI();
      
    } else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so. 
      // In real-life usage, you wouldn't want to immediately prompt someone to login 
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they 
      // result from direct interaction from people using the app (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
     FB.login(function(response) {
          
           
         },{scope: 'email'});
 
    } else {
      // In this case, the person is not logged into Facebook, so we call the login() 
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook. 
      // The same caveats as above apply to the FB.login() call here.
     FB.login(function(response) {
         
         },{scope: 'email'});
 
    }
  });
  };

  
  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  // Here we run a very simple test of the Graph API after login is successful. 
  // This testAPI() function is only called in those cases. 
  function testAPI() {
     
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function() {
     $.ajax({
    
    url: "<?php echo base_url('fb/getData');?>",
    success: function(data) {
          
        $('#user_full_name').val(data.fnam);
        $('#user_name').val(data.unam);$('#username').val(data.unam);
        
        $('#email_address').val(data.email);
        $('#user_full_name').val(data.fnam);
      
        
    }
});
  } );
    
    }
    

  


(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=431194207025583";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

$( ".list-group" ).mouseenter(function() {
 $(this).stop().animate({width:'200px'},500,function(){$(this).find("p.text-side").css('display','block');});
 

});
$( ".list-group" ).mouseleave(function() {
    
 $(this).stop().animate({width:'55px'},100);
 $("p.text-side").css('display','none');

});
 


       </script>

</footer>