<title>Deals purchased</title>
<style>
    .product_gallery{
    height: auto;}
</style>
<div id="templatemo_main">
    

<div id="content" style="float: left;width: 130%; margin-left:10%;">
    <center> <h1>Deals in hand</h1>   </center>    
    <div id="pur-content">
 <?php   
 $iprev=7;
    if(isset($_GET['more'])){
        $iprev=$iprev+$_GET['more'];
        
        
    }
     
    $i=0;
             foreach ($pdeals  as $row){                 
            $i++;  ?>
        	<div class="col col_14 product_gallery">
            	<a href="<?php echo 'deals/productdetails?id='.$row['id'];?>" ><img src="<?php echo base_url().$row['image'];?>" alt="Product 01" /></a>
                <h3><?php echo $row['name']; ?></h3>
                <p class="product_price">
                   
                                                                       
                            
                </p>
                
                 <span class="brand_display">by RnB</span></br>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#viewCoup<?php echo $i; ?>">View Coupon</button>

<div class="modal fade" id="viewCoup<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Coupon</h4>
      </div>
      <div class="modal-body">
          <h2>     <?php echo $row['coup']; ?></h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div></br>
            <?php                                                             
             
          echo  anchor('deals/delete?id='.$row['pur_id'],'Remove Deal');
            
             ?>
                       
            </div> 
    
      <?php      	
        if($i>$iprev){break;}  }  
        
        
        ?> 
 </div>


</div>

<?php  if($i>$iprev)
                       {
                       echo '<div class="view_more"><center><a href="?more='.$i.'"><button class="btn btn-default">View More</button></a></center></div></br>';
                       }  ?>
</div>
