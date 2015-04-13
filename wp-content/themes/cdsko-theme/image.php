<?php
/**
 * The template for displaying image attachments
 * @package WordPress
 */

get_header(); ?>

<?php
    // Start the loop.
    while ( have_posts() ) : the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('MainContent-interna-full'); ?>>
	<article class="MainContent-interna-item-container">
		<?php the_title( '<h3 class="Title">', '</h3>' ); ?>
        <div class="entry-attachment">
            <?php
                /**
                 * Filter the default Twenty Fifteen image attachment size.
                 *
                 * @since Twenty Fifteen 1.0
                 *
                 * @param string $image_size Image size. Default 'large'.
                 */
                $image_size = apply_filters( 'twentyfifteen_attachment_size', 'large' );

                echo wp_get_attachment_image( get_the_ID(), $image_size );
            ?>

            <?php if ( has_excerpt() ) : ?>
                <div class="entry-caption">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-caption -->
            <?php endif; ?>

        </div><!-- .entry-attachment -->
        <?php the_content(); ?>
	</article>
</div>
<?php   // End the loop.
    endwhile;
?>

<?php get_footer(); ?>
