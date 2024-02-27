<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digitale Vormgeving</title>
  <?php wp_head(); ?>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/cpz6bnv.css">
  <!-- Glide -->
  <link rel="stylesheet" href="./assets/css/glide.core.css">
</head>

<body>
  <header class="container d-flex justify-content-between align-items-center">
    <ul class="d-flex gap-3">
      <li><a href="https://www.facebook.com/vivestechnology" target="_blank">FB</a></li>
      <li><a href="https://www.instagram.com/vives_divo/" target="_blank">IG</a></li>
    </ul>
    <div>
      <?php
      if (function_exists('the_custom_logo')) {
        the_custom_logo();
      }
      ?>
    </div>
    <nav class="position-relative overflow-hidden">
      <div class="nav-fullscreen position-fixed d-flex ">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'main-navigation',
            'menu_class' => 'nav-fullscreen-items',
          )
        );
        ?>
      </div>
      <div
        class="hamburger hamburger-steps position-absolute top-50 start-50 translate-middle d-flex flex-column justify-content-center">
        <div class="hamburger-line"></div>
        <div class="hamburger-line"></div>
        <div class="hamburger-line"></div>
      </div>
    </nav>
  </header>
  <hr>