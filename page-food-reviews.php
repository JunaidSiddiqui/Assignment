<?php

/**
 * Template Name: Hajujo's - Food Reviews
 **/
 
 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				$query = new WP_query( array('post_type' => 'food_reviews', 'posts_per_page' => 3 ));
			
				while ( $query->have_posts() ) : $query->the_post();
				
					get_template_part( 'template-parts/content', 'page-food-reviews' );
            	
                endwhile; 
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();