<aside class="AsideSidebar col-sm-3 no-margin-top">
    <article class="AsideSidebar-item">
        <h4 class="LoginHeading">Iniciar Sesión</h4>
        <div class="AsideSidebar-item-container">
            <?php wp_login_form(); ?> 
        </div>
    </article>

    <?php query_posts('cat=4&posts_per_page=1'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="AsideSidebar-item">
        <a class="AsideSidebar-item-container" href="<?php the_permalink(); ?>">
            <span class="ItemCategory">Último Programa Desarrollado</span>
            <figure class="ItemThumbnail">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/theme-assets/img/dummy-content/thumb-3.jpg" alt="">
            </figure>
            <h3 class="Title"><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <button class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></button>
        </a>
    </article>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
</aside>