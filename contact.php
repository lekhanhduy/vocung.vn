<?php

/**

 Template Name: Contact
 */
$title_contact = get_field('title_contact');
$mieuta_contact = get_field('mieuta_contact');
$thumb_url = wp_get_attachment_image_url(get_post_thumbnail_id($post->ID));
get_header();
?>
<div id="feature-image" class="pattern-overlay d-flex align-items-center justify-content-center" style="background:url('<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/lien-he.png');">

                        <h1>
                            <?php the_title(); ?>
                        </h1>

    </div>
<div class="container" id="primary">
        <div class="row">

            <main id="content" class="col-lg-8 offset-lg-2 col-md-8 offset-md-2" role="main">
                <!-- post -->
                <div class="row post">
                <?php if(has_post_thumbnail()) :  ?>
                     <div class="col-lg-4">
                        <img src="<?php echo $thumb_url;?>" alt="img-liên hệ" class="img-thumbnail">
                    </div>
                <?php else : ?>
                    <div class="col-lg-4">
                        <img src="echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/contact-gioithieu.jpg" alt="img-post" class="img-thumbnail">
                    </div>
                <?php endif; ?>


                    <div class="col-lg-8">
                        <!-- post-details -->
                        <h4><?php echo $title_contact; ?></h4>
                        <p><?php echo $mieuta_contact; ?></p>
                    </div>
                </div>
                <div class="row post">
                    <?php while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </main>
        </div>
</div>
<?php get_footer(); ?>

