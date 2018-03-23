<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VO_CUNG
 */

?>
<div class="container" id="primary">
        <div class="row post">

            <main id="content" class="col-lg-7 col-md-7" role="main">

		<h1 class="page-title"><?php esc_html_e( 'Không tìm kiếm thấy', 'vo-cung' ); ?></h1>

		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'vo-cung' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Xin lỗi không có kết quả tìm kiếm nào chùng khớp , bạn vui lòng thử lại với một từ khóa khác.', 'vo-cung' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'vo-cung' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
            </main>


        </div>
     </div>
