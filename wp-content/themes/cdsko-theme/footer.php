<?php
/**
 * The template for displaying the footer
 * Contains the closing of the "site-content" div and all content after.
 * @package WordPress
 */
?>
		<?php //Load Tab Panel
			get_template_part( 'modules/tab', 'panel' ); ?>

		<?php if ( is_tree(85) ) ://Load Catalogo Programas 
            //Nothing will be loaded
        else :
			get_template_part( 'modules/catalogo', 'programas' ); 
        endif;?>

        <footer class="MainFooter">
            <div class="container">
                <div class="row MainFooter-nav">
                    <div class="col-sm-3 footer-logo">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/img/footer-logo.png" alt="Logo Cedesko">
                    </div>
                    <ul class="col-sm-3 hidden-xs">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Acerca de Cedesko</a></li>
                        <li><a href="#">Iniciativas del Sistema</a></li>
                        <li><a href="#">Embajadores Coca-Cola</a></li>
                        <li><a href="#">Embotelladores</a></li>
                        <li><a href="#">Latin Centro</a></li>
                    </ul>
                    <ul class="col-sm-3 hidden-xs">
                        <li><a href="#">Catálogo de Programas</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Comités</a></li>
                        <li><a href="#">Consultores</a></li>
                    </ul>
                    <ul class="col-sm-3 hidden-xs">
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Iniciar Sesión</a></li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-sm-9 copyright">
                        <p>© 2015 Centro de Desarrollo del Sistema Coca-Cola. All Rights Reserved. Powered by <a href="#">Medrenlogic ©</a></p>
                        <ul>
                            <li><a href="#">Aviso de Privacidad</a></li>
                            <li>|</li>
                            <li><a href="#">Términos y condiciones</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 social-nav">
                        <ul>
                            <li><a href="#" class="icon-facebook"><span class="seo-title">Facebook</span></a></li>
                            <li><a href="#" class="icon-twitter"><span class="seo-title">Twitter</span></a></li>
                            <li><a href="#" class="icon-linkedin"><span class="seo-title">Twitter</span></a></li>
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

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
		
		<?php wp_footer(); ?>
    </body>
</html>
