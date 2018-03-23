<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package VO_CUNG
 */

get_header();
?>

	<div class="container" id="primary">
        <div class="row">

            <main id="content" class="col-lg-7 col-md-7" role="main">



		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	 </main>

            <aside class="col-lg-4 offset-lg-1 col-md-5">

                <?php get_sidebar(); ?>
         </aside>


        </div>
      </div>
<?php

get_footer();
