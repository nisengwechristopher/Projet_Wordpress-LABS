
<!-- Visuel pour la page newsletter du plugin -->




<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'Gestionnaire d\'Icones', 'WpAdminStyle' ); ?></h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

                        <h2><span><?php esc_attr_e( 'Mes Services', 'WpAdminStyle' ); ?></span></h2>
                        
                        <div class="description">
                            <h4><?php esc_attr_e( 'Ici se trouvent les posts de la catégory services'); ?>
                        </div>
						<div class="inside">
                            <!-- affichagne de tous les posts dde type service dans l'ordre chronologique-->
                            <?php
                                    $my_query = new WP_Query ([
                                    'post_type' => 'post',
                                    'category_name' => 'services',
                                    'order' => 'DESC',
                                    ]);

                                    // If we have posts lets show them
                                    if($my_query->have_posts()) :
                                    while ($my_query->have_posts() ) : $my_query->the_post();?>
                                        <!-- single service -->
                                        <div class="posts">
                                                <div class="content-text">
                                                <h2><a class="post-title" href="<?= get_edit_post_link(); ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a></h2>
                                                <div class="content">
                                                    <p><?= the_content();?></p>
                                                    <div class="icon">
                                                        <p><?php esc_attr_e( 'Emplacement pour l\'icone' ); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                endif;?>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
            <div id="postbox-container-1" class="postbox-container">

            <h1><?php esc_attr_e( 'Liste d\'icones'); ?></h1>
            <div class="description">
                <h4><?php esc_attr_e( 'Choisissez une icone afin de l\'associer à un poste' ); ?></h4>
            </div>
            <div class="icon-container">
                <ul>
                    <li><i class="flaticon-023-flask fa-3x"></i><span><?php esc_attr_e( 'Flask' ); ?></span></li>
                    <li><i class="flaticon-011-compass fa-3x"></i><span><?php esc_attr_e( 'Compass' ); ?></span></li>
                    <li><i class="flaticon-037-idea fa-3x"></i><span><?php esc_attr_e( 'Idea' ); ?></span></li>
                    <li><i class="flaticon-039-vector fa-3x"></i><span><?php esc_attr_e( 'Vector' ); ?></span></li>
                    <li><i class="flaticon-036-brainstorming fa-3x"></i><span><?php esc_attr_e( 'Brainstorming' ); ?></span></li>
                    <li><i class="flaticon-026-search fa-3x"></i><span><?php esc_attr_e( 'Search' ); ?></span></li>
                    <li><i class="flaticon-018-laptop-1 fa-3x"></i><span><?php esc_attr_e( 'Laptop' ); ?></span></li>
                    <li><i class="flaticon-043-sketch fa-3x"></i><span><?php esc_attr_e( 'Sketch' ); ?></span></li>
                    <li><i class="flaticon-012-cube fa-3x"></i><span><?php esc_attr_e( 'Cube' ); ?></span></li>
                </ul>
            </div>
            
			<!-- #postbox-container-1 .postbox-container -->
            
		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
    </div>

	<!-- #poststuff -->
    
</div> <!-- .wrap -->







<p><?php echo plugin_dir_url('') .'labs/img/' ?></p>
<p><?php echo plugin_dir_url('') .'labs/img/' ?></p>
<p><?php echo plugin_dir_url('') .'labs/img/' ?></p>
<p><?php echo plugin_dir_url('') .'labs/img/' ?></p>
<p><?php echo plugin_dir_url('') .'labs/img/' ?></p>
<p><?php echo plugin_dir_url('') .'labs/img/' ?></p>
<p><?php echo plugin_dir_url('') .'labs/img/' ?></p>
