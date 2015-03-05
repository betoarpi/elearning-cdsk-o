<?php
/**
 * The template for displaying 404 pages (not found)
 *
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

            <main class="MainContent-interna MT40" role="main">
            	<h1 class="Tcenter"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>

            	<p class="Tcenter MB60"><?php _e( 'Parece que no hay nada en esa ubicación ¿quieres probar buscando?' ); ?></p>
				<?php get_search_form(); ?>
            </main><!-- ends MainContent grid -->
        </div>

        
    </div>
</div><!-- ends Main Content -->
<?php get_footer(); ?>