<?php
/**
 * The template used for displaying page content
 * @package WordPress
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('MainContent-interna-full'); ?>>
	<article class="MainContent-interna-item-container">
		<?php the_title( '<h3 class="Title">', '</h3>' ); ?>

        <?php if ( is_tree(85) || is_tree(69) ) ://Load Content Slides
            get_template_part( 'modules/content', 'slides' );
        else : endif;?>
		
		<?php if ( is_page_template('iniciativa-sistema.php') ) :
			if ( is_user_logged_in() ) {
				if ( is_page_template('iniciativa-sistema.php') ) ://Load Course Shortcode
			   		if( get_field('shortcode_del_curso') ):
			   			$shortcourse = get_field('shortcode_del_curso');
			   			the_content();
			           	echo do_shortcode($shortcourse);
			        endif;
			    endif;
			} else {
				the_field('mensaje_no_registrados');
			}
		else : 
			the_content(); ?>

            <?php
            // check if the repeater field has rows of data
            if( have_rows('acordion') ): ?>
              <div class="Accordion-group" id="accordion" role="tablist" aria-multiselectable="true">
              <?php // loop through the rows of data
                while ( have_rows('acordion') ) : the_row();
                $collapseValue = $n++ * 2 + 1;
                //$collapseValue = preg_replace('/\s+/', '', $acfTitulo);
                 ?>
                  
                    <h3><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $collapseValue; ?>" aria-expanded="true" aria-controls="collapse<?php echo $collapseValue; ?>"><?php the_sub_field('titulo_acordion'); ?></a></h3>
                    <div id="collapse<?php echo $collapseValue; ?>" class="collapse" role="tabpanel">
                      <?php the_sub_field('contenido_acordion'); ?>
                    </div>
                 
                <? endwhile; ?>
                </div>
            <?php else :
                // no rows found
            endif;
            ?>

			<?php
                if ( is_page('empresas-del-sistema') ) { ?>
                    
                    <div class="row embotelladoras-gallery">
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/embotelladora-arcacontinental/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-arca.jpg" class="attachment-thumbnail" alt="logo-arca">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/bepensa/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-bepensa_logo.jpg" class="attachment-thumbnail" alt="logo-bepensa_logo">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/coca-cola-femsa/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-Femsa_Logo.jpg" class="attachment-thumbnail" alt="logo-Femsa_Logo">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/coca-cola-de-mexico/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-CocaColaMexico_logo.jpg" class="attachment-thumbnail" alt="logo-CocaColaMexico_logo">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/embotelladora-de-colima/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-EmbotelladoraColima_logo.jpg" class="attachment-thumbnail" alt="logo-EmbotelladoraColima_logo">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/corporacion-del-fuerte/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-CorporaciondelFuerte_logo.jpg" class="attachment-thumbnail" alt="logo-CorporaciondelFuerte_logo">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/jugos-del-valle/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-JugosdelValle_logo.jpg" class="attachment-thumbnail" alt="logo-JugosdelValle_logo">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/embotelladora-de-nayar/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-emb05.jpg" class="attachment-thumbnail" alt="logo-emb05">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/corporacion-rica/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-emb02.jpg" class="attachment-thumbnail" alt="logo-emb02">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/industia-envasadora-de-queretaro/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-IndustriaEnvasadoraQueretaro_logo.jpg" class="attachment-thumbnail" alt="logo-IndustriaEnvasadoraQueretaro_logo">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/bebidas-refrescantes-nogales/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-BebidaRefrescantesNogales_logo.jpg" class="attachment-thumbnail" alt="logo-BebidaRefrescantesNogales_logo">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/santa-clara/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/santa-clara-logo.jpg" class="attachment-thumbnail" alt="santa-clara-logo">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        	<a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/pet-star/">
                            	<img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/03/logo-petstar-high.jpg" class="attachment-thumbnail" alt="logo-petstar-high">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/instituto-de-bebidas-para-la-salud-y-el-bienestar/">
                                <img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/04/ibsb-grid.jpg" class="attachment-thumbnail" alt="logo-ibsb">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="<?php bloginfo('siteurl'); ?>/empresas-del-sistema/industria-mexicana-de-reciclaje/">
                                <img class="img-responsive" src="<?php bloginfo('siteurl'); ?>/wp-content/uploads/2015/04/imer-grid.jpg" class="attachment-thumbnail" alt="logo-ibsb">
                            </a>
                        </div>
                    </div>
                <?php } ?>
		<?php endif; ?>
	</article>
</div>