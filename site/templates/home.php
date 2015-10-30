<?php snippet('header') ?>

<main class="main" role="main">

	<div class="content_block">
		<div class="text">
		  <?php echo $page->text()->kirbytext() ?>
		</div>
	</div>

	<hr class="invisible" />


	<h3>latest projects</h3>
    <?php snippet('featured_projects') ?>

</main>

<?php snippet('footer') ?>