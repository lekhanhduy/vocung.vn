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
