<!-- blog-post-page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>
								<!-- Post item -->
								<div class="single-post">
									<div class="post-thumbnail">
										<img src="<?= get_the_post_thumbnail_url()?>" alt="">
										<div class="post-date">
											<h2><?= get_the_date(__('j')); ?></h2>
											<h3><?= get_the_date(__('M Y')); ?></h3>
										</div>
									</div>
									<div class="post-content">
										<h2><a class="post-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
										<div id="blog_posts" class="post-meta">
											<a href=""><?= the_author(); ?></a>
											<a href=""><?= the_tags()?></a>
											<a href=""><?= get_comments_number(); ?> Comments</a>
										</div>
										<p><?= the_content(); ?></p>
									</div>
									<!-- Post Author -->
									<div class="author">
										<div class="avatar">
											<img src="<?= get_avatar_url( get_the_author_ID()) ?>" alt="">
										</div>
										<div class="author-info">
											<h2><?= get_the_author(); ?>, <span>Author</span></h2>
											<p><?= get_the_author_description(); ?></p>
										</div>
									</div>
									<!-- Post Comments -->
									<div class="comments">
										<h2>Comments (<?= get_comments_number(); ?>)</h2>
										<!-- Recupération des commentaires de manière dynamique -->
										<?php if ( get_comments_number() != 0 ) :
													$post_comments = get_comments(['post_id' => $post->ID,]);
													if ( $post_comments ) {
														foreach($post_comments as $comment_each) { ?>
															<ul class="comment-list">
																<li>
																	<div class="avatar">
																		<img src="<?= get_avatar_url( comment_ID()) ?>" alt="">
																	</div>
																	<div class="commetn-text">
																	<!-- Faut mettre le chemin pour repondre au commentaire .. vers un nouveau commentaire -->
																		<h3><?= $comment_each->comment_author . ' | ' . get_the_date(__('j M, Y')) ?><a href="">| Reply</a></h3>
																		<p><?= $comment_each->comment_content; ?></p>
																	</div>
																</li>
															</ul>
														<?php }
													} ?>
										<?php endif ?>
									</div>
									<?php endwhile;
						endif; ?>
						
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								<form class="form-class">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="name" placeholder="Your name">
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" placeholder="Your email">
										</div>
										<div class="col-sm-12">
											<input type="text" name="subject" placeholder="Subject">
											<textarea name="message" placeholder="Message"></textarea>
											<button class="site-btn">send</button>
										</div>
									</div>
								</form>
							</div>
						</div>


					</div>
				</div>

					<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li>
								<a href="">
							<!-- Recupérations des Categories de manière dynamique -->
									<?php
										echo wp_list_categories([
											'title_li' => '',
											'hierarchical' => false,
										]); 
									?>
								</a>
							</li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							<!-- Recupérations des tags de manière dynamique -->
							<?php
								$my_query = new WP_Query ([
									'post_type' => 'post',
									'category_name' => '',
									'orderby' => 'ASC',
									]);
								if($my_query->have_posts()) :
									while ($my_query->have_posts() ) : $my_query->the_post();
										echo the_tags('<ul><li>', '</li><li>', '</li></ul>');?>
									<?php endwhile;
								endif;
							?>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="<?= LABS_IMG . 'add.jpg'?>" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->

