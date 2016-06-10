<div class="<?php echo $vars['class']; ?> bg-light-grey border form">
		<hgroup>
			<h6><?php echo $vars["subtitle"]?></h6>
			<h1><?php echo $vars["title"]?></h1>
		</hgroup>
		<p><?php echo apply_filters('the_content',  $vars["content"]); ?></p>
        <?php displayGravityForm($vars["form"]) ?>
</div>