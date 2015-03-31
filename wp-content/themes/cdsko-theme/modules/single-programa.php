<div class="MainContent container">
    <div class="row">
       <?php //Load Empresas Sistema
        get_template_part( 'modules/programas', 'sidebar2' ); ?>

        <div class="col-sm-9">

            <main class="MainContent-interna" role="main">
         		<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class('MainContent-interna-full'); ?>>
					<article class="MainContent-interna-item-container Programa-content">

							<h3 class="Title"><?php the_title(); ?></h3>

							<?php if(get_field('seccion_contenido')): ?>
								<?php while(has_sub_field('seccion_contenido')): ?>
								<div class="row">
									<div class="col-sm-4">
										<h4><?php the_sub_field('nombre_seccion'); ?></h4>
									</div>
									<div class="col-sm-8">
										<?php the_sub_field('contenido_seccion'); ?>
									</div>
								</div>
								<?php endwhile; ?>
							<?php endif; ?>
					</article>
				<div><!-- #post-## -->

				<? // End the loop.
				endwhile;
				?>
            </main><!-- ends MainContent grid -->
        </div>   
    </div>
</div><!-- ends Main Content -->
