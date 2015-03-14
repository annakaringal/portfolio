<?php snippet('header') ?>

  <main class="main" role="main">

	<div class="content_block">
	    <div class="text">
	      <h3><?php echo $page->title()->html() ?></h3>
	      <?php echo $page->text()->kirbytext() ?>
	    </div>
	</div>

    <?php snippet('projects') ?>

  </main>

<?php snippet('footer') ?>