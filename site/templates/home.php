<?php snippet('header') ?>

<main class="main" role="main">

	<div class="content_block">
		<div class="about_photo">
			<img src="<?php echo $site->user('annakaringal')->avatar()->url() ?>" alt="Anna Karingal" />
		</div>
		<div class="text">
		  <?php echo $page->text()->kirbytext() ?>
		</div>
	</div>

	<hr />


	<h2>latest projects</h2>
    <?php snippet('featured_projects') ?>

</main>

<?php snippet('footer') ?>