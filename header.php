<?php
  global $post;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="container container--wider">
      <div class="row">
        <div class="col">
          <nav>
          <a class="logo" href="<?php echo site_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/logo.svg" alt="LOGO" width="92" height="39">
          </a>

          <div class="hamburger" id="js-hamburger">
            <span></span>
            <span></span>
          </div>

          <?php
            wp_nav_menu( array(
              'theme_location' => 'header-menu',
              'container'      => 'div',
              'container_class'=> 'main-nav',
              'menu_class'     => 'main-nav__nav',
              'container_id'   => 'js-main-nav'
            ) );
          ?>
        </nav>  
        </div>  
      </div>
      
      
    </div>
  </header>