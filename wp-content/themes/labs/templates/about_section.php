  <!-- About section -->
  <div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
      <div class="container">
        <div class="row">
          <!-- single card -->
          <div class="col-md-4 col-sm-6">
            <div class="lab-card">
              <div class="icon">
                <i class="flaticon-023-flask"></i>
              </div>
              <!-- Recupération de manière dynamique des postes afin des les afficher.!! -->
                <?php
                // Query random posts
                $the_query = new WP_Query( array(
                  'post_type'      => 'post',
                  'orderby'        => 'rand',
                  'posts_per_page' => 1,
                  'category_name' => 'services', // permet de vérifier la catégorie 
                ) );

                // If we have posts lets show them
                if ( $the_query->have_posts() ) : ?>
                  <div id="randomposts">
                    <ul>
                      <?php
                      // Loop through the posts
                      while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <p><?= the_content() ?></p>

                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                    </ul>
                  </div>

                <?php endif;?>
            </div>
          </div>
          <!-- single card -->
          <div class="col-md-4 col-sm-6">
            <div class="lab-card">
              <div class="icon">
                <i class="flaticon-011-compass"></i>
              </div>
              <!-- Recupération de manière dynamique des postes afin des les afficher.!! faut mettre une condition pour verifier la Catégorie. -->
                <?php
                // Query random posts
                $the_query = new WP_Query( array(
                  'post_type'      => 'post',
                  'orderby'        => 'rand',
                  'posts_per_page' => 1,
                  'category_name' => 'services', // permet de vérifier la catégorie 
                ) );

                // If we have posts lets show them
                if ( $the_query->have_posts() ) : ?>

                  <div id="randomposts">
                    <ul>
                      <?php
                      // Loop through the posts
                      while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <p><?= the_content()?></p>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                    </ul>
                  </div>
                <?php endif;?>
            </div>
          </div>
          <!-- single card -->
          <div class="col-md-4 col-sm-12">
            <div class="lab-card">
              <div class="icon">
                <i class="flaticon-037-idea"></i>
              </div>
            <!-- Recupération de manière dynamique des postes afin des les afficher.!! faut mettre une condition pour verifier la Catégorie. -->
                <?php
                // Query random posts
                $the_query = new WP_Query( array(
                  'post_type'      => 'post',
                  'orderby'        => 'rand',
                  'posts_per_page' => 1,
                  'category_name' => 'services', // permet de vérifier la catégorie 
                ) );

                // If we have posts lets show them
                if ( $the_query->have_posts() ) : ?>
                  <div id="randomposts">
                    <ul>
                      <?php
                      // Loop through the posts
                      while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                        <h2><a class="post_links" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <p><?= the_content() ?></p>
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                    </ul>
                  </div>
                <?php endif;?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- card section end-->

    <!-- About contant -->
    <div class="about-contant">
      <div class="container">
        <div class="section-title">
          <!-- <h2>Get in <span>the Lab</span> and discover the world</h2> -->
          <h2><?= get_theme_mod('setting-about-titre');?> <span><?= get_theme_mod('setting-about-titre-bg'); ?></span> <?= get_theme_mod('setting-about-titre-end') ?></h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p><?= get_theme_mod('setting-about-paragraphe-1') ?></p>
          </div>
          <div class="col-md-6">
          <p><?= get_theme_mod('setting-about-paragraphe-2') ?></p>
          </div>
        </div>
        <div class="text-center mt60">
          <a href="<?= get_permalink( get_page_by_path( 'blog' ) ) ?>" class="site-btn"><?= get_theme_mod('setting-about-bouton')?></a>
        </div>
        <!-- popup video -->
        <div class="intro-video">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <!-- solution pour affiher l'image de la video de manière dynamique -->
              <img src=" 
                <?php
                  $source_video = get_theme_mod('setting-about-video');
                  $image_video = substr($source_video, 32);
                  echo "https://img.youtube.com/vi/$image_video/maxresdefault.jpg";
                ?>" 
              alt="">
              <a href="<?= get_theme_mod('setting-about-video'); ?>" class="video-popup">
                <i class="fa fa-play"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About section end -->
