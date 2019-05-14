
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
                                        <div id="testt">
                                            <div >
                                            <i class="flaticon-037-idea"></i>
                                            </div>
                                            <div class="service-text">
                                                <h2><a class="post_links" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                                <p><?= the_content();?></p>
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
                
                <h1>TEST</h1>
                <ul>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                </ul>
			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->