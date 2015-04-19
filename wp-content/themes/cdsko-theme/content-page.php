<?php
/**
 * The template used for displaying page content
 * @package WordPress
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('MainContent-interna-full'); ?>>
	<article class="MainContent-interna-item-container">
		<?php the_title( '<h3 class="Title">', '</h3>' ); ?>

        <?php if ( is_tree(85) || is_tree(69) ) ://Load Content Slides
            get_template_part( 'modules/content', 'slides' );
        else : endif;?>
		
		<?php if ( is_page_template('iniciativa-sistema.php') ) :
			if ( is_user_logged_in() ) {
				if ( is_page_template('iniciativa-sistema.php') ) ://Load Course Shortcode
			   		if( get_field('shortcode_del_curso') ):
			   			$shortcourse = get_field('shortcode_del_curso');
			   			the_content();
			           	echo do_shortcode($shortcourse);
			        endif;
			    endif;
			} else {
				the_field('mensaje_no_registrados');
			}
		else : 
			the_content(); ?>
		<?php endif; ?>
	</article>
</div>