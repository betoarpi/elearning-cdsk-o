<aside class="EmpresasSistema col-sm-3">
    <h6 class="EmpresasSistema-heading">Embajadores Coca&#8209;Cola</h6>
    <div class="EmpresasSistema-list Embotelladoras-list">
        <p class="Tcenter">Seleccione una Iniciativa</p>
        <a href="#" class="EmpresasSistema-toggle"><span class="glyphicon glyphicon-menu-down"></span></a>
        <?php wp_nav_menu( 
            array( 
                'menu' => 'embajadores-coca-cola', 
                'items_wrap' => '<ul id="%1$s" class="col-sm-5">%3$s</ul>', 
                'container' => ''
            )
        ); ?>
    </div>
</aside><!-- ends Empresas del Sistema -->