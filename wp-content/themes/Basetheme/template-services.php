<?php
/**
* Template Name: Services Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
<?php includePart('templates/molecule-small-jumbotron.php',getFeaturedUrl(),get_the_content(),'size-s',true); ?>
<div class="white-bg">
    <div id="service-narbar" class="container filter-group filter--service">
        <ul>
            <li>
                <a href="?service=All">
                    All
                </a>             
            </li>
            <li>
                <a href="?service=Design">
                    Design
                </a>               
            </li>
            <li >
                <a href="?service=Development">
                    Development
                </a>            
            </li>
            <li >
                <a href="?service=Video">
                    Video
                </a>
            </li>
        </ul>
    </div>
</div>
<section id="work" class="container-fluid">
    <?php if(isset($_GET["service"])){ ?>
    <?php $paragraph = get_field('services_paragraph'); ?>
    <?php
    switch ( $_GET["service"] ) {
    case 'Video':
    // echo $paragraph[$i]['paragraph'];
    for ($i=0; $i < sizeof($paragraph); $i++) {
    if($paragraph[$i]['hashtag'] == "Video"){ ?>
    <div class="big-paragraph row">
        <?php includePart('templates/molecule-quote-main.php',$paragraph[$i]['paragraph'],'',''); ?>
    </div>
    <?php 	}
    }
    break;
    case 'Development': ?>
    <div class="big-paragraph row">
        <?php includePart('templates/molecule-quote-main.php',$paragraph[$i]['paragraph'],'',''); ?>
    </div>
    <?php
    break;
    case 'Design':  ?>
    <div class="big-paragraph row">
        <?php includePart('templates/molecule-quote-main.php',$paragraph[$i]['paragraph'],'',''); ?>
    </div>
    <?php
    break;

    default: ?>
  
    <?php
    # code...
    break;
    }
    ?>
    <?php } ?>
    
    <div class="row">
        <?php
        // WP_Query arguments
        if($_GET["service"] == 'All' OR  isset($_GET["service"]) == false){
        	  $args = array (
	        	'post_type'  =>  array( 'work' ),
	        );
	        
	    } else {
		  $args = array (
	        'post_type'  =>  array( 'work' ),
	        'tax_query' => array(
	                                array(
	                                'taxonomy' => 'services',
	                                'field' => 'slug',
	                                'terms' => $_GET["service"]),
	                                )
	                         
	        );
	    }
        // The Query
        $query = new WP_Query( $args );
        // The Loop
        if ( $query->
        have_posts() ) {
        while ( $query->
        have_posts() ) {
        $query->
        the_post();
        // debug(getFeaturedUrl( get_the_id() ));
            if(has_post_thumbnail( get_the_id())){
                includePart('templates/work-obj.php',
                getFeaturedUrl( get_the_id() ),
                hex2rgba( get_field('overlay_color') , 0.8),
                wp_get_post_terms(get_the_id(), 'services', array("fields" =>
                "all"))[0]->name,
                $case_study_url,
                $work_home[$j],
                wp_get_post_terms(get_the_id(), 'clients', array("fields" =>
                "all"))[0]->name
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
