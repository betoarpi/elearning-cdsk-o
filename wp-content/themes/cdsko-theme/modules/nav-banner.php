<?php
	if ( is_front_page() && is_home() ) : ?>

<?php $slider = array( 'post_type' => 'slider', 'posts_per_page' => 10 ); ?>
<?php $loop = new WP_Query( $slider ); ?>
<div class="HomeBanner container-fluid">
    <div class="row">
        <div id="slides">
            <ul class="HomeBanner-slider slides-container">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <li class="col-xs-12">
                    <figure class="HomeBanner-img">
                        <img src="<?php the_field( 'imagen' ); ?>" alt="<?php if( get_field('encabezado') ): the_field('encabezado'); endif; ?>">
                    </figure>
                    <?php if( get_field('encabezado') ): ?>
                    <div class="HomeBanner-textbox">
                        <?php if( get_field('enlace_slider') ): ?>
                        <a href="<?php the_field('enlace_slider'); ?>">
                            <h2><?php the_field('encabezado'); ?></h2>
                            <p><?php the_field('texto_acompañante_de_encabezado'); ?></p>
                        </a>
                        <?php else : ?>
                        <a href="<?php the_field('enlace_slider'); ?>">
                            <h2><?php the_field('encabezado'); ?></h2>
                            <p><?php the_field('texto_acompañante_de_encabezado'); ?></p>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </li>
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
			<?php if ( has_post_thumbnail() ) { ?>
    			<?php the_post_thumbnail( 'full' ); ?>
            <?php } else if ( is_category() ) { ?>
                <img src="<?php bloginfo('template_directory'); ?>/theme-assets/img/banners/generico-banner.jpg" alt="">
    		<?php } else { ?>
    			<img src="<?php bloginfo('template_directory'); ?>/theme-assets/img/banners/generico-banner.jpg" alt="">
    		<?php } ?>
            </div>
        </div>
    </div>
</div><!-- ends Inner Banner -->
<?php endif;?>