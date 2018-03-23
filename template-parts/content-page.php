<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VO_CUNG
 */

?>
<div class="row post">
    <div class="col-lg-12 <?php post_class(); ?>" id="post-<?php the_ID(); ?>" >

	<?php the_title( '<h1 class="entry-title post-header">', '</h1>' ); ?>

         <?php if ( 'post' === get_post_type() ) : ?>

			<div class="post-details post-header">
                            <i class="fa fa-user"></i> <?php the_author(); ?>
                            <i class="fa fa-clock"></i> <time><?php the_date(); ?></time>
                            <i class="fa fa-folder"></i> <a href=""><?php the_category(' , '); ?></a>
                            <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 0, 1, '%'); ?></a>

                        </div>
		<?php endif; ?>
         <div class="img-post">
             <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>" class="img-thumbnail">
         </div>


	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vo-cung' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->



    </div><!-- #post-<?php the_ID(); ?> -->
</div>
