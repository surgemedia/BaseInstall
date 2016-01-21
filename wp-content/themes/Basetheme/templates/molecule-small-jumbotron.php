<?php 
		$image = $args[1]; 
		$content = $args[2];
		 $image_url = aq_resize($image,1920,1080,true,true,true);

		  ?>
<section id="jumbotron" class="big-background size-s" style="background-image:url('<?php echo $image ?>');">
    <div class="pattern-bg"></div>
        <div class="container">
            <div class="quote text-center"><p><?php echo $content; ?></p>
			
			<i class="surge-icon-quotation_mark_start"></i>
			<i class="surge-icon-quotation_mark_end"></i>
            </div>

        </div>
    </section>