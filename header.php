<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <title><?php echo bloginfo('name'); ?></title> -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="n/a">
  <meta name="author" content="https://zaid.games">

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png">

  <?php wp_head(); ?>

</head>

<body>
  <header>

    <nav class="nav-main">

      <div class="nav-logo-wrapper">

      <?php
      if(!is_front_page() && function_exists('the_custom_logo')):
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
      ?>

        <a href="index.php">
          <img class='nav-logo' src="<?php echo $logo[0]; ?>">
        </a>

      <?php
      endif;
      ?>

      </div>

      <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul>%3$s</ul>'
          )
        );
      ?>

    </nav>

  </header>
