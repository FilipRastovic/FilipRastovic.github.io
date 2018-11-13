<?php
/**
 * Template Name: Case Studies
 *
 *
 * @package stargazer-workshop
 */

get_header();
?>

<section class="hero">
  <div class="container">
    <div class="row">
      <?php
        if ( have_posts() ) :

          /* Start the Loop */
          while ( have_posts() ) :
            the_post();

            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */
            get_template_part( 'template-parts/content', get_post_type() );

          endwhile;

          the_posts_navigation();

        else :

          get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

    </div>
  </div>
</section>

<!-- Highlight Line -->
<?php get_template_part('template-parts/highlight-line'); ?>

<!-- Portfolio and Testimonials Section -->
<?php get_template_part('template-parts/portfolio-and-testimonials'); ?>

<!-- Contact Form Section -->
<?php get_template_part('template-parts/contact-form'); ?>

<?php

get_footer();