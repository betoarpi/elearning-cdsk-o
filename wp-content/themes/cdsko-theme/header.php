<?php
/**
 * The template for displaying the header
 * @package WordPress
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js" lang="es" id="no-margin"> <!--<![endif]-->
    <head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php bloginfo('name'); ?> | Cedesko</title>

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/theme-assets/css/theme.css">

		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<![endif]-->
        
        <script src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/js/modernizr-2.6.2.min.js"></script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
        <div class="alert alert-block alert-error Tcenter">
            <h3 class="Tcenter alert-block-title">¡Atención!</h3>
            <p>Está utilizando un navegador obsoleto. <a href="http://browsehappy.com/" class="btn btn-danger">Descargue un nuevo navegador</a> o <a class="btn btn-success" href="http://www.google.com/chrome">instale Google Chrome </a> para mejorar la experiencia de uso en nuestro sitio.</p>
        </div>
        <![endif]-->

        <h1 class="seo-title"><?php the_title(); ?></h1>

        <header class="MainHeader">
            <div class="container">
                <div class="row">
                    <nav class="col-sm-12">
                        <h6 class="seo-title">Navegación Principal</h6>
                        <a href="<?php bloginfo('siteurl'); ?>" class="Logo">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/img/cedesko-logo-2.png" alt="Cedesko">
                        </a>
                        <?php //Load Social Nav
                        get_template_part( 'modules/nav', 'social' ); ?>
                        <a href="#" class="TopNav-toggle glyphicon glyphicon-menu-hamburger"></a>
                        <?php //Load Top Nav
                        get_template_part( 'modules/nav', 'top' ); ?>
                        <?php //Load Main Nav
                        get_template_part( 'modules/nav', 'main' ); ?>
                    </nav>
                </div>
            </div>
        </header><!-- ends Main Header -->

        <?php //Load Main Banner
            get_template_part( 'modules/nav', 'banner' ); ?>