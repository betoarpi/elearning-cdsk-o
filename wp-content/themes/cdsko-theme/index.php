<?php
/**
 * The main template file
 * @package WordPress
 */

get_header(); ?>

<div class="MainContent container">
    <div class="row">
        
        <?php get_sidebar(); ?>

        <main class="MainContent-grid col-sm-8" role="main">

            <?php if ( have_posts() ) : ?>
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); 

				if ( is_home() ) {
					query_posts( 'cat=2,4' ); 
				}

				// Include the page content template.
					get_template_part( 'content', get_post_format() );

				// End the loop.
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
					'next_text'          => __( 'Next page', 'twentyfifteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
				) );

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'content', 'none' );

			endif;
			?>
        </main><!-- ends MainContent grid -->
    </div>
</div><!-- ends Main Content -->

<?php get_footer(); ?>
