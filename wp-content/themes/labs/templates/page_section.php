	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- affichagne des blog-posts (category) dans l'ordre chronologique-->
					<?php
						$my_query = new WP_Query ([
							'post_type' => 'post',
							'category_name' => 'blog-post',
							'posts_per_page' => 3,
							'orderby' => 'rand',
							]);
							
							// If we have posts lets show them
							if($my_query->have_posts()) :
								while ($my_query->have_posts() ) : $my_query->the_post();?>
								<!-- Post item -->
								<div class="post-item">
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
										<p><?= get_excerpt(); ?></p>
										<a href="<?= get_permalink(); ?>" class="read-more">Read More</a>
									</div>
								</div>
								<?php endwhile;
							endif;?>
					<!-- Post item end -->

					<!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
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