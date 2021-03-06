<?php
/**
 * Unit Template Name: Unit Template
 * @package WordPress
 */

get_header(); ?>

<?php if( get_field('iframe_link') ): ?>
<div class="MainContent container">
    <div class="row">
        <div class="col-sm-12">

            <main class="MainContent-interna" role="main">

                <?php if ( have_posts() ) : ?>
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post(); ?>

                    <div id="post-<?php the_ID(); ?>" <?php post_class('MainContent-interna-full'); ?>>
                        <article class="MainContent-interna-item-container">
                            <h1 class="MainTitle"><?php the_title(); ?></h1>

                            <iframe frameborder="0" name="iFrame" id="iFrame" width="<?php the_field('ancho'); ?>" height="<?php the_field('alto'); ?>" src="<?php the_field('iframe_link'); ?>" scrolling="no" style="border:none; z-index:-100"></iframe>
                            <?php the_content(); ?>
                        </article>
                    </div>

                    <?php // End the loop.
                    endwhile;

                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                        'next_text'          => __( 'Next page', 'twentyfifteen' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
                    ) );

                // If no content, include the "No posts found" template.
                else :
                    get_template_part( 'content', 'none' );

                endif;
                ?>
            </main><!-- ends MainContent grid -->
        </div> 
    </div>
</div><!-- ends Main Content -->
<?php else : ?>
<div class="MainContent container">
    <div class="row">
        <?php //Load Empresas Sistema
        get_template_part( 'modules/embajadores', 'sidebar' ); ?>

        <main class="MainContent-grid col-sm-9" role="main">

            <?php if ( have_posts() ) : ?>
                <?php
                // Start the loop.
                while ( have_posts() ) : the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class('MainContent-interna-full'); ?>>
                    <article class="MainContent-interna-item-container">
                        <h1 class="MainTitle"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </article>
                </div>

                <?php // End the loop.
                endwhile;

                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                    'next_text'          => __( 'Next page', 'twentyfifteen' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
                ) );

            // If no content, include the "No posts found" template.
            else :
                get_template_part( 'content', 'none' );

            endif;
            ?>
        </main><!-- ends MainContent grid -->
    </div>
</div><!-- ends Main Content -->
<?php endif; ?>

<?php get_footer(); ?>
