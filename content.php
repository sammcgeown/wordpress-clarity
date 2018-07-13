
	<?php if(is_home() || is_category() || is_author() || is_search()) { ?>
				<a href="<?php echo get_the_permalink(); ?>" class="card clickable">
					<div class="card-header"><?php the_title(); ?></div>
					<div class="card-block">
						<div class="card-media-block">
							<div class="card-media-desciption">
								<span class="card-media-title"><?php the_date('d/m/Y'); ?> | <?php the_author(); ?></span>
							</div>
						</div>
					</div>
					<div class="card-block">
						<div class="card-text">
							<?php the_post_thumbnail('thumbnail', array('class' => 'card-media-image')); ?>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</a>
	<?php } else { ?>
		<div class="card-header"><h1><?php the_title(); ?></h1></div>
		<div class="card-block">
			<div class="card-media-block">
				<div class="card-media-desciption">
					<span class="card-media-title">
							<?php the_author_posts_link(); ?> | <?php the_date('d/m/Y'); ?> | <?php echo get_the_tag_list('Tags: ',', '); ?>
					</span>
				</div>
			</div>
		</div>
		<div class="card-block">
			<div class="card-text">
				<?php the_content(); ?>
			</div>
		</div>
	<?php } ?>
