  <!-- Testimonial section -->
  <div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-4">
          <div class="section-title left">
            <h2><?= get_theme_mod('setting-testimonial-titre');?></h2>
          </div>
          <!-- le caroussel avec les commantaires -->
          <?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>
                <span>‘​‌‘​‌</span>
                <?php
                  $args = array(
                    'post_status' => 'publish',
                  );
                  $post_comments = get_comments(); ?>
                  <div class="owl-carousel" id="testimonial-slide">
                  <?php if ( $post_comments ) {
                    foreach($post_comments as $each_comment) { ?>
                      <!-- single testimonial -->
                      <div class="testimonial">
                        <span>‘​‌‘​‌</span>
                        <p><?= $each_comment->comment_content; ?></p>
                        <div class="client-info">
                          <div class="avatar">
                            <img src="<?= get_avatar_url( comment_ID()) ?>" alt="">
                          </div>
                          <div class="client-name">
                            <h2><?= get_the_author_nickname() ?></h2>
                            <p><?= get_the_author_description(); ?></p>
                          </div>
                        </div>
                      </div>
                    <?php }
                  } ?>
                </div>
            <?php endwhile;
						endif; ?>
        <!-- Fin caroussel -->
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial section end-->