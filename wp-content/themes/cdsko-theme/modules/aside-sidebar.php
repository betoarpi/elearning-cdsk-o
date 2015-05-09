<aside class="AsideSidebar col-sm-3 no-margin-top">
    <article class="AsideSidebar-item">
        <h4 class="LoginHeading">Iniciar Sesión</h4>
        <div class="AsideSidebar-item-container">
            <?php //wp_login_form(); ?>

            <h4>Acceso a SumTotal Cedesko</h4>

            <form name="loginform" id="loginform" action="http://www.cedesko.com.mx/SumTota1/app/SYS_login.aspx" method="post">
                <p class="login-username">
                    <label for="user_login">Nombre de usuario</label>
                    <input type="text" id='username' name="username" class="input"/>
                </p>

                <p class="login-password">
                    <label for="user_pass">Contraseña</label>
                    <input type="password" id='password' name="password" class="input"/>
                </p>
                <input type="submit" class="button-primary" name="Submit" value='Iniciar Sesión' onClick="javascript: return valida(this.form)"/>
            </form>
        </div>
    </article>
    <?php query_posts('cat=4&posts_per_page=1'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="AsideSidebar-item">
        <a class="AsideSidebar-item-container" href="<?php the_permalink(); ?>">
            <span class="ItemCategory">Último Programa Desarrollado</span>
            <figure class="ItemThumbnail">
                <?php the_post_thumbnail('news-thumb', array('class' => "img-responsive")); ?>
            </figure>
            <h3 class="Title"><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <button class="MoreBtn">Ver Más <span class="glyphicon glyphicon-menu-right"></span></button>
        </a>
    </article>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>    
</aside>