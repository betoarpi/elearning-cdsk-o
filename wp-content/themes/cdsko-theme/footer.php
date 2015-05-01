<?php
/**
 * The template for displaying the footer
 * Contains the closing of the "site-content" div and all content after.
 * @package WordPress
 */
?>

		<?php if ( is_page('catalogo-de-programas') ) ://Load Catalogo Programas 
            //Nothing will be loaded
        else :
            get_template_part( 'modules/tab', 'panel' );
			get_template_part( 'modules/catalogo', 'programas' ); 
        endif;?>

        <footer class="MainFooter">
            <div class="container">
                <div class="row MainFooter-nav">
                    <div class="col-sm-3 footer-logo">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/img/footer-logo.png" alt="Logo Cedesko">
                    </div>
                    <ul class="col-sm-3 hidden-xs">
                        <li><a href="http://www.cedesko.com.mx">Inicio</a></li>
                        <li><a href="<?php bloginfo('siteurl'); ?>/acerca-de-cedesko/">Acerca de CEDESKO</a></li>
                        <li><a href="<?php bloginfo('siteurl'); ?>/iniciativas-del-sistema/">Iniciativas del Sistema</a></li>
                        <li><a href="<?php bloginfo('siteurl'); ?>/iniciativas-del-sistema/embajadores-coca-cola/">Embajadores Coca-Cola</a></li>
                        <li><a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/">Empresas del Sistema</a></li>
                        <li><a href="<?php bloginfo('siteurl'); ?>/latin-centro/">Latin Centro</a></li>
                    </ul>
                    <ul class="col-sm-3 hidden-xs">
                        <li><a href="<?php bloginfo('siteurl'); ?>/category/catalogo-de-programas/">Catálogo de Programas</a></li>
                        <li><a href="<?php bloginfo('siteurl'); ?>/servicios/">Servicios</a></li>
                        <li><a href="<?php bloginfo('siteurl'); ?>/comites/">Comités</a></li>
                        <li><a href="<?php bloginfo('siteurl'); ?>/consultores/">Consultores</a></li>
                    </ul>
                    <ul class="col-sm-3 hidden-xs">
                        <li><a href="<?php bloginfo('siteurl'); ?>/contacto/">Contacto</a></li>
                        <?php if ( ! is_user_logged_in() ) { ?> 
                        <li><a href="<?php bloginfo('siteurl'); ?>/login/">Iniciar Sesión</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo wp_logout_url( home_url() ); ?>">Cerrar Sesión</a></li>
                        <?php }?>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-sm-9 copyright">
                        <p>© 2015 Centro de Desarrollo del Sistema Coca-Cola. All Rights Reserved. Powered by <a href="http://medrenlogic.com.mx/" target="_blank">Medrenlogic ©</a></p>
                        <ul>
                            <li><a href="<?php bloginfo('siteurl'); ?>/aviso-de-privacidad/">Aviso de Privacidad</a></li>
                            <!-- <li>|</li>
                            <li><a href="<?php bloginfo('siteurl'); ?>/terminos-y-condiciones/">Términos y condiciones</a></li> -->
                        </ul>
                    </div>
                    <div class="col-sm-3 social-nav">
                        <ul>
                            <li><a href="https://www.facebook.com/pages/Cedesko-Centro-de-Estrategia-y-Desarrollo-del-Sistema-Coca-Cola/136484526411763" class="icon-facebook" target="_blank"><span class="seo-title">Facebook</span></a></li>
                            <li><a href="https://twitter.com/Cedesko" class="icon-twitter" target="_blank"><span class="seo-title">Twitter</span></a></li>
                            <li><a href="https://www.linkedin.com/company/centro-de-estrategia-y-desarrollo-del-sistema-coca-cola" class="icon-linkedin" target="_blank"><span class="seo-title">Twitter</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!-- ends Main Footer -->

        <script src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/js/jquery-1.10.2.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/js/jquery.easing.1.3.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/js/jquery.animate-enhanced.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/js/jquery.superslides.min.js"></script>
        <!--<script src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/js/masonry.pkgd.min.js"></script>-->
        <script src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/js/scripts.js"></script>

        <!-- Google Analytics -->
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		 
		  ga('create', 'UA-62343729-1', 'auto');
		  ga('send', 'pageview');
		 
		</script>		
		<?php wp_footer(); ?>
    </body>
</html>
