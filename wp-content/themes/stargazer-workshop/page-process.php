<?php
/**
 * Template Name: Process
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
      <div class="col-md-12">
        <div class="hero-card">
          <h1 class="heading-primary white">My Process.</h1>
          <p class="paragraph paragraph-hero white"><strong>RESEARCH</strong>
            <br> The first step is where I learn about your business. I want to find out everything about your business
            goals, your customers interests, age, behavior and how can your website solve their problems in the optimal
            way.
            Then I take a look at the websites of your competitors to establish context and benchmark of what already
            exists
            and how can we create something even better on top of it. This step gives us the foundation for moving
            forward
            with just the right recommendations for the design and development of your new responsive website.
            <br>
            <br>
            <strong>DESIGN</strong>
            <br> Design starts with creating wireframes of your websites; these are simple skeletons of the pages that
            explain
            how content should be laid out on the screen. I also create user flows, this is an abstract of at least
            three
            personas of your websites visitors. Someone who just seeks information, someone who is context aware but
            not
            sure if what you’re offering is the right thing for him and someone who is a ready to talk buyer. We design
            wireframes so all possible visitor personas can solve their problems easily and not get frustrated or
            overwhelmed by your website. Once the wireframes are done, we have to style them. This is where we
            implement
            colors, photos, shapes and animations to make the website alive. If your brand has a logo we make sure the
            colors we use harmonize with it and create a beautiful experience for the visitor. We show you designs and
            adjust them to your liking.
            <br>
            <br>
            <strong>DEVELOPMENT</strong>
            <br> Once the designs are finished I get my hands dirty with code. Utilizing the latest HTML3, CSS3, SCSS
            and
            SVG techniques I write semantic and maintainable code utilizing the best practices and design patterns. I
            often
            use gulp.js as my task runner. We set up a testing url where only you can preview your website and test it
            for
            bugs on all different screen sizes and modern web browsers (Firefox, Chrome, Safari, Internet Explorer 9+).
            I’m
            also familiar with page builder tools such as Elementor, Divi, Unbounce and Squarespace.
            <br>
            <br>
            <strong>WORDPRESS INTEGRATION</strong>
            <br> After the static website is complete, I turn it into customizable Wordpress theme utilizing the
            advanced custom fields plugin. </p>

          <a target="_blank" href="https://www.upwork.com/freelancers/~017e91531bd8f328c4" class="btn">CONTACT ME!</a>
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