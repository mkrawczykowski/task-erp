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
  <header>
    <nav>
      <a class="logo" href="<?php echo site_url(); ?>">
        <picture class="logo__picture">
          <source type="image/webp"
            srcset=
              "
                <?php echo get_stylesheet_directory_uri(); ?>/public/teddy-logo.webp,
                <?php echo get_stylesheet_directory_uri(); ?>/public/teddy-logo@2x.webp 2x
              "
          >
          <img 
            srcset=
              "
                <?php echo get_stylesheet_directory_uri(); ?>/public/teddy-logo.png,
                <?php echo get_stylesheet_directory_uri(); ?>/public/teddy-logo@2x.png 2x
              "
              src="<?php echo get_stylesheet_directory_uri(); ?>/public/teddy-logo.png"
              alt="Klub bokserski Teddy - logo"
              decoding="async"
          >
        </picture>
      </a>

      <div class="hamburger" id="js-hamburger">
        <span></span>
        <span></span>
      </div>

      <?php
        wp_nav_menu( array(
          'theme_location' => 'header-menu',
          'container'      => 'nav',
          'container_class'=> 'main-nav',
          'menu_class'     => 'main-nav__nav',
          'container_id'   => 'js-main-nav'
        ) );
      ?>
    </nav>
  </header>