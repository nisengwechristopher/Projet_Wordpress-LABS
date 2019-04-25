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
											<a class="blog-post-comments" href=""><?= the_author(); ?></a>
											<a class="blog-post-comments" href=""><?= the_tags()?></a>
											<a class="blog-post-comments" href=""><?= get_comments_number(); ?> Comments</a>
										</div>
										<p><?= the_content(); ?></p>
										<a href="<?= get_permalink(); ?>" class="read-more">Read More</a>
									</div>
								</div>
								<?php
							endwhile;
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
							<li><a href="#">Vestibulum maximus</a></li>
							<li><a href="#">Nisi eu lobortis pharetra</a></li>
							<li><a href="#">Orci quam accumsan </a></li>
							<li><a href="#">Auguen pharetra massa</a></li>
							<li><a href="#">Tellus ut nulla</a></li>
							<li><a href="#">Etiam egestas viverra </a></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Instagram</h2>
						<ul class="instagram">
							<li><img src="<?= LABS_IMG . 'instagram/1.jpg'?>" alt=""></li>
							<li><img src="<?= LABS_IMG . 'instagram/2.jpg'?>" alt=""></li>
							<li><img src="<?= LABS_IMG . 'instagram/3.jpg'?>" alt=""></li>
							<li><img src="<?= LABS_IMG . 'instagram/4.jpg'?>" alt=""></li>
							<li><img src="<?= LABS_IMG . 'instagram/5.jpg'?>" alt=""></li>
							<li><img src="<?= LABS_IMG . 'instagram/6.jpg'?>" alt=""></li>
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							<li><a href="">branding</a></li>
							<li><a href="">identity</a></li>
							<li><a href="">video</a></li>
							<li><a href="">design</a></li>
							<li><a href="">inspiration</a></li>
							<li><a href="">web design</a></li>
							<li><a href="">photography</a></li>
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