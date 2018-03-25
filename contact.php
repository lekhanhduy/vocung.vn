<?php

/**

 Template Name: Contact
 */
$title_contact = get_field('title_contact');
$mieuta_contact = get_field('mieuta_contact');
$thumb_url = wp_get_attachment_image_url(get_post_thumbnail_id($post->ID));
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
                <div class="row post bg-form">
                    <?php while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </main>
        </div>
</div>
<?php get_footer(); ?>

