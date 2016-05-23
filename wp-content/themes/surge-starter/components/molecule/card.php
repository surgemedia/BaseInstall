<article class="<?php echo $vars['class'] ?>">
	<img class="img-responsive" src="<?php echo $vars["image"]?>" alt=""></img>
	<hgroup>
		<h6><?php echo $vars["subtitle"]?></h6>
		<h1><?php echo $vars["title"]?></h1>
	</hgroup>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
	<a class="btn" href="<?php echo $vars['button'][0]['href']; ?>"><?php echo $vars['button'][0]['text']; ?></a>
	
</article>