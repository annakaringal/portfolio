<ul class="teaser cf">
	<?php foreach($page->children()->visible() as $subcat): ?>
		<h3><a href="<?php echo $subcat->url()?>"><?php echo $subcat->title()?></a></h3>

		<?php foreach($subcat->children()->visible->limit(4) as $featured): ?>
			<li> <!--show first image as featured image-->
			    <?php if($image = $featured->images()->sortBy('sort', 'asc')->first()): ?>
			    <a href="<?php echo $featured->url() ?>" class="featured">
			    	<?php echo thumb($image, array('width' => 400, 'height' => 400, 'crop' => true)); ?>
			    </a>
			    <p class="project_description"><b><a class="project_title" href="<?php echo $featured->url() ?>"><?php echo $project->title()->html() ?></a></b>
			    	<br /><em><?php echo $project->skill_areas() ?></em>
			    </p>
			</li>

		<?php endforeach ?>

	<?php endforeach; ?>

</ul>