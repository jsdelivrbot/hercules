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
			<h5 class="subtitle">Flat &mdash; Primary</h5>
		</div>
		<div class="small-6 column">
			<button class="btn btn--sml">Button</button>
			<button class="btn">Button</button>
			<button class="btn btn--lrg">Button</button>
			<button class="btn btn--lrg btn--expand">Button</button>
		</div>
		<div class="small-6 column">
			Code
		</div>
	</div>
</div>



<div class="herc-panel">
	<div class="row">
		<div class="small-12 column">
			<h5 class="subtitle">Hollow &mdash; Secondary</h5>
		</div>
		<div class="small-6 column">
			<button class="btn btn__hollow btn--sml">Button</button>
			<button class="btn btn__hollow">Button</button>
			<button class="btn btn__hollow btn--lrg">Button</button>
			<button class="btn btn__hollow btn--expand">Button</button>
		</div>
		<div class="small-6 column">
			Code
		</div>
	</div>
</div>



<div class="herc-panel">
	<div class="row">
		<div class="small-12 column">
			<h5 class="subtitle">Slab</h5>
		</div>
		<div class="small-12 column">
			<button class="btn-slab">
				<label>Label</label>
			</button>
			<button class="btn-slab">
				<label>Label</label>
				<hr>
				<span>Secondary Label</span>
			</button>
		</div>
	</div>
</div>
    

<div class="herc-panel">
	<div class="row">
		<div class="small-12 column">
			<h5 class="subtitle">Breadcrumb</h5>
		</div>
		<div class="small-12 column">
			<button class="btn-crumb">
				<label>Breadcrumb</label>
				<span></span>
			</button>
			<button class="btn-crumb">
				<label>Breadcrumb</label>
				<span></span>
			</button>
			<button class="btn-crumb">
				<label>Breadcrumb</label>
				<span></span>
			</button>
		</div>
	</div>
</div>

<?php include('../inc/footer.php');?>