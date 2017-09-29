<?php

	$pageTitle = "Forms"; 

?>
<?php include('../inc/head.php');?>

	<div class="row">
		<div class="small-12 column">
			<h3><?php echo $pageTitle; ?></h3>
			<hr>
		</div>
	</div>


<div class="herc-panel">
	<div class="row">
	
	<div class="small-12 medium-4 column">
		<form>			
			 <fieldset>
  				<legend>Heading</legend>
  				<div class="field">
  					<label>Input</label>
  					<input type="text" tab-index="1"/>
  					<small class="error">Something Went Wrong</small>
  				</div>
  				<div class="field">
  					<label>Email</label>
  					<input type="email" tab-index="2"/>
  				</div>
  				<div class="field">
  					<label>Input <span>Hint</span></label>
  					<input type="text" tab-index="1"/>
  				</div>
  				  <div class="field">
  					<label>Input <span>Hint</span></label>
  					<select>
  						<option>Proxima Nova - Regular</option>
  						<option>Proxima Nova - Semibold</option>
  						<option>Miller Banner Roman</option>
  						<option>Miller Banner Roman Italics</option>
  					</select>
  				</div>
  				<div class="field field--footer">
  					<button class="btn">Button</button>
  					<button class="btn btn__hollow">Button</button>
  				</div>
 			</fieldset>
		</form>
	</div>

		

	</div>
</div>



<?php include('../inc/footer.php');?>