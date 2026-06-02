<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
  <div class="container">
    <div class="header-inner">

      <!-- Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home">
        <div class="logo-icon" aria-hidden="true">🔧</div>
        <div class="logo-text">
          <?php
          if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
            the_custom_logo();
          } else {
            echo 'Lievore <span>Home Services</span>';
          }
          ?>
        </div>
      </a>

      <!-- Navigation -->
      <nav class="site-nav" id="primary-nav" role="navigation" aria-label="Primary">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
           class="<?php echo lhs_nav_class( '' ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"
           class="<?php echo lhs_nav_class( 'services' ); ?>">Services</a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"
           class="<?php echo lhs_nav_class( 'about' ); ?>">About</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
           class="nav-cta <?php echo lhs_nav_class( 'contact' ); ?>">Get a Free Quote</a>
      </nav>

      <!-- Mobile toggle -->
      <button class="nav-toggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </button>

    </div>
  </div>
</header>
