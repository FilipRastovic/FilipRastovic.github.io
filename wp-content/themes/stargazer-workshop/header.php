<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and the navbar
 *
 * @package stargazer-workshop
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123056545-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-123056545-1');
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Filip Rastovic - Web Development &amp; Design</title>

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">

  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/star_icon.png" />
  <meta name="description" content="Filip Rastovic - Web Development &amp; Design">
  <meta name="keywords" content="web,design,development,stargazer,studio">
  <meta name="author" content="Filip Rastovic">
  <meta property="og:title" content="Filip Rastovic - Web Development &amp; Design" />
  <meta property="og:url" content="https://filiprastovic.net" />
  <meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/img/meta_tag_img.png" />
  <?php wp_head(); ?>
</head>

<body>
  <nav class="navbar navbar-default navbar-section">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="/" class="navbar-brand">
          <span class="navbar-brand-text">Filip Rastovic</span>
          <span class="navbar-brand-quote">Web Development &amp; Design</span>
          
        </a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
              wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav navbar-nav navbar-right'
              ));
            ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->
  </nav>
  
  <!-- Highlight Line -->
  <!-- <div class="highlight-line"></div> -->