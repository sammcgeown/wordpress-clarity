<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/<?php echo get_theme_mod( 'ClarityScheme', 'clarity-ui.css' ); ?>" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/clarity-icons.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/clr-icons.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/definit-clarity.css" rel="stylesheet">
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/clarity-icons.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/custom-elements.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/clr-icons.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body>
  <div class="main-container">
    <header class="header <?php echo get_theme_mod( 'ClarityHeaderColour', 'clarity-ui.css' ); ?>">
      <div class="branding">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="nav-link">
          <?php
          if ( has_custom_logo() ) {
                  echo get_custom_logo();
          } else {
                  echo '<clr-icon shape="vm-bug"></clr-icon>';
          }
          ?>
          <span class="title"><?php echo get_bloginfo( 'name' ); ?></span>
        </a>
      </div>
      <div class="header-nav">
      </div> <!-- /.header-nav -->
      <div class="header-actions">
        <?php if(get_theme_mod('ClarityShowHeaderSearch')) { 
          get_search_form();
        }
        if(get_theme_mod('ClarityShowHeaderAdmin')) { ?>
          <a href="<?php echo get_admin_url(); ?>" class="nav-link nav-icon"><clr-icon shape="cog"></clr-icon></a>
        <?php }
        if(get_theme_mod('ClarityShowHeaderRSS')) {  ?>
          <a href="<?php bloginfo('rss2_url'); ?>" class="nav-link nav-icon"><clr-icon shape="code" title="RSS"></clr-icon></a>
        <?php } ?>
      </div>
    </header>
    <nav class="subnav">
      <?php wp_nav_menu( array( 'theme_location' => 'clarity-header-navigation', 'container_class' => 'nav' ) ); ?>
    </nav>
