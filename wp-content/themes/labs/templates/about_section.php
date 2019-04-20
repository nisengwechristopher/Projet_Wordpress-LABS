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
              <!-- Recupération de manière dynamique des postes afin des les afficher.!! faut mettre une condition pour verifier la Catégorie. -->
                <?php
                // Query random posts
                $the_query = new WP_Query( array(
                  'post_type'      => 'post',
                  'orderby'        => 'rand',
                  'posts_per_page' => 1,
                  'category_name' => 'services',
                ) ); ?>

                <?php
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
                ) ); ?>
                
                <?php
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
                  'category_name' => 'services',
                ) ); ?>

                <?php
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
        </div>
      </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
      <div class="container">
        <div class="section-title">
          <h2>Get in <span>the Lab</span> and discover the world</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
          </div>
          <div class="col-md-6">
            <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
          </div>
        </div>
        <div class="text-center mt60">
          <a href="" class="site-btn">Browse</a>
        </div>
        <!-- popup video -->
        <div class="intro-video">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <img src=" <?= LABS_IMG . 'video.jpg'?>" alt="">
              <a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
                <i class="fa fa-play"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About section end -->
