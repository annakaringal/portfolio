<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php if($page->isHomePage()): ?>
    <title><?php echo strtolower($site->title()->html()) ?></title>
  <?php else: ?>
    <title><?php echo strtolower($page->title()->html()) ?> | <?php echo strtolower($site->title()->html()) ?></title>
  <?php endif ?>
  
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link rel="icon" href="/favicon.png">
  <?php echo css('assets/css/main.css') ?>

</head>
<body>

  <header class="header cf" role="banner">
    <a  class="logo"href="<?php echo url() ?>">
      <?php echo $site->title() ?>
    </a>
    <?php snippet('menu') ?>
  </header>