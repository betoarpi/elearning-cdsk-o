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
                ); ?>
                
                <div class="col-sm-4 SubMenu-featured">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/img/dummy-content/thumb-1.jpg" alt="">
                    <h4 class="title">Coca-Cola Life</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde asperiores nostrum nihil.</p>
                    <a href="#" class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></a>
                </div>
            </div>
        </div>
        
    </li>
    <li><a href="#" class="less-padding">Embajadores <br>Coca-Cola</a>
        <div class="SubMenu container">
            <div class="row">
                <h3 class="col-sm-3 title">Embajadores Coca-Cola</h3>
                <?php wp_nav_menu( 
                    array( 
                        'menu' => 'embajadores-coca-cola', 
                        'items_wrap' => '<ul id="%1$s" class="col-sm-5">%3$s</ul>', 
                        'container' => ''
                    )
                ); ?>
                <div class="col-sm-4 SubMenu-featured">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/img/dummy-content/thumb-3.jpg" alt="">
                    <h4 class="title">Te mueves tú, se mueven todos</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde asperiores nostrum nihil.</p>
                    <a href="#" class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></a>
                </div>
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
    <li><a href="#">Embotelladoras</a>
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