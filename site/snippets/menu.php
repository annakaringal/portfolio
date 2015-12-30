<nav role="navigation">

  <ul class="menu cf">

    <?php if (!$page->isHomePage()): ?><li>
    <a href="/">home</a>
    </li>
    <?php endif?>
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>

</nav>
