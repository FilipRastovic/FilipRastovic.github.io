<?php
/**
 * Template Name: Home
 *
 * @package stargazer-workshop
 */

get_header();
?>


<!-- Hero Section -->
<section id="hero-section" class="hero hero--background">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="heading-primary">I create <br class="hidden-sm hidden-md hidden-lg"><span class="highlight">websites</span>!</h1>
        <p class="paragraph paragraph--hero u-bold animated fadeInLeft">Get in touch with me and recieve a <span class="highlight">free</span>
          quote about how I would change your existing design or create
          you a new <span class="highlight">responsive website</span>! Learn more about my website creation process <a
            href="process.html">here</a>.</p>
      </div>
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0 text-center">
        <h3 class="heading-secondary heading-secondary--sub highlight u-uppercase animated tada slow">FREE eBOOK HERE!</h3>
        <img class="img-responsive ebook-cover" src="<?php bloginfo('template_url'); ?>/assets/img/fr-ebook.png" alt="Ebook Cover">
        <a target="_blank" href="<?php bloginfo('template_url'); ?>/assets/download//Filip Rastovic - Website Creation eBook.pdf"
          class="btn" download>Download the eBook!</a>

        <p class="paragraph text-center white u-margin-top-60">Let your UX be evaluated by professionals.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
        <p class="hero-separator paragraph paragraph--hero u-padding-top-40">Growth hack your business
          today.</p>
        <div class="vl hidden-xs hidden-sm"></div>
      </div>

      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 venn">
        <div class="venn-diagram-container">
          <div class="circle-top-left">
            <label>
              <span class="title">Software Engineering</span>
              <span class="subtitle">Analysis <span class="hidden-xs">+</span> Development</span>
            </label>
          </div>
          <div class="circle-top-right" style="z-index: 2;">
            <label>
              <span class="title">Design<br>Studio</span>
              <span class="subtitle">UI + UX <span class="hidden-xs">+</span> Digital Design</span>
            </label>
          </div>
          <div class="circle-bottom-center-x">
            <label>
              <span class="title">A/B<br>Testing</span>
              <span class="subtitle">Data<span class="hidden-xs">,</span> Optimization</span>
            </label>
          </div>
          <div class="subcircle-top-center-x">
            <label>
              <span class="subtitle">Your Ideas <span class="hidden-xs">Delivered</span></span>
            </label>
          </div>
          <div class="subcircle-center-left">
            <label>
              <span class="subtitle">Agile <span class="hidden-xs"><br>Release on Demand</span></span>
            </label>
          </div>
          <div class="subcircle-center-right">
            <label>
              <span class="subtitle">User Feedback</span>
            </label>
          </div>
          <div class="subsubcircle-center-x-y">
            <svg x="0px" y="0px" viewBox="0 0 157.331 200.443">
              <g>
                <path d="M57.257,52.647c0,15.096-12.828,27.339-28.623,27.339C12.816,79.986,0,67.743,0,52.647C0,37.542,12.816,25.31,28.634,25.31 C44.429,25.31,57.257,37.542,57.257,52.647z" />
                <path d="M157.331,83.605c0,13.509-11.476,24.463-25.604,24.463c-14.155,0-25.619-10.954-25.619-24.463 c0-13.51,11.464-24.456,25.619-24.456C145.855,59.149,157.331,70.095,157.331,83.605z" />
                <path d="M123.322,28.78c0,15.895-13.511,28.784-30.14,28.784c-16.648,0-30.135-12.889-30.135-28.784 C63.048,12.883,76.534,0,93.183,0C109.812,0,123.322,12.883,123.322,28.78z" />
                <path d="M98.54,104.468c0,14.307-12.159,25.904-27.118,25.904c-14.989,0-27.129-11.598-27.129-25.904 c0-14.309,12.14-25.895,27.129-25.895C86.381,78.573,98.54,90.16,98.54,104.468z" />
                <path d="M94.128,158.237c0,8.576-7.287,15.531-16.262,15.531c-8.986,0-16.268-6.955-16.268-15.531 c0-8.589,7.281-15.542,16.268-15.542C86.841,142.695,94.128,149.648,94.128,158.237z" />
                <path d="M125.577,136.046c0,8.576-7.293,15.531-16.269,15.531c-8.987,0-16.262-6.955-16.262-15.531 c0-8.584,7.274-15.546,16.262-15.546C118.284,120.5,125.577,127.462,125.577,136.046z" />
                <path d="M116.687,187.748c0,7.02-5.959,12.695-13.289,12.695c-7.34,0-13.287-5.676-13.287-12.695 c0-7.002,5.947-12.676,13.287-12.676C110.728,175.072,116.687,180.746,116.687,187.748z" />
              </g>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio and Testimonials Section -->
<?php get_template_part('template-parts/portfolio-and-testimonials'); ?>

<!-- Tools I Use Section -->
<?php get_template_part('template-parts/tools-i-use'); ?>

<!-- Call to action section -->
<?php get_template_part('template-parts/call-to-action'); ?>

<!-- Highlight Line -->
<?php get_template_part('template-parts/highlight-line'); ?>

<!-- Copy Section -->
<?php get_template_part('template-parts/copy'); ?>

<!-- Brands Section -->
<?php get_template_part('template-parts/brands'); ?>

<!-- Highlight Line -->
<?php get_template_part('template-parts/highlight-line'); ?>

<!-- Contact Form Section -->
<?php get_template_part('template-parts/contact-form'); ?>

<?php

get_footer();