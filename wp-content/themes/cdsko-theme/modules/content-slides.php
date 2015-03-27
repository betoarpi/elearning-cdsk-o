<?php if( have_rows('slider') ): ?>
<div class="ContentSlides-container">
    <div id="ContentSlides">
        <ul class="ContentBanner-slider slides-container">

        <?php while ( have_rows('slider') ) : the_row(); ?>
            <li>
                <figure class="ContentBanner-img">
                    <img src="<?php the_sub_field('imagen_carrusel'); ?>" alt="">
                </figure>
            </li>
        <?php endwhile; ?>

        </ul>
        <nav class="slides-navigation">
            <a href="#" class="next"><span class="glyphicon glyphicon-menu-right"></span></a>
            <a href="#" class="prev"><span class="glyphicon glyphicon-menu-left"></span></a>
        </nav>
    </div><!-- ends Content Banner -->   
</div> 
<?php else : endif; ?>