  <!-- Team Section -->
  <div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
      <div class="section-title">
        <h2><?= get_theme_mod('setting-team-titre');?><span><?= get_theme_mod('setting-team-titre-bg'); ?></span> <?= get_theme_mod('setting-team-titre-end') ?></h2>
      </div>
      <div class="row">
        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
          <?php
            // Query random posts
            $the_query = new WP_Query( array(
              'post_type'      => 'post',
              'orderby'        => 'rand',
              'posts_per_page' => 1,
              'category_name' => 'team', // permet de vérifier la catégorie 
            ) );

            // If we have posts lets show them
            if ( $the_query->have_posts() ) : ?>
              <?php
              // Loop through the posts
              while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                <img src="<?= get_the_post_thumbnail_url()?>" alt="">
                <h2><a class="team_links" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <h3><?= the_content(); ?></h3>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif;?>
          </div>
        </div>
          <!-- single member end -->

        <!-- single member -->
        <div class="col-sm-4">
          <div class="member">
          <?php
            // Query random posts
            $the_query = new WP_Query( array(
              'post_type'      => 'post',
              'orderby'        => 'DESC',
              'posts_per_page' => 1,
              'category_name' => 'manager', // permet de vérifier la catégorie 
            ) );

            // If we have posts lets show them
            if ( $the_query->have_posts() ) : ?>
              <?php
              // Loop through the posts
              while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                <img src="<?= get_the_post_thumbnail_url()?>" alt="">
                <h2><a class="team_links" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <h3><?= the_content(); ?></h3>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif;?>
          </div>
        </div>
          <!-- single member end -->

          <!-- single member -->
          <div class="col-sm-4">
            <div class="member">
              <?php
                // Query random posts
                $the_query = new WP_Query( array(
                  'post_type'      => 'post',
                  'orderby'        => 'rand',
                  'posts_per_page' => 1,
                  'category_name' => 'team', // permet de vérifier la catégorie 
                ) );

                // If we have posts lets show them
                if ( $the_query->have_posts() ) : ?>
                  <?php
                  // Loop through the posts
                  while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
                    <img src="<?= get_the_post_thumbnail_url()?>" alt="">
                    <h2><a class="team_links" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <h3><?= the_content(); ?></h3>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                <?php endif;?>
            </div>
          </div>
          <!-- single member end -->
      </div>
    </div>
  </div>

  <!-- Team Section end-->