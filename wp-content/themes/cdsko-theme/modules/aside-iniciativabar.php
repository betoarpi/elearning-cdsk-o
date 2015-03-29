<?php if ( is_user_logged_in() ) {  ?>
<aside class="AsideSidebar col-sm-3 no-margin-top">
<?php 
if ( have_posts() ) {
    wp_reset_query();
    query_posts( array( 'category' => 'cedesko', 'posts_per_page' => 1, 'order' => 'DESC' ) );
    while ( have_posts() ) {
        the_post(); ?>
        <article class="AsideSidebar-item">
            <a class="AsideSidebar-item-container" href="<?php the_permalink(); ?>">
                <span class="ItemCategory">
                    <?php
                    foreach((get_the_category()) as $category) { 
                        echo $category->cat_name . ' '; 
                    } 
                    ?>
                </span>
                <?php if ( has_post_thumbnail() ) { ?>
                <figure class="ItemThumbnail">
                    <?php the_post_thumbnail('news-thumb', array('class' => "img-responsive")); ?>
                </figure>
                <?php } ?>
                <h3 class="Title"><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <button class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></button>
            </a>
        </article>
    <?php } // end while
    wp_reset_query();
} // end if ?>
</aside>
<?php } else { ?>
<aside class="AsideSidebar col-sm-3 no-margin-top">
    <article class="AsideSidebar-item">
        <h4 class="LoginHeading">Iniciar Sesión</h4>
        <div class="AsideSidebar-item-container">
            <?php wp_login_form(); ?> 
        </div>
    </article>

    <article class="AsideSidebar-item">
        <h4 class="LoginHeading">Registro</h4>
        <div class="AsideSidebar-item-container">
            Si aún no te has registrado puedes hacerlo haciendo click en el siguiente botón: <br>  
            <a href="<?php bloginfo('siteurl'); ?>/register/" class="MoreBtn clear">Quiero Registrarme</a> 
        </div>
    </article>
</aside>
<?php } ?>