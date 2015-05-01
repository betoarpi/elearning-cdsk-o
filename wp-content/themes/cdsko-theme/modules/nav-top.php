<ul class="TopNav">
    <li class="visible-xs"><a href="http://www.cedesko.com.mx"><span class="glyphicon glyphicon-home"></span><span class="visible-devices"> Inicio</span></a></li>
    <li class="visible-xs"><a href="<?php bloginfo('siteurl'); ?>/acerca-de-cedesko/">Acerca de CEDESKO</a></li>
    <li class="visible-xs"><a href="<?php bloginfo('siteurl'); ?>/consultores/">Consultores</a></li>
    <li class="visible-xs"><a href="<?php bloginfo('siteurl'); ?>/comites/">Comités</a></li>
    <li class="visible-xs"><a href="<?php bloginfo('siteurl'); ?>/contacto/">Contacto</a></li>
    <!--<li class="a-right no-border"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/img/us.png" alt="en-icon"> Inglés</a></li>-->
    <li class="a-right inicio-sesion no-border">
		<?php if ( ! is_user_logged_in() ) { ?> 
    	<a href="<?php bloginfo('siteurl'); ?>/login/"><span class="glyphicon glyphicon-user"></span> Iniciar Sesión</a>
    	<?php } else {?>
    	<a href="<?php echo wp_logout_url( home_url() ); ?>">Cerrar Sesión</a>
    	<?php }?>
    </li>
    <?php
    if ( is_user_logged_in() ) {
        $echobloginfo = get_bloginfo('siteurl');
        echo "<li class='hidden-sm a-right inicio-sesion PR15'><a href='$echobloginfo/mis-cursos/'><span class='glyphicon glyphicon-user'></span> Hola ";
        $current_user = wp_get_current_user(); 
        echo ' ' . $current_user->display_name.'</a></li>';
    } ?>
</ul>