

<!-- http://wordpress.bbxdesign.com/single-php-le-template-dedie -->
<?php get_header(); ?>

<div class="container mt-5">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div>
            <!-- <?php the_post_thumbnail($size[] = 'medium'); // other sizes : thumbnail | medium | medium_large | large
                // echo get_the_post_thumbnail( null, $size, $attr ); //le echo me permet d'afficher l'image de la taille choisie mais la garde aussi
            ?> -->

            <!-- meilleur version -->
            <?php
                the_post_thumbnail(
                    ['max-width' => '150px', 'max-height' => '150px']
                );
            ?>

        </div>
        <div>
            <h2 class="text-center text-uppercase mb-4"><?php the_title(); ?></h2>

            <div>
                <?php the_content(); ?>
            </div>

            <p class="text-secondary">
                Posté le <?php the_date(); ?> dans <?php the_category(' '); ?> par <?php the_author(); ?>.
            </p>
            <!-- affichage des catégories !!! avec le lien (href) qui renvoie vers la page archive.php -->
            <div>
                <?php
                    $terms = wp_get_post_terms($post ->ID, ['category']);
                        foreach ($terms as $term): ?>     
                        <a class="badge badge-secondary" href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
                <?php endforeach;?>
            </div>


            <div>
                <?php comments_template(); ?>
        </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
