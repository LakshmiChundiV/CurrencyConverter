<?php 
include('header.php');
?>
<title> Currency conversion </title>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/ajax.js"></script>
<?php include('container.php');?>
<div class="container">
	<h2> Currency conversion </h2>	
	<br />
	<br />
	<br />
	<form method="post" id="currency-form"> 		
		<div class="form-group">
		<label>From</label>
			<select name="from_currency">
				<option value="INR">Indian Rupee</option>
				<option value="USD" selected="1">US Dollar</option>
				<option value="AUD">Australian Dollar</option>
				<option value="EUR">Euro</option>
				<option value="EGP">Egyptian Pound</option>
				<option value="CNY">Chinese Yuan</option>
			</select>	
			&nbsp;<label>Amount</label>	
			<input type="text" placeholder="Currency" name="amount" id="amount" />			
			&nbsp;<label>To</label>
			<select name="to_currency">
				<option value="INR" selected="1">Indian Rupee</option>
				<option value="USD">US Dollar</option>
				<option value="AUD">Australian Dollar</option>
				<option value="EUR">Euro</option>
				<option value="EGP">Egyptian Pound</option>
				<option value="CNY">Chinese Yuan</option>
			</select>			
			&nbsp;&nbsp;<button type="submit" name="convert" id="convert" class="btn btn-default">Convert</button>	
				
		</div>			
	</form>	
	
	<div class="form-group" id="converted_rate"></div>	
	<div id="converted_amount"></div>
				
	<div style="margin:50px 0px 0px 0px;">
					
	</div>		
</div>
<?php include('footer.php');?>


