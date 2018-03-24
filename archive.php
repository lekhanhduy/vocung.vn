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
    <header class="site-header bg-dark" role="banner" id="header-id">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark" id="back-ground">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                </button>

                <a href="<?php bloginfo('url'); ?>" class="navbar-brand"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/icon-header.png" alt="Bootstrap to Wordpress"></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

               <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => 'ul',
                    'container_class'=> 'collapse navbar-collapse',
                    'container_id'   => 'navbarSupportedContent',
                    'menu_class'     => 'navbar-nav mr-auto'
                ));

                ?>

             <form method="get" class="searchform" action="<?php echo home_url( '/'); ?>" >

                 <input type="search" class="field s to-se form-control mr-sm-2" name="s" placeholder="Tìm kiếm" aria-label="Search" />

             </form>
                    <span id="toggle-search"><i class="fas fa-search"></i></span>


                </div>
            </nav>
        </div>
    </header>
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
