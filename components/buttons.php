<?php

	$pageTitle = "Buttons"; 

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
		<div class="small-12 column">
			<h5 class="subtitle">Primary &mdash; Flat Button</h5>
		</div>
		<div class="small-12 column">
			<button class="btn btn--sml">Button</button>
			<button class="btn">Button</button>
			<button class="btn btn--lrg">Button</button>
		</div>
	</div>
</div>

<div class="herc-panel">
	<div class="row">
		<div class="small-12 column">
			<h5 class="subtitle">Secondary &mdash; Hollow Button</h5>
		</div>
		<div class="small-12 column">
			<button class="btn btn__hollow btn--sml">Button</button>
			<button class="btn btn__hollow">Button</button>
			<button class="btn btn__hollow btn--lrg">Button</button>
		</div>
	</div>
</div>

<div class="herc-panel">
	<div class="row">
		<div class="small-12 column">
			<h5 class="subtitle">UI &mdash; Slab</h5>
		</div>
		<div class="small-12 column">
			<button class="btn-slab">
				<label>Button</label>
			</button>
			<button class="btn-slab">
				<label>Button</label>
				<hr>
				<span>Label</span>
			</button>
		</div>
	</div>
</div>
    
<?php include('../inc/footer.php');?>