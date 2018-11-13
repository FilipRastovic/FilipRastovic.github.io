<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stargazer-workshop
 */

get_header();
?>

<section class="hero">
  <div class="container">
    <div class="row">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content-single', get_post_type() );
    ?>
    </div>

    <div class="row">
      <div class="col-md-6">
        <?php 
          // the_post_navigation();

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
    
           endwhile; // End of the loop.
          ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
