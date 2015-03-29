<?php
/**
 * The template for displaying all single posts and attachments
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
				while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class('MainContent-interna-full'); ?>>
					<article class="MainContent-interna-item-container"><!-- 
							<span class="ItemCategory PT10">
								<?php
								foreach((get_the_category()) as $category) { 
								    echo $category->cat_name . ' '; 
								} 
								?>
							</span> -->

							<!-- <time><?php the_time('l, F j, Y'); ?></time> -->

							<h3 class="Title"><?php the_title(); ?></h3>

							<?php the_content(); ?>

							<?php if ( is_user_logged_in() ) {
								the_field('contenido_solo_registrados'); ?>

								<?php if( get_field('curso_link') ): ?>
									<a class="MoreBtn" href="<?php the_field('curso_link'); ?>">¡Regístrate al curso!</a>
								<?php endif; ?>
							<?php } ?>
					</article>
				<div><!-- #post-## -->

				<? // End the loop.
				endwhile;
				?>
            </main><!-- ends MainContent grid -->
        </div>

        
    </div>
</div><!-- ends Main Content -->
<?php get_footer(); ?>
