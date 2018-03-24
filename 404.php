<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package VO_CUNG
 */

get_header();
?>
    <section id="gioi-thieu" class="container-fluid">
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
        <div class="row d-flex align-items-center" style="height: 470px;">
            <div class="col-sm-6 offset-sm-2">
                <p id="trich-dan" class="d-sm-inline-block">
                    Nhũng thứ bạn thấy là những thứ người khác muốn bạn thấy.<br> Nội dung bạn tìm kiếm không tồn tại .......
                </p>
            </div>


        </div>
    </section>
    <div id="primary" class="content-area">
        <main class="row">


            <div class="col-sm-4 offset-sm-4">


                <p>Quay về trang chủ thôi ! <a class="btn btn-danger btn-md" href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-404.png"></p>

            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php
get_footer();
