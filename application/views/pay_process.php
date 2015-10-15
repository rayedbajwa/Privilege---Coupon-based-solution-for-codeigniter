


	<title>Payment</title>
<div style="
    height: 100px;
"></div>
        <div class="payment" style="margin-left:auto ;margin-right: auto; width:350px; display: block;">
    <h1> Total amount to pay: <?php echo $this->cart->total();?> </h1>
    <h2>Total months:  <?php foreach($this->cart->contents() as $hey)echo $hey['qty'];?></h2>
	<p id='fly'>Choose An appropriate Payment Method</p><br>
	
    
    <form>
	<select id='sel' class='select'>
		 <option value="" selected>Select here</option>
		<option value='ezpaisa'>Easy Paisa</option>
			<option value='btod'>Bank Transfer or Deposit</option>
				<option value='h2h'>Hand to Hand</option>
	</select>
	</form>
    <div id='ez' class='forms'>
    <?php echo form_open_multipart('upload/do_upload'); ?>
		Enter Transaction ID:<input type='text' name='trans_id'  required/>
		</br>
			Enter your Mobile number: <input type='number' name='mob_no' onkeypress="limitText(this,11) " required/></br>
				Enter  EasyPaisa Code: <input type='number' name='ez_code' id='limit_length' onkeypress="limitText(this,4) " required/></br>
		Enter total amount paid: <input type='number' name='total_amount'onkeypress="limitText(this,3) " required/></br>
		Enter Estimate Time of transaction: <input type=date name='time' /></br>


<?php $ara= array('pay_method'=>'EZ','months'=>$hey['qty'],'mtype'=>$hey['name']);echo form_hidden($ara);?>
Upload Scanned Receipt:  <input type='file' name='picFile' size='20'/></br>
</br>

	<input type='submit' method='post'/>	 
<?php echo form_close();?></div>
	



		<div id='btod' class='forms'>
		<?php echo form_open_multipart('upload/do_upload'); ?>
    
    
<?php $ara= array('pay_method'=>'BTOD','months'=>$hey['qty'],'mtype'=>$hey['name']);echo form_hidden($ara);?>
			<br>
			Enter Transaction ID:<input type='text' name='trans_id'  required/>
			</br>
			Enter total amount paid: <input type='text' name='total_amount' onkeypress="limitText(this,3) " required/></br>
			Enter Estimate Time of transaction: <input type=date name='time'  /></br>
Upload Scanned Receipt:  <input type='file' name='picFile' size='20'/></br>
			<input type='submit' method='post'/>
			 </form>
			</div>
			




			<div id='h2h' class='forms'>
					<?php echo form_open_multipart('upload/do_upload'); ?>
    
 <?php $ara= array('pay_method'=>'H2H','months'=>$hey['qty'],'mtype'=>$hey['name']);echo form_hidden($ara);?>
   <br>
				Enter Transaction ID:<input type='text' name='trans_id' required/></br>
					Enter Name of Agent:<input type='text' name='name_agent'/>
				</br>
				Enter total amount paid: <input type='text' name='total_amount' onkeypress="limitText(this,3) " required/></br>
				Enter Estimate Time of transaction: <input type=date name='time' /></br>
Upload Scanned Receipt:  <input type='file' name='picFile' size='20'/>
			<input type='submit' method='post' />	 
				</form>
				</div>
        </div>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/paymethod.js"></script>
<script>
    function limitText(limitField, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitNum.value = limitNum - limitField.value.length;
	}
    }
    

      
       
    </script>