<?php
/**
 * The sidebar containing the main widget area
 * @package WordPress
 */
	if ( is_tree(22) ) : ?>
<nav class="MenuInterno col-sm-3">
    <h6 class="MenuInterno-heading hidden-xs"><span class="glyphicon glyphicon-option-vertical hidden-sm"></span> Alianzas <span class="seo-title">- Menú</span></h6>

    <p class="MenuInterno-heading-toggle visible-xs">Seleccione una Opción <span class="glyphicon glyphicon-menu-down heading-toggle"></span></p>

    <ul class="MenuInterno-list">
        <li><a href="<?php bloginfo('siteurl'); ?>/servicios/alianzas/sistemas-de-calidad">Sistemas de Calidad <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/servicios/alianzas/empresas-de-servicio-e-implantacion">Empresas de Servicio e Implantación <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/servicios/alianzas/despachos">Despachos <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/servicios/alianzas/instituciones-educativas">Instituciones Educativas <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/servicios/alianzas/marketing-online">Marketing Online <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/servicios/alianzas/modernizacion-de-apps">Modernización de Apps <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/servicios/alianzas/reduccion-de-costos">Reducción de Costos <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/servicios/alianzas/eliminacion-de-complejidad">Eliminación de Complejidad <span class="glyphicon glyphicon-menu-right"></span></a></li>
    </ul>
</nav><!-- ends Menú Interno -->
<?php elseif ( is_front_page() && is_home() ) : ?>
    <?php //Load Empresas Sistema
        get_template_part( 'modules/empresas', 'sistema' ); ?>
<?php elseif (is_tree(30)) : ?>
    <?php dynamic_sidebar( 'widget-cedesko' ); ?>
<?php elseif (is_tree(69)) : ?>
    <?php //Load Empresas Sistema
        get_template_part( 'modules/embotelladoras', 'sidebar1' ); ?>
<?php elseif (is_category(85)) : ?>
    <?php //Load Empresas Sistema
        get_template_part( 'modules/programas', 'sidebar1' ); ?>
<?php else : ?>
    <?php dynamic_sidebar( 'widget-internas' ); ?>
<?php endif;?>

