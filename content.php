
	<?php if(is_home() || is_category()) { ?>
			<div class="">
				<a href="<?php echo get_the_permalink(); ?>" class="card clickable">
					<div class="card-header"><?php the_title(); ?></div>
					<div class="card-block">
						<div class="card-media-block">
							<?php the_post_thumbnail('thumbnail', array('class' => 'card-media-image')); ?>
							<div class="card-media-desciption">
								<span class="card-media-title">
										<?php the_author_link(); ?>
								</span><br />
								<span class="card-media-text">
									<?php the_date(); ?>

								</span>
							</div>
						</div>
					</div>
					<div class="card-block">
						<div class="card-text">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</a>
			</div>
	<?php } else { ?>
		<div class="blog-post">
		<h2 class="blog-post-title"><?php the_title(); ?></h2>
		<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
		</div><!-- /.blog-post -->
	<?php the_content(); } ?>