<?php  
/* 
Template Name: Plantilla de Registro 
*/  
get_header(); ?>

<div class="MainContent container">
    <div class="row">
        <div class="col-sm-12">

            <main class="MainContent-interna PT40" role="main">
                <div id="post-<?php the_ID(); ?>" <?php post_class('MainContent-interna-full'); ?>>
                    <article class="MainContent-interna-item-container loginform-container PB60">
                 		<?php
                        // Start the loop.
                        while ( have_posts() ) : the_post(); ?>
                            <h3 class="Title"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        <?php // End the loop.
                        endwhile;
                        ?>
                    </article>
                </div>
            </main><!-- ends MainContent grid -->
        </div> 
    </div>
</div><!-- ends Main Content -->

<?php get_footer(); ?>