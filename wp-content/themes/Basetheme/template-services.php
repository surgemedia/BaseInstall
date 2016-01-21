<?php
/**
 * Template Name: Services Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php includePart('templates/molecule-small-jumbotron.php',getFeaturedUrl(),get_the_content()); ?>
    <div class="white-bg">
    	<div id="service-narbar" class="container filter-group filter--service">
    	<ul>
    		<li>
    			<button class="filter-service" data-filter-value="" >All</button>
    		</li>
    		<li>
    			<button class="filter-service" data-filter-value="design" >Design</button>
    		</li>
    		<li >
    			<button class="filter-service" data-filter-value="development" >Development</button>
    		</li>
    		<li >
    			<button class="filter-service" data-filter-value="video" >Video</button>
    		</li>
    	</ul>
    </div>
    </div>
    
<section id="work" class="container-fluid">
<div class="row">
<?php 
		// WP_Query arguments
		$args = array (
			'post_type'  => array( 'work' ),
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				// debug(getFeaturedUrl( get_the_id() ));

				if(has_post_thumbnail( get_the_id())){
					includePart('templates/work-obj.php',
		 			getFeaturedUrl( get_the_id() ),
		 			hex2rgba( get_field('overlay_color') , 0.8),
		 			wp_get_post_terms(get_the_id(), 'services', array("fields" => "all"))[0],
		 			$case_study_url,
		 			$work_home[$j],
		 			wp_get_post_terms(get_the_id(), 'clients', array("fields" => "all"))[0]
		 			);
	 			}

			}
		} else {
			echo 'no posts found';
		}

		// Restore original Post Data
		wp_reset_postdata();
	?>

	</div>
</section>

<?php endwhile; ?>


