<a href="#" class="MainNav-toggle">Menu <span class="glyphicon glyphicon-option-vertical"></span></a>
<ul class="MainNav">
    <li><a href="#" class="less-padding">Iniciativas <br>del Sistema</a>
        <div class="SubMenu container">
            <div class="row">
                <h3 class="col-sm-3 title">Iniciativas del Sistema</h3>
                <?php wp_nav_menu( 
                    array( 
                        'menu' => 'iniciativas-del-sistema', 
                        'items_wrap' => '<ul id="%1$s" class="col-sm-5">%3$s</ul>', 
                        'container' => ''
                    )
                );
                if ( have_posts() ) {
                    query_posts( array( 'category' => 13, 'tag' => 'navegacion-iniciativas', 'posts_per_page' => 1, 'order' => 'DESC' ) );
                    while ( have_posts() ) {
                        the_post(); ?>
                        <div class="col-sm-4 SubMenu-featured">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-thumb', array('class' => "img-responsive")); ?></a>
                            <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></a>
                        </div><!-- ends featured post in menu -->
                    <?php } // end while
                } // end if
                wp_reset_query();
                ?>
            </div>
        </div>
        
    </li>
    <li><a href="#" class="less-padding">Embajadores <br>Coca-Cola</a>
        <div class="SubMenu container">
            <div class="row">
                <h3 class="col-sm-3 title">Embajadores <br>Coca-Cola</h3>
                <?php wp_nav_menu( 
                    array( 
                        'menu' => 'embajadores-coca-cola', 
                        'items_wrap' => '<ul id="%1$s" class="col-sm-5">%3$s</ul>', 
                        'container' => ''
                    )
                ); 

                if ( have_posts() ) {
                    query_posts( array( 'category' => 14, 'tag' => 'navegacion-embajadores', 'posts_per_page' => 1, 'order' => 'DESC' ) );
                    while ( have_posts() ) {
                        the_post(); ?>
                        <div class="col-sm-4 SubMenu-featured">
                            <?php the_post_thumbnail('news-thumb', array('class' => "img-responsive")); ?>
                            <h4 class="title"><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></a>
                        </div><!-- ends featured post in menu -->
                    <?php } // end while
                } // end if
                wp_reset_query();
                ?>
            </div>
            
        </div>
    </li>
    <li><a href="#">Programas</a>
        <div class="SubMenu container">
            <div class="row">
                <h3 class="col-sm-3 title">Programas</h3>
                <?php wp_nav_menu( 
                    array( 
                        'menu' => 'programas-area-comercial', 
                        'items_wrap' => '<ul id="%1$s" class="col-sm-4">%3$s</ul>', 
                        'container' => ''
                    )
                ); ?>
                <?php wp_nav_menu( 
                    array( 
                        'menu' => 'programas-area-tecnica', 
                        'items_wrap' => '<ul id="%1$s" class="col-sm-4">%3$s</ul>', 
                        'container' => ''
                    )
                ); ?>
            </div>
        </div>
        
    </li>
    <li><a href="#">Servicios</a>
        <div class="SubMenu container">
            <div class="row">
                <h3 class="col-sm-3 title">Servicios</h3>
                <?php wp_nav_menu( 
                    array( 
                        'menu' => 'servicios', 
                        'items_wrap' => '<ul id="%1$s" class="col-sm-9">%3$s</ul>', 
                        'container' => ''
                    )
                ); ?>
            </div>
        </div>
        
    </li>
    <li><a href="<?php bloginfo('siteurl'); ?>/embotelladoras/">Embotelladoras</a>
        <div class="SubMenu container">
            <div class="row">
                <h3 class="col-sm-4 title">Embotelladoras</h3>
                <?php wp_nav_menu( 
                    array( 
                        'menu' => 'embotelladoras', 
                        'items_wrap' => '<ul id="%1$s" class="col-sm-8">%3$s</ul>', 
                        'container' => ''
                    )
                ); ?>
            </div>
        </div>
        
    </li>
    <li><a href="#">Latin Centro</a>
        <div class="SubMenu container">
            <div class="row">
                <h3 class="col-sm-4 title">Latin Centro</h3>
                <?php wp_nav_menu( 
                    array( 
                        'menu' => 'latin-centro', 
                        'items_wrap' => '<ul id="%1$s" class="col-sm-8">%3$s</ul>', 
                        'container' => ''
                    )
                ); ?>
            </div>
        </div>
    </li>
</ul>