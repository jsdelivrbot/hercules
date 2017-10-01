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
  				<div class="fgroup">
  					<label>Input</label>
  					<input type="text" tab-index="1"/>
  					<small class="error">Something Went Wrong</small>
  				</div>
          <div class="fgroup">
  					<label>Input <span>Hint</span></label>
  					<input type="text" tab-index="1"/>
  				</div>
          <div class="fgroup">
  					<label>Input</label>
            <div class="select">
  					 <select>
  					 	<option>Proxima Nova - Regular</option>
  					 	<option>Proxima Nova - Semibold</option>
  					 	<option>Miller Banner Roman</option>
  					 	<option>Miller Banner Roman Italics</option>
  					 </select>
            </div>
  				</div>

          <div class="fgroup">
              

              <label class="control checkbox">
                <input type="checkbox">
                <span class="control-indicator"></span>
                Checkbox 1
              </label>

              <label class="control checkbox">
                <input type="checkbox">
                <span class="control-indicator"></span>
                Checkbox 2
              </label>

              <label class="control radio">
                <input id="radio1" name="radio" type="radio">
                <span class="control-indicator"></span>
                Radio 1
              </label>
              <label class="control radio">
                <input id="radio2" name="radio" type="radio">
                <span class="control-indicator"></span>
                Radio 2
              </label>

          </div>

          <div class="fgroup">
            <label>Input</label>
            <textarea></textarea>
          </div>
          <div class="fgroup fgroup--footer">
  					<button class="btn">Button</button>
  					<button class="btn btn__hollow">Button</button>
  				</div>
 			</fieldset>
		</form>
	</div>

		

	</div>
</div>



<?php include('../inc/footer.php');?>