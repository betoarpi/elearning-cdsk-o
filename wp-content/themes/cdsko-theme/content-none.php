<?php
/**
 * The template part for displaying a message that posts cannot be found
 * @package WordPress
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<?php if ( is_category() ) : ?>
		<h1 class="page-title">Muy Pronto.</h1>
		<?php else : ?>
		<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyfifteen' ); ?></h1>
		<?php endif; ?>
	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyfifteen' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Lo siento pero no hay nada que se ajuste a tus criterios de búsqueda. Por favor, inténtalo de nuevo con palabras claves distintas.' ); ?></p>
			<?php get_search_form(); ?>

		<?php elseif ( is_category() ) : ?>

			<p>Por el momento seguimos trabajando para tener más y mejor contenido.</p>

			<h4>¡Regresa pronto!</h4>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfifteen' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
