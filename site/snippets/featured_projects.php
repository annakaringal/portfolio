<?php if ($page->isHomePage()): 
		$pgs = page('projects')->children() ;
		$lim = 3;
	else: 
		$pgs = $page->children() ; 
		$lim = 12;
	endif;

	foreach($pgs as $subpage): ?>
	<div class="subcat">
	<h4><?php echo $subpage->title() ?>
	<?php if($page->isHomePage()): ?>
		<a class="view_all" href="<?php echo html($subpage->url()) ?>">view all</a>
	<?php endif ?> 
	</h4>

	<ul class="teaser cf">
		<?php foreach ($subpage->children()->visible()->limit($lim) as $project): ?>
			<li>
			<?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
   				 <a href="<?php echo $project->url() ?>">
     			 <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    			</a>
			<?php endif; ?>

    		<p class="project_description">
    			<b><a class="project_title" href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></b>
             	<br /><em><?php echo $project->skill_areas() ?></em>
            </p>		
            </li>

			<?php if ($project->num()%3 == 0): ?>
				<!--clear end of each row-->
				<div class="cf"></div>
			<?php endif?>
		<?php endforeach; ?>
	</ul>
</div>

<?php endforeach; ?>
