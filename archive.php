<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VO_CUNG
 */

get_header();
?>
    <div id="feature-image" class="pattern-overlay d-flex align-items-center justify-content-center" style="background:url('<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/booksonstairs-cover.png');">

        <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>

    </div>
    <div class="container" id="primary">
        <div class="row">

            <main id="content" class="col-lg-7 col-md-7" role="main">

                <?php if ( have_posts() ) : ?>





                <?php
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
            </main>
            <aside class="col-lg-4 col-md-5">

                <?php get_sidebar(); ?>
            </aside>

        </div>
    </div>

    <?php
get_sidebar();
get_footer();
