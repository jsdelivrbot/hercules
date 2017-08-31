<?php

	$pageTitle = "Avatars"; 

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
		<div class="small-4 column">
			<h5 class="subtitle">Avatar &mdash; Image</h5>
			<div class="avatar avatar__image">
				<img src="/images/temp/tracy.jpg" alt="Kim">
			</div>
		</div>
		<div class="small-4 column">
			<h5 class="subtitle">Avatar &mdash; Initials</h5>
			<div class="avatar avatar__initials">
				<span>MK</span>
			</div>
		</div>
		<div class="small-4 column">
			<h5 class="subtitle">Avatar &mdash; Initials Alt</h5>
			<div class="avatar avatar__initials avatar__initials--alt">
				<span>MK</span>
			</div>
		</div>
	</div>
</div>



<?php include('../inc/footer.php');?>