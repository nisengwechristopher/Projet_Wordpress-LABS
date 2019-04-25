  <!-- services card section-->
  <div class="services-card-section spad">
    <div class="container">
      <div class="row">
        <?php
            // Query random posts
            $the_query = new WP_Query( array(
              'post_type'      => 'post',
              'orderby'        => 'rand',
              'posts_per_page' => 3,
              'category_name' => 'projects', // permet de vérifier la catégorie 
              ) );
              
              // If we have posts lets show them
              if ( $the_query->have_posts() ) : ?>
              <?php
              // Loop through the posts
              while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
              <!-- Single Card -->
              <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                <div class="card-img">
                  <img src="<?= get_the_post_thumbnail_url()?>" alt="">
                </div>
                <div class="card-text">
                  <h2><a class="post_links" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                  <p><?= the_content(); ?></p>
                </div>
              </div>
            </div>
            <!-- Single Card End -->
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif;?>
      </div>
    </div>
  </div>
  <!-- services card section end-->