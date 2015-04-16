<?php
/**
 * Template Name: Iniciativa del Sistema
 * @package WordPress
 */

get_header(); ?>
<div class="MainContent container">
    <div class="row">
        <div class="col-sm-9 col-sm-offset-3">
            <?php breadcrumb_trail(); ?>
        </div>
    </div>
    <div class="row">
        <?php get_sidebar(); ?>

        <div class="col-sm-6">

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
        
        <?php //Load Aside Sidebar
            get_template_part( 'modules/aside', 'iniciativabar' ); ?>  
    </div>
</div><!-- ends Main Content -->
<?php get_footer(); ?>
