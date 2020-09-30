<?php get_header(); ?>

      <!-- Entradas -->

      <div class="row">


            <div class="col-lg-9">

                  <!-- Entradas -->

                  <?php 
                        if ( have_posts() ) : 
                              while ( have_posts() ) : the_post(); ?>
                                    <div class="card-body">
                                          <a href="<?php the_permalink(); ?>">
                                                <h2><?php the_title(); ?></h2>
                                          </a>
                                          <?php
                                                if ( has_post_thumbnail() ) {
                                                      the_post_thumbnail('post-thumbnails', array(
                                                            'class' => 'img-fluid mb-3'
                                                      ));
                                                }
                                          ?>
                                          <p class="small mb-2">
                                                Fecha: <?php the_time('F j, Y'); ?> |
                                                Autor: <strong><?php the_author(); ?></strong> | 
                                                Categorias:
                                                <?php the_category(' / '); ?> | 
                                                Etiquetas:
                                                <?php the_tags('',' / ', ''); ?>
                                          </p>
                                          <!-- <img src="img/1200.jpg" alt="" class="img-fluid mb-3"> -->
                                          <?php the_excerpt(); ?>
                                          <a href="<?php the_permalink(); ?>" class="btn btn-primary">Más info...</a>
                                    </div>
                              <?php endwhile; 
                        endif; 
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