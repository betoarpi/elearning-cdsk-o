<?php
	if ( is_front_page() && is_home() ) : ?>
<div class="HomeBanner container-fluid">
    <div class="row">
        <div id="slides">
            <ul class="HomeBanner-slider slides-container">
                <li class="col-xs-12">
                    <figure class="HomeBanner-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/img/banners/main-banner.jpg" alt="">
                    </figure>
                    <div class="HomeBanner-textbox">
                        <a href="#">
                            <h2>Lorem ipsum dolor sit amet, consectetur. </h2>
                            <p>Aenean eu nisi tincidunt, feugiat risus a, suscipit felis.</p>
                        </a>
                    </div>
                </li>
                <li class="col-xs-12">
                    <figure class="HomeBanner-img">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/theme-assets/img/banners/main-banner.jpg" alt="">
                    </figure>
                    <div class="HomeBanner-textbox">
                        <a href="#">
                            <h2>Lorem ipsum dolor sit amet, consectetur. </h2>
                            <p>Aenean eu nisi tincidunt, feugiat risus a, suscipit felis.</p>
                        </a>
                    </div>
                </li>
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
    			<?php the_post_thumbnail( 'featured-thumb' ); ?>
    		<?php } else { ?>
    			<img src="<?php bloginfo('template_directory'); ?>/theme-assets/img/banners/main-banner.jpg" alt="">
    		<?php } ?>
            </div>
        </div>
    </div>
</div><!-- ends Inner Banner -->
<?php endif;?>