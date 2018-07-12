
<?php get_header(); ?>
      <div class="content-container row">
        <div class="content-area col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
        <?php if(is_home() || is_category() || is_author() || is_search()) { ?>
          <div class="card-columns card-columns-2">
          <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
              get_template_part( 'content', get_post_format() );
            endwhile; endif;
          ?>
          </div><!--./card-columns-->
          <?php } else {
              if ( have_posts() ) : while ( have_posts() ) : the_post();
              get_template_part( 'content', get_post_format() );
            endwhile; endif;
          } ?>
          <nav>
            <span class="label"><?php next_posts_link( '<< Older posts' ); ?></span>
            <span class="label"><?php previous_posts_link( 'Newer posts >>' ); ?></span>
          </nav>
        </div><!-- /.content-area -->
        <?php get_sidebar(); ?>
      </div><!-- /.content-container -->
<?php get_footer(); ?>