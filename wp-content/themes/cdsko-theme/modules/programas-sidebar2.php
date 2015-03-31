<aside class="EmpresasSistema col-sm-3">
    <h6 class="EmpresasSistema-heading">Programas Recientes</h6>
    <div class="EmpresasSistema-list Embotelladoras-list">
        <p class="Tcenter">Seleccione un Programa</p>
        <a href="#" class="EmpresasSistema-toggle"><span class="glyphicon glyphicon-menu-down"></span></a>
        <ul>
            <?php 
            $programasrecientes = array( 'post_type' => 'post', 'posts_per_page' => 5, 'category' => 37, 'ignore_sticky_posts' => 1 );
            $loop = new WP_Query( $programasrecientes );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</aside><!-- ends Programas Category List -->

