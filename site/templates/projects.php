<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
	  <h3><?php echo $page->title()->html() ?></h3>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <?php snippet('featured_projects') ?>

  </main>

<?php snippet('footer') ?>