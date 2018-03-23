<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VO_CUNG
 */

?>


    <div class="entry-header row post <?php post_class(); ?>" id="post-<?php the_ID(); ?>" >
        <?php if ( has_post_thumbnail() ) { // check for feature image ?>
	<div class="col-lg-4">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>" class="img-thumbnail">
        </div>
	<?php } ?>

        <div class="col-lg-8">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
	    endif; ?>

            <p class="entry-content">
		<?php the_excerpt(); ?>
            </p><!-- .entry-content -->




		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="post-details">
                            <i class="fa fa-user"></i> <?php the_author(); ?>
                            <i class="fa fa-clock"></i> <time><?php the_date(); ?></time>
                            <i class="fa fa-folder"></i> <a href=""><?php the_category(' , '); ?></a>
                            <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 0, 1, '%'); ?></a>

                        </div>
		<?php endif; ?>
            </div>
    </div><!-- .entry-header -->






