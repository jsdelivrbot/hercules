<?php

	$pageTitle = "Cards"; 

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
			<h5 class="subtitle">Floating</h5>
			<article class="card card__floating">
				<a href="#">
				<img srcset="/images/temp/card.png 1x, /images/temp/card@2x.png 2x, /images/temp/card@3x.png 3x"
   					 src="/images/temp/card.png"
   					 height="200px"
   					 width="350px"
   					 alt="Floating Card" />
   				</a>
   				<h5>Designer Spotlight &mdash; Rolex</h5>
   				<a href="#">Shop Now</a>
			</article>
		</div>

		<div class="small-4 column">
			<h5 class="subtitle">Contained</h5>
			<article class="card card__contained">
				<a href="#">
				<img srcset="/images/temp/card.png 1x, /images/temp/card@2x.png 2x, /images/temp/card@3x.png 3x"
   					 src="/images/temp/card.png"
   					 height="200px"
   					 width="350px"
   					 alt="Floating Card" />
   				</a>
   				<div>
   					<h5>Designer Spotlight &mdash; Rolex</h5>
   					<a href="#">Shop Now</a>
   				</div>
			</article>
		</div>


		<div class="small-4 column">
			<h5 class="subtitle">Overlay</h5>
			<article class="card card__overlay">
				<a href="#">
   				<div>
   					<h5>Designer Spotlight &mdash; Rolex</h5>
   				</div>
				<img srcset="/images/temp/card.png 1x, /images/temp/card@2x.png 2x, /images/temp/card@3x.png 3x"
   					 src="/images/temp/card.png"
   					 height="200px"
   					 width="350px"
   					 alt="Floating Card" />
   				</a>
			</article>
		</div>

	</div>
</div>



<?php include('../inc/footer.php');?>