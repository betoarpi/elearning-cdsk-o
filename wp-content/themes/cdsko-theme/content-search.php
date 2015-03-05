<?php
/**
 * The template part for displaying results in search pages
 * @package WordPress
 */
?>

<article id="post-<?php the_ID(); ?>" class="MainContent-item">
	<div class="MainContent-item-container">
		<span class="ItemCategory">
			<?php
			foreach((get_the_category()) as $category) { 
			    echo $category->cat_name . ' '; 
			} 
			?>
		</span>
		<?php if ( has_post_thumbnail() ) { ?>
		<figure class="ItemThumbnail">
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('news-thumb'); ?>
			</a>
		</figure>
		<?php } ?>

		<time><?php the_time('l, F j, Y'); ?></time>

		<h3 class="Title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<p><?php the_excerpt(); ?></p>

		<a href="<?php the_permalink(); ?>" class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></a>
	</div>
</article><!-- #post-## -->
