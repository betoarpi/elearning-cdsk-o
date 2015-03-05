<?php
/**
 * The default template for displaying content
 * @package WordPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('MainContent-item'); ?>>
	<a href="<?php the_permalink(); ?>" class="MainContent-item-container">
		<span class="ItemCategory">
			<?php
			foreach((get_the_category()) as $category) { 
			    echo $category->cat_name . ' '; 
			} 
			?>
		</span>
		<?php if ( has_post_thumbnail() ) { ?>
		<figure class="ItemThumbnail">
			<?php the_post_thumbnail('news-thumb'); ?>
		</figure>
		<?php } ?>

		<time><?php the_time('l, F j, Y'); ?></time>

		<h3 class="Title"><?php the_title(); ?></h3>

		<?php the_excerpt(); ?>

		<button class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></button>
	</a>
</article><!-- #post-## -->