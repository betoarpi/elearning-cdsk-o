<ul class="social-nav">
    <li class="hidden-xs"><a href="http://www.cedesko.com.mx"><span class="glyphicon glyphicon-home"></span><span class="visible-devices"> Inicio</span></a></li>
    <li class="hidden-xs"><a href="<?php bloginfo('siteurl'); ?>/acerca-de-cedesko/">Acerca de CEDESKO</a></li>
    <li class="hidden-xs"><a href="<?php bloginfo('siteurl'); ?>/consultores/">Consultores</a></li>
    <li class="hidden-xs"><a href="<?php bloginfo('siteurl'); ?>/comites/">Comités</a></li>
    <li class="hidden-xs"><a href="<?php bloginfo('siteurl'); ?>/contacto/">Contacto</a></li>
    <?php if ( ! is_user_logged_in() ) { ?>
    <li class="no-border">Síguenos en</li>
    <?php } else { ?>
    <li class="no-border red"><a href="<?php bloginfo('siteurl'); ?>/mis-cursos/">Mis Cursos</a></li>
    <?php }?>
    <li class="no-border"><a href="https://twitter.com/Cedesko" class="social-icon icon-twitter" target="_blank"><span class="seo-title">Twitter</span></a></li>
    <li class="no-border"><a href="https://www.facebook.com/pages/Cedesko-Centro-de-Estrategia-y-Desarrollo-del-Sistema-Coca-Cola/136484526411763" class="social-icon icon-facebook" target="_blank"><span class="seo-title">Facebook</span></a></li>
    <li class="no-border"><a href="https://www.linkedin.com/company/centro-de-estrategia-y-desarrollo-del-sistema-coca-cola" class="social-icon icon-linkedin" target="_blank"><span class="seo-title">Linkedin</span></a></li>
</ul>