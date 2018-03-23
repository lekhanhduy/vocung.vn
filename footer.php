<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VO_CUNG
 */

?>


<?php wp_footer(); ?>
<footer class="d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-sm-4 offset-sm-3 copy-right" style="text-align: center">
                    <p class="pull-right">&copy; <?php echo date('Y'); ?> <?php bloginfo('name') ?></p>

                </div>
                <div id="icon-footer" class="col-sm-1"><a href="http://facebook.com"><i class="fab fa-facebook-square"></i></a></div>
            </div>
            <div  id="arrow-up"style="font-size: 2em;"><a href="#header-id"><i class="fas fa-arrow-up"></i></a></div>
        </div>
            <!-- end col -->
            <!-- container -->
    </footer>
<!-- Coding End -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/js/main.js"></script>
</body>

</html>

</body>
</html>
