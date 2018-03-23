<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VO_CUNG
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
        <!-- GOogle font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Link to your CSS file -->


    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vo-cung' ); ?></a>

	<!-- HEADER
    ================================= -->
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
                    <i class="fas fa-search" data-toggle="modal" data-target=".bd-example-modal-sm"></i>

                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">

                                    <?php dynamic_sidebar('sidebar-2'); ?>


                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
