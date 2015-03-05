<?php
/**
 * The template for displaying pages content
 * @package WordPress
 */

get_header(); ?>
<div class="MainContent container">
    <div class="row">
        <div class="Sidebar col-sm-3 hidden-xs">
            <?php get_sidebar(); ?>
        </div><!-- ends Menú Interno -->

        <div class="col-sm-9">

            <?php breadcrumb_trail(); ?>

            <main class="MainContent-interna" role="main">
         		<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

				// End the loop.
				endwhile;
				?>
            </main><!-- ends MainContent grid -->
        </div>

        
    </div>
</div><!-- ends Main Content -->
<?php get_footer(); ?>
