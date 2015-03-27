<?php
/**
 * Template Name: Contacto
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
        <div class="Sidebar col-sm-3 hidden-xs">
            <?php dynamic_sidebar( 'widget-internas' ); ?>
        </div><!-- ends Menú Interno -->

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
        
        <aside class="AsideSidebar col-sm-3 no-margin-top">
            <article class="AsideSidebar-item">
                <div class="AsideSidebar-item-container">
                    <?php dynamic_sidebar( 'widget-contacto' ); ?>
                </div>
            </article>
        </aside><!-- ends Menú Interno -->  
    </div>
</div><!-- ends Main Content -->
<?php get_footer(); ?>
