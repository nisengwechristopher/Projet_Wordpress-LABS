  <!-- Services section -->
  <div class="services-section spad">
    <div class="container">
      <div class="section-title dark">
      <h2><?= get_theme_mod('setting-services-titre');?><span><?= get_theme_mod('setting-services-titre-bg'); ?></span> <?= get_theme_mod('setting-services-titre-end') ?></h2>
      </div>
      <!-- affichagne des posts dans l'ordre chronologique-->
      <?php
        $my_query = new WP_Query ([
          'post_type' => 'post',
          'category_name' => 'services',
          'posts_per_page' => 9,
          'order' => 'DESC',
        ]);

        // If we have posts lets show them
        if($my_query->have_posts()) :
          while ($my_query->have_posts() ) : $my_query->the_post();?>
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
              <div class="service">
                <div class="icon">
                  <i class="flaticon-037-idea"></i>
                </div>
                <div class="service-text">
                <h2><a class="post_links" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                  <p><?= the_content();?></p>
                </div>
              </div>
            </div>
          <?php
        endwhile;
      endif;?>
      <div class="text-center">
      <a href="<?= get_permalink( get_page_by_path( 'services' ) ) ?>" class="site-btn"><?= get_theme_mod('setting-testimonial-bouton')?></a>
      </div>
    </div>
  </div>
  <!-- services section end -->