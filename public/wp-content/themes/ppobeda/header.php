<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" 
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">

  <title><?=get_field('Title') ?></title>
  <meta name="description" content="<?=get_field('Description') ?>">
  <meta name="keywords" content="">
  <?php wp_head(); ?>

</head>
<body>

  <!-- Pushy Menu -->
  <nav class="pushy pushy-right">
    <div class="pushy-content">
      <?php
      $mobile_menu = wp_nav_menu( array(
        'theme_location'  => 'main_menu',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => 'navbarSupportedContent',
        'menu_class'      => 'menu nav',
        'fallback_cb'     => 'wp_page_menu',
        'items_wrap'      => '<ul id="%1$s" class="%2$s" role="navigation">%3$s</ul>',
        'depth'           => 2,
        'echo' => 0
      ) );
      $mobile_menu = str_replace('class="menu-item', 'class="menu-item nav-item', $mobile_menu);
      $mobile_menu = str_replace('<a', '<a class="nav-link"', $mobile_menu);
      echo $mobile_menu;
      ?>
    </div>
  </nav>

  <!-- Site Overlay -->
  <div class="site-overlay"></div>

  <main id="container">

    <header class="mt-3 mt-sm-0">

      <div id="toggle-button" class="d-flex d-sm-none fixed-top">
        <!-- Menu Button -->
        <button class="menu-btn">&#9776; Меню</button>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="row">
              <div class="col-12 col-lg-5 text-center text-sm-right mt-1">
                <a href="/"><img src="<?=get_template_directory_uri()?>/img/pobeda_stamp.svg" width=""></a>
              </div>
              <div class="col-lg-7">
                <a href="/"><b class="logo-pre">Предприятие</b>
                <img src="<?=get_template_directory_uri()?>/img/logo.svg" width="300"></a>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="row mt-3 no-gutters">
              <div class="text-center text-sm-left col-12 col-lg-5 col-xl-5">
                <address><a href="/kontakty/" target="_blank">г. Мытищи, ул. Летная, стр. 19</a></address>
              </div>
              <div class="text-center text-sm-left col-12 col-lg-3 col-xl-3">
                <a class="email" href="mailto:zakaz@ppobeda.ru" target="_blank" rel="nofollow">zakaz@ppobeda.ru</a>
              </div>
              <div class="text-center text-sm-right col-12 col-lg-4 col-xl-4">
                <a href="tel:+74950124499" class="phone" target="_blank">+7 (495) 012-44-99</a>
              </div>
            </div>
            <div class="row">
              <div class="d-none d-sm-block col-12">
                <hr class="mb-1" size="1" color="#191919">
                <?php
                $top_menu = wp_nav_menu( array(
                  'theme_location'  => 'main_menu',
                  'menu_class'      => 'nav top_menu', 
                  'container'       => 'ul', 
                  'echo'            => 0,
                  'fallback_cb'     => 'wp_page_menu',
                  'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                  'depth'           => 0,
                ) );
                $top_menu = str_replace('class="page_item', 'class="page_item nav-item', $top_menu);
                $top_menu = str_replace('<a', '<a class="nav-link"', $top_menu);
                echo $top_menu;
                ?>
                <!-- <hr class="mt-1" size="1" color="#191919"> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <hr size="3px" color="#000" class="header_bottom_hr">
          </div>
        </div>
      </div> <!-- container -->
    </header>