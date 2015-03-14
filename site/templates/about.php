<?php snippet('header') ?>

<main class="main" role="main">

	<div class="content_block">
		<div class="about_photo">
			<img src="<?php echo $site->user('annakaringal')->avatar()->url() ?>" alt="Anna Karingal" />
		</div>
		<div class="text">
		  <h3><?php echo $page->title()->html() ?></h3>
		  <?php echo $page->text()->kirbytext() ?>
		</div>
	</div>

</main>

<?php snippet('footer') ?>