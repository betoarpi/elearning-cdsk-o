<?php
	if ( is_front_page() && is_home() ) : ?>

<?php $slider = array( 'post_type' => 'slider', 'posts_per_page' => 10 ); ?>
<?php $loop = new WP_Query( $slider ); ?>
<div class="HomeBanner container-fluid">
    <div class="row">
        <div id="slides">
            <ul class="HomeBanner-slider slides-container">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php if( get_field('enlace_slider') ): ?>
                <li class="col-xs-12">
                    <a href="<?php the_field('enlace_slider'); ?>">
                        <figure class="HomeBanner-img">
                            <img src="<?php the_field( 'imagen' ); ?>" alt="<?php if( get_field('encabezado') ): the_field('encabezado'); endif; ?>">
                        </figure>
                        <?php if( get_field('encabezado') ): ?>
                        <div class="HomeBanner-textbox">
                            <h2><?php the_field('encabezado'); ?></h2>
                            <p><?php the_field('texto_acompañante_de_encabezado'); ?></p>
                        </div>
                        <?php endif; ?>
                    </a>
                </li>
                <?php else : ?>
                <li class="col-xs-12">
                    <figure class="HomeBanner-img">
                        <img src="<?php the_field( 'imagen' ); ?>" alt="<?php if( get_field('encabezado') ): the_field('encabezado'); endif; ?>">
                    </figure>
                    <?php if( get_field('encabezado') ): ?>
                    <div class="HomeBanner-textbox">
                        <h2><?php the_field('encabezado'); ?></h2>
                        <p><?php the_field('texto_acompañante_de_encabezado'); ?></p>
                    </div>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
            <?php endwhile; ?>
            </ul>
            <nav class="slides-navigation">
                <a href="#" class="next"><span class="glyphicon glyphicon-menu-right"></span></a>
                <a href="#" class="prev"><span class="glyphicon glyphicon-menu-left"></span></a>
            </nav>
        </div>
    </div>
</div><!-- ends Home Banner -->
<?php else : ?>
<div class="InnerBanner container-fluid">
    <div class="row">
        <div id="InnerBanner-img">
            <div class="InnerBanner-slider slides-container">
    			<img src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/04/banner-calidad-3.jpg" alt="">
            </div>
        </div>
    </div>
</div><!-- ends Inner Banner -->
<?php endif;?>