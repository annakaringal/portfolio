<div class="subcat">
  <ul class="teaser all cf">
    <?php foreach(page()->children()->visible()->limit(20) as $project): ?>
    <li>
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
      <a href="<?php echo $project->url() ?>">
        <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" class-="feat_img">
      </a></p>
      <p class="project_description"><b><a class="project_title" href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></b>
                <br /><em><?php echo $project->skill_areas() ?></em>
              </p>
      <?php endif ?>
    </li>
    <?php if($project->num()%4 == 0): ?>
      <div class="cf"> </div>
    <?php endif ?>
    <?php endforeach ?>
  </ul>
</div>
