<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package VO_CUNG
 */

get_header();
?>
<div id="feature-image" class="pattern-overlay d-flex align-items-center justify-content-center" style="background:url('<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/booksonstairs-cover.png');">

                       <h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Kết quả tìm kiếm cho : %s', 'vo-cung' ), '<span>' . get_search_query() . '</span>' );
					?>
		       </h1>

 </div>
	<div class="container" id="primary">
        <div class="row">

            <main id="content" class="col-lg-8 offset-lg-2 col-md-8 offset-md-2" role="main">

		<?php if ( have_posts() ) : ?>





			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main>


        </div>
     </div>

<?php

get_footer();
