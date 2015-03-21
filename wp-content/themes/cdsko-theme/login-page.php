<?php
/**
 * Template Name: Login Page Template
 * @package WordPress
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
        				while ( have_posts() ) : the_post(); 

                        if ( ! is_user_logged_in() ) { // Display WordPress login form:
                        $args = array(
                            'redirect' => home_url('/mis-cursos/'), 
                            'form_id' => 'loginform-custom',
                            'label_username' => __( 'Nombre de Usuario' ),
                            'label_password' => __( 'Password' ),
                            'label_remember' => __( 'Recordarme' ),
                            'label_log_in' => __( 'Acceder' ),
                            'remember' => true
                        ); ?>
                            <h3 class="Title"><?php the_title(); ?></h3>
                            <?php wp_login_form($args); ?>
                            <div class="registerBtn">
                                De click aquí para <a href="<?php bloginfo('siteurl'); ?>/registro/">Registrarse</a>
                            </div>
                        <?php } else { // If logged in: ?>
                            <h3 class="Title">Cerrar Sesión</h3>
                            <div class="button-primary"><?php wp_loginout( home_url() ); ?></div>
                        <?php }

        				// End the loop.
        				endwhile;
        				?>
                    </article>
                </div>
            </main><!-- ends MainContent grid -->
        </div> 
    </div>
</div><!-- ends Main Content -->

<?php get_footer(); ?>