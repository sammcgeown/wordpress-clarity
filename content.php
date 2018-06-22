
	<?php if(is_home() || is_category()) { ?>
			<!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12"> -->
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
			<!-- </div> -->
	<?php } else { ?>
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
				<?php the_content(); ?>
			</div>
		</div>
	<?php } ?>
