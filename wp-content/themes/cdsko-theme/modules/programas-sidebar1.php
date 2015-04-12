<nav class="MenuInterno col-sm-3">
    <h6 class="MenuInterno-heading hidden-xs"><span class="glyphicon glyphicon-option-vertical hidden-sm"></span> Programas <span class="seo-title">- Menú</span></h6>

    <p class="MenuInterno-heading-toggle visible-xs">Seleccione una Categoría <span class="glyphicon glyphicon-menu-down heading-toggle"></span></p>
    
    <?php wp_nav_menu( 
        array( 
            'menu' => 'categorias-de-programas', 
            'items_wrap' => '<ul id="%1$s" class="MenuInterno-list">%3$s</ul>', 
            'container' => '',
            'after' => '<span class="glyphicon glyphicon-menu-right"></span>'
        )
    ); ?>
</nav><!-- ends Menú Interno -->