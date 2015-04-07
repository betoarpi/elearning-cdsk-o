<?php
/**
 * Template Name: Cuadricula de Posts
 * @package WordPress
 */

get_header(); ?>
<div class="MainContent container">
    <div class="row">
        <div class="col-sm-12">
            <?php breadcrumb_trail(); ?>
        </div>
    </div>
    <div class="row">
        <?php 
        if ( have_posts() ) {
            wp_reset_query(); ?>
            <?php if ( is_page('iniciativas-del-sistema') ) { ?>
                <?php query_posts( 'cat=14&posts_per_page=12' ); ?>
            <?php } else if ( is_page('embajadores-coca-cola') ) { ?>
                <?php query_posts( 'cat=13&posts_per_page=12' ); ?>
            <?php } ?>
            <?php while ( have_posts() ) {
                the_post(); ?>
                <div class="col-sm-4">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('MainContent-item grid-posts'); ?>>
                        <a href="<?php the_permalink(); ?>" class="MainContent-item-container">
                            <?php if ( has_post_thumbnail() ) { ?>
                            <figure class="ItemThumbnail">
                                <?php the_post_thumbnail('news-thumb', array('class' => "img-responsive")); ?>
                            </figure>
                            <?php } ?>

                            <time><?php the_time('l, F j, Y'); ?></time>

                            <h3 class="Title"><?php the_title(); ?></h3>

                            <?php the_excerpt(); ?>

                            <button class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></button>
                        </a>
                    </article><!-- #post-## -->
                </div>
                
            <?php } // end while
            wp_reset_query();
        } // end if
        ?>
    </div>
</div><!-- ends Main Content -->
<?php get_footer(); ?>
