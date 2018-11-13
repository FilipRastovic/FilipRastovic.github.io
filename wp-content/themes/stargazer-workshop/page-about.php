<?php
/**
 * Template Name: About
 *
 *
 * @package stargazer-workshop
 */

get_header();
?>

<!-- Hero Section -->
<section id="hero-section" class="hero">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="hero-card">
          <h1 class="heading-primary white">Progressive UI/UX Development &amp; Design.</h1>
          <p class="paragraph paragraph-hero white">A freelance developer with an affection for web, user experience
            and product design. I help companies and individuals create software.</p>
          <p class="paragraph paragraph-hero white">My clients are webpreneurs, agencies and small businesses from all
            around the globe whom I help implement new features and fix issues within their website or application.
            Read what my clients have to say about me on my <a class="u-highlight-y u-bold" target="_blank" href="https://www.upwork.com/freelancers/~017e91531bd8f328c4">Freelance
              Profile</a>.</p>
          <p class="paragraph paragraph-hero white">My hobby is writing <a href="https://github.com/FilipRastovic"
              target="_blank" class="u-highlight-y u-bold white">Code</a> and designing <a class="u-highlight-y u-bold"
              href="http://stargazerstudio.net/" target="_blank">Video Games</a>. See my <a class="u-highlight-y u-bold"
              href="about.html#portfolio-section">Portfolio</a> or check out my <a target="_blank" href="Filip_Rastovic_Resume.pdf"
              class="u-highlight-y u-bold">Resume</a>.</p>
          <a target="_blank" href="https://www.upwork.com/freelancers/~017e91531bd8f328c4" class="btn">CONTACT ME!</a>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-1 hidden-xs hidden-sm">
        <div class="hero-image-wrapper">
          <img class="img-responsive about-image" src="<?php bloginfo('template_url'); ?>/assets/img/profilna.jpg" alt="Profile">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Highlight Line -->
<?php get_template_part('template-parts/highlight-line'); ?>

<!-- Portfolio and Testimonials Section -->
<?php get_template_part('template-parts/portfolio-and-testimonials'); ?>

<!-- Brands Section -->
<?php get_template_part('template-parts/brands'); ?>

<!-- Highlight Line -->
<?php get_template_part('template-parts/highlight-line'); ?>

<!-- Contact Form Section -->
<?php get_template_part('template-parts/contact-form'); ?>


<?php

get_footer();