<?php
/**
 * Template Name: Alianzas
 * @package WordPress
 */

get_header(); ?>
<div class="MainContent container">
    <div class="row">
        <?php get_sidebar(); ?>

        <div class="col-sm-6">

            <?php breadcrumb_trail(); ?>

            <main class="MainContent-interna" role="main">
         		<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

				// End the loop.
				endwhile;
				?>
            </main><!-- ends MainContent grid -->
        </div>
        
        <aside class="AsideSidebar col-sm-3">
            <article class="AsideSidebar-item">
                <a class="AsideSidebar-item-container" href="#">
                    <span class="ItemCategory">Cedesko</span>
                    <figure class="ItemThumbnail">
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/theme-assets/img/dummy-content/thumb-2.jpg" alt="">
                    </figure>
                    <h3 class="Title">Bienvenidos</h3>
                    <p>El Centro de Estrategia y Desarrollo del Sistema Coca-Cola te da la bienvenida a su Sitio oficial, en donde encontrarás los diferentes servicios que presta el Centro, tales como Programas del área Comercial, Técnica y de Recursos Humanos.</p>
                    <button class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></button>
                </a>
            </article>

            <article class="AsideSidebar-item">
                <a class="AsideSidebar-item-container" href="#">
                    <span class="ItemCategory">Último Programa Desarrollado</span>
                    <figure class="ItemThumbnail">
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/theme-assets/img/dummy-content/thumb-3.jpg" alt="">
                    </figure>
                    <h3 class="Title">Auditor Interno de Sistemas Integrados de Gestión Kore </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid unde fugit sequi doloremque.</p>
                    <button class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></button>
                </a>
            </article>
        </aside>  
    </div>
</div><!-- ends Main Content -->
<?php get_footer(); ?>
