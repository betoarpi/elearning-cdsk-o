        <div class="TabPanel container" role="tabpanel">
            <div class="row">
                <ul class="col-xs-12 TabPanel-navigation" role="tablist">
                    <li role="presentation">
                        <a href="#embajadores" aria-controls="embajadores" role="tab" data-toggle="tab"><span class="hidden-xs">Embajadores Coca-Cola</span> <span class="glyphicon glyphicon-star visible-xs"></span></a>
                    </li>
                    <li role="presentation">
                        <a href="#iniciativas" aria-controls="iniciativas" role="tab" data-toggle="tab"><span class="hidden-xs">Iniciativas del Sistema</span> <span class="glyphicon glyphicon-pushpin visible-xs"></span></a>
                    </li>
                </ul>
            </div>
            <div class="row tab-content TabPanel-content">
                <section role="tabpanel" class="tab-pane active" id="embajadores">
                    <h2 class="seo-title">Embajadores Coca-Cola</h2>
                    
                    <?php if ( have_posts() ) {
                        query_posts( 'cat=13&posts_per_page=4' );
                        while ( have_posts() ) {
                            the_post(); ?>
                            <article class="TabItem col-sm-3">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ( has_post_thumbnail() ) { ?>
                                    <figure class="TabItem-thumbnail hidden-xs">
                                        <?php the_post_thumbnail('news-thumb', array('class' => "img-responsive")); ?>
                                    </figure>
                                    <?php } ?>
                                    <h3 class="title"><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                </a>
                            </article>
                        <?php } // end while
                    } // end if
                    wp_reset_query();
                    ?>
                </section>
                <section role="tabpanel" class="tab-pane" id="iniciativas">
                    <h2 class="seo-title">Iniciativas del Sistema</h2>
                    <?php if ( have_posts() ) {
                        query_posts( 'cat=14&posts_per_page=4' );
                        while ( have_posts() ) {
                            the_post(); ?>
                            <article class="TabItem col-sm-3">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if ( has_post_thumbnail() ) { ?>
                                    <figure class="TabItem-thumbnail hidden-xs">
                                        <?php the_post_thumbnail('news-thumb', array('class' => "img-responsive")); ?>
                                    </figure>
                                    <?php } ?>
                                    <h3 class="title"><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>
                                </a>
                            </article>
                        <?php } // end while
                    } // end if
                    wp_reset_query();
                    ?>
                </section>
            </div>
        </div><!-- ends Tab Panel -->