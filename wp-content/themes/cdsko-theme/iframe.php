<?php
/**
 * Template Name: iFrame
 * @package WordPress
 */

get_header(); ?>

<div class="MainContent container">
    <div class="row">
        <div class="col-sm-12">

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
                <iframe frameborder="0" name="iFrame" id="iFrame" width="<?php the_field('ancho'); ?>" height="<?php the_field('alto'); ?>" src="<?php the_field('iframe_link'); ?>" scrolling="no" style="border:none; z-index:-100"></iframe>
            </main><!-- ends MainContent grid -->
        </div> 
    </div>
</div><!-- ends Main Content -->

<?php get_footer(); ?>