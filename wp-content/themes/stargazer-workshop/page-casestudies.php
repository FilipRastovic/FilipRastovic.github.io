<?php
/**
 * Template Name: Case Studies
 *
 *
 * @package stargazer-workshop
 */

get_header();
?>

<!-- Hero Section -->
<!-- <section id="hero-section" class="hero">
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="hero-card">
                <h1 class="heading-primary white">Customr.app</h1>
                <p class="paragraph paragraph-hero white">Customr.app is a Budapest based AI analytics survey app developer. 
                    The company CEO wanted a modern looking landing page to help him explain what the application is about and
                        start collecting leads with a form where visitors can sign up for the demo of the app.
                </p>
                <p class="paragraph paragraph-hero white">
                    Robert, the company CEO got in touch with me after searching for a single person to both develop and design him
                        a landing page. We got in touch on skype and after a nice chat he sent me over the pdf abstract document he has
                        put together. It was a complex document that I had to simplify and turn into a website presentation that is 
                        user friendly. I than began desining the page following my standard
                        <a href="process.html" target="_blank">workflow process</a> and sent him over the image files of the initial
                        design. We iterated a few times and eventually created a design that we both liked. I then started coding by
                            forking a bootstrap template with pre built gulpjs configuration and scss partials for efficient development.
                            I coded the static page and then turned it into a Wordpress theme, utilizing the Custom Field plugin to 
                            allow Robert to change all the content on the page: images that were in the sliders, text in every section
                            and social urls. Robert and I moved into another project after this one, design and development of his 
                            personal analytics services company.
                </p>
                <p class="paragraph paragraph-hero white">
                    Client review:
                    <br>
                    <i>Filip has a unique combo of skills, design and development. He proactively suggested some great ideas on how 
                        to make the website not just functional but esthetic. He created awesome visual mocks, iterated quickly based
                            on my input and then coded all of it into a superb website. Throughout the process Filip was a charm to work
                            with. All in all, great designer-developer with an outstanding sense for client 
                            service.-<a href="http://customr.app">Customr.app</a></i>
                </p>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <div class="hero-image-wrapper">
                <a href="<?php bloginfo('template_url'); ?>/assets/img/customr-case-study.png" target="_blank"><img class="img-responsive case-study-image" src="<?php bloginfo('template_url'); ?>/assets/img/customr-case-study.png" alt="Profile"></a>
            </div>
        </div>
    </div>
</div>
</section> -->

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

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


<!-- Highlight Line -->
<?php get_template_part('template-parts/highlight-line'); ?>

<!-- Portfolio and Testimonials Section -->
<?php get_template_part('template-parts/portfolio-and-testimonials'); ?>

<!-- Contact Form Section -->
<?php get_template_part('template-parts/contact-form'); ?>

<?php

get_footer();