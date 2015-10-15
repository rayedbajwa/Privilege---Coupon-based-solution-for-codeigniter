<html><head>
    
       <link rel="icon" href="<?=base_url()?>/favicon.png" type="image/png">
        <title>Feel Privileged in Pakistani Way</title>
    </head>
          <body style="background: url(<?php echo base_url('/assets/images/white-background-wallpaper-design-5112.jpg')?>);
                height: 100%;
                width:100%;
               background-size: cover;
background-repeat: no-repeat;
                ">               
<script src="<?php echo base_url('assets/js/bootstrap.js') ?>" ></script>
         
             
<?php $this->load->view('temp_navbar');?>
    
<div class="fill">
               <div class="jumbotron" style=" background-color: rgba(245, 245, 245, 0.4);">
                   <center>
  <h1>Feel Privileged</h1>
  <p>Shoppers royal treatment...</p>
  <p></p>
             <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Subscribe
</button>     
                   </center>
</div>
   <div class="modal fade" id="myModal" tabindex="-5" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Subscribe</h4>
      </div>
      <div class="modal-body">
          <input type="text" class="form-control" placeholder="Enter Your Email Address">
      </div>
      <div class="modal-footer">
        
        <button type="button" href="<?php echo base_url('index.php/home')?>"class="btn btn-primary">GO</button>
      </div>
    </div>
  </div>
   </div>          </div>
          </body>
     
        
          
</html>