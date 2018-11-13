<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-123056545-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Filip Rastovic - Web Development &amp; Design</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
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

    <!-- ========= MOBILE NAVBAR =========== -->
    <div class="overlay overlay-data">
        <a href="" class="overlay-close">CLOSE</a>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav navbar-nav'
            ));
        ?>
    </div>
    <section class="navbar-section hidden-md hidden-lg">
        <div class="container-fluid">
            <div class="navbar navbar-mobile">
                <a href="index.html" class="navbar-brand">
                    <span class="navbar-brand-text white">Filip Rastovic</span>
                    <span class="navbar-brand-quote white">Web Development &amp; Design</span>
                </a>
                <div class="sidenav-hamburger pull-right">
                    <span id="toggle-button" class="burger">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- Mobile navbar ends -->

    <!-- ============= DESKTOP NAVBAR ============= -->
    <nav class="navbar navbar-default navbar-section navbar-desktop hidden-xs hidden-sm">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <span class="navbar-brand-text white">Filip Rastovic</span>
                    <span class="navbar-brand-quote white">Web Development &amp; Design</span>
                </a>
            </div>
           	<?php
              wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav navbar-nav navbar-right'
              ));
			      ?>	
        </div>
    </nav>
    <!-- Desktop Navbar Ends-->

    <!-- Highlight Line -->
    <div class="highlight-line"></div>