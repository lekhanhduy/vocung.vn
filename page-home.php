
<?php
/**
 Template Name: Home Page
 */
$vanban_gioithieu = get_post_meta(8,'vanban_gioithieu', TRUE);
get_header();
?>

	 <!-- SECTION Giới Thiệu
    ================================= -->
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
                    <?php echo $vanban_gioithieu; ?>
                </p>
            </div>


        </div>
    </section>

    <!-- Đăng ký
    ================================= -->
    <section id="signup">
        <div class="container-fluid">
            <div class="row d-flex align-items-center" style="height: 300px;">
                <div class="col-sm-6 offset-sm-3">
                    <h2>Đăng ký để nhận thêm nhiều bài viết.<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/icon-bieucam.png" alt="biểu cảm"></h2>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Đăng ký thôi!</button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><i style="color: red;margin-left: 5px;" class="far fa-envelope"></i>Hãy nhập email vào đây nhé!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Email</label>
                                            <input placeholder="Nhập e mail của bạn" type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Thông Điệp</label>
                                            <textarea placeholder="Nhập tin nhắn của bạn" class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

<?php

get_footer();

