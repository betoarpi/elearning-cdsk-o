<?php
/**
 * The template for displaying archive pages
 * @package WordPress
 */

get_header(); ?>

<div class="MainContent container">
    <div class="row">
        <div class="Sidebar col-sm-3 hidden-xs">
            <?php get_sidebar(); ?>
        </div><!-- ends Menú Interno -->

        <main class="MainContent-grid col-sm-9" role="main">
        	<?php breadcrumb_trail(); ?>

        	<?php if ( have_posts() ) : ?>

        	<?php
				the_archive_title( '<h1 class="ML20 MR20">', '</h1><hr class="ML20 MR20">' );
			?>
			
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
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

			endif; ?> 
        </main><!-- ends MainContent grid -->
    </div>
</div><!-- ends Main Content -->

<?php get_footer(); ?>
