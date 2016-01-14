<?php
/**
 * Template Name: Home Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php 
	$exlude = array();
 ?>
<?php
$client = wp_get_post_terms(get_field('selected_work')[0], 'clients', array("fields" => "all"))[0];
 ?>

<section id="client-desc" class="row">
<div class="col-lg-5 logo">
	<img src="<?php echo get_field('logo',$client) ?>" alt="<?php echo $client->name; ?>">
</div>
<div class="col-lg-7 description">
	<?php echo $client->description; ?>
</div>




</section>

<?php 
		// WP_Query arguments
		$args = array (
			'post_type'              => array( 'work' ),
			'posts_per_page'	=> -1,
			'post__in' => get_field('selected_work'),
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		$count = 1;
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post(); 
				?>
		<section class="col-lg-12"  style="background-image: url('<?php echo get_field('background',$post->ID) ?>')" >
		<div class="col-4 <?php if($count % 2 == 0 ){ echo "pull-right"; } ?>">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
			<?php echo edit_post_link('edit', '<p>', '</p>'); ?>
			<?php //$post_meta = get_post_meta($post->ID); ?>
			<?php  ?>
			<?php

			 if(get_field('code_example') ){
			 	debug(get_field('code_example'));
				}
				 ?>
				<?php
			 if(get_field('design')){
			 	debug(get_field('design'));

				}
				 ?>
				 <?php
				 // debug($post_meta);
			 if(get_field('video')){
			 	debug(get_field('video'));
				}
				 ?>
		</div>
				

		</section>
		<?php 
		$count++;
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();
	?>



<?php endwhile; ?>


