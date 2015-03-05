<?php
/**
 * The sidebar containing the main widget area
 * @package WordPress
 */
	if ( is_page(22) ) : ?>
<nav class="MenuInterno col-sm-3">
    <h6 class="MenuInterno-heading hidden-xs"><span class="glyphicon glyphicon-option-vertical hidden-sm"></span> Alianzas <span class="seo-title">- Menú</span></h6>

    <p class="MenuInterno-heading-toggle visible-xs">Seleccione una Opción <span class="glyphicon glyphicon-menu-down heading-toggle"></span></p>

    <ul class="MenuInterno-list">
        <li><a href="#">Sistemas de Calidad <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="#">Empresas de Servicio e Implantación <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="#">Despachos <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="#">Instituciones Educativas <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="#">Marketing Online <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="#">Modernización de Apps <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="#">Reducción de Costos <span class="glyphicon glyphicon-menu-right"></span></a></li>
        <li><a href="#">Eliminación de Complejidad <span class="glyphicon glyphicon-menu-right"></span></a></li>
    </ul>
</nav><!-- ends Menú Interno -->
<?php elseif ( is_front_page() && is_home() ) : ?>
    <?php //Load Empresas Sistema
        get_template_part( 'modules/empresas', 'sistema' ); ?>
<?php else : ?>
<?php dynamic_sidebar( 'widget-internas' ); ?>
<?php endif;?>

