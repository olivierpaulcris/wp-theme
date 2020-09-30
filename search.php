<?php get_header(); ?>

      <!-- Entradas -->

      <div class="row">


            <div class="col-lg-9">

                  <!-- Entradas -->
                  
                  <h3 class="bg-primary text-white py-3 mb-5 text-center">Resultados de búsqueda</h3>

                  <?php 
                        if ( have_posts() ) : 
                              while ( have_posts() ) : the_post(); ?>
                                   <div class="card-body">
                                        <a href="<?php the_permalink(); ?>">
                                             <h2><?php the_title(); ?></h2>
                                        </a>
                                        <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
                                        <p class="small mb-0">Auto: <?php the_author(); ?></p>
                                        <p class="small">
                                             Categorias:
                                             <?php the_category(' / '); ?>
                                             Etiquetas:
                                             <?php the_tags('',' / ', ''); ?>
                                        </p>
                                        <?php
                                             if ( has_post_thumbnail() ) {
                                                  the_post_thumbnail('post-thumbnails', array(
                                                       'class' => 'img-fluid mb-3'
                                                  ));
                                             }
                                        ?>
                                        <!-- <img src="img/1200.jpg" alt="" class="img-fluid mb-3"> -->
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Más info...</a>
                                   </div>
                              <?php endwhile; 
                              else: ?>

                                   <h5>No se encontrarón resultados para <?php printf(esc_html('%s'), get_search_query()); ?>.</h5>
                                   <?php get_search_form(); ?>

                        <?php endif; 
                  ?>

                  <!-- Paginación -->
                  <div class="card-body">
                        <?php get_template_part('template-parts/content', 'pagination'); ?>
                  </div>


            </div>

            <!-- Aside -->

            <?php get_sidebar(); ?>
      </div>
</div>

<?php get_footer(); ?>