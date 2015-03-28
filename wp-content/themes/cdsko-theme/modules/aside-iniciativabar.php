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