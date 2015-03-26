<?php
/**
 * Template Name: Embotelladoras
 * @package WordPress
 */

get_header(); ?>
<div class="MainContent container">
    <div class="row">
        <?php get_sidebar(); ?>

        <div class="col-sm-6">

            <?php breadcrumb_trail(); ?>

            <main class="MainContent-interna" role="main">
                <?php// Start the loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                    get_template_part( 'content', 'page' );

                // End the loop.
                endwhile;
                ?>
            </main><!-- ends MainContent grid -->
        </div>
        
        <?php //Load Aside Sidebar
            get_template_part( 'modules/aside', 'sidebar' ); ?>
    </div>
</div><!-- ends Main Content -->
<?php get_footer(); ?>