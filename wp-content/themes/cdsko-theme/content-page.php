<?php
/**
 * The template used for displaying page content
 * @package WordPress
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('MainContent-interna-full'); ?>>
	<article class="MainContent-interna-item-container">
		<?php the_title( '<h3 class="Title">', '</h3>' ); ?>
        <?php the_content(); ?>
	</article>
</div>
