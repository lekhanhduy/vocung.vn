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
