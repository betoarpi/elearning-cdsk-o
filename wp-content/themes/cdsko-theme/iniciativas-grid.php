<?php
/**
 * Template Name: Cuadricula Embajadores
 * @package WordPress
 */

get_header(); ?>

<div class="MainContent container">
    <div class="row">
        <?php //Load Empresas Sistema
        get_template_part( 'modules/embajadores', 'sidebar' ); ?>

        <main class="MainContent-grid col-sm-9 Embajadores-grid" role="main">
        	<?php breadcrumb_trail(); ?>

        	<?php if ( have_posts() ) : ?>
        	<?php query_posts( 'cat=13&posts_per_page=12' ); ?>
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

				
					/* Run the loop for the category page to output the posts.
					 * If you want to overload this in a child theme then include a file
					 * called loop-category.php and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				// End the loop.
				endwhile;

				// Previous/next page navigation.
				if(function_exists('wp_pagenavi')) { ?>
				<nav class="paginacion">
				    <?php wp_pagenavi(); ?>
				</nav>
				<?php }
				else {
				    // Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
						'next_text'          => __( 'Next page', 'twentyfifteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
					) );
				}

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'content', 'none' );

			endif; ?> 
        </main><!-- ends MainContent grid -->
    </div>
</div><!-- ends Main Content -->

<?php get_footer(); ?>