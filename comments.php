<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VO_CUNG
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

    <div id="comments" class="comments-area">

        <?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>

            <div id="leave-comment">
                <h4 class="comments-title" style="text-align: center;clear: both">
                    <?php
			$vo_cung_comment_count = get_comments_number();
			if ( '1' === $vo_cung_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'Một bình luận','vo-cung' )

				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s bình luận &ldquo;', '%1$s bình luận &ldquo;', $vo_cung_comment_count, 'comments title', 'vo-cung' ) ),
					number_format_i18n( $vo_cung_comment_count )

				);
			}
			?>
                </h4>
                <!-- .comments-title -->
                <?php the_comments_navigation(); ?>

                <ol class="comment-list">
                    <?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
                </ol>
                <!-- .comment-list -->

                <?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
                    <p class="no-comments">
                        <?php esc_html_e( 'Comments are closed.', 'vo-cung' ); ?>
                    </p>
                    <?php
		endif;

	endif; // Check for have_comments().


	?>

<?php if ( comments_open() ) : ?>

<div id="respond" class="comment-respond post">
<h2 class="title fz18 title2 bg_title1">Để Lại Bình Luận</h2>
    <div class="cancel-comment-reply">
    	<small><?php cancel_comment_reply_link(); ?></small>
    </div>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <p><a href="<?php echo wp_login_url( get_permalink() ); ?>">Login</a> to comment.</p>
    <?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

    <?php if ( is_user_logged_in() ) : ?>
		<p class="nameuser">Comment with: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></p>
    <?php endif; ?>
     	<p>
        	<textarea name="comment" id="comment" cols="50" rows="4" tabindex="4" placeholder="Tin nhắn"></textarea>
        </p>
    <?php if(!is_user_logged_in()):?>


	      	<input placeholder="Tên của bạn" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author);?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />

	        <input placeholder="Email của bạn" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />


    <?php endif;?>
                <p class="control"><input class="btn btn-outline-danger" name="submit" type="submit" id="submit" tabindex="5" value="SUBMIT" />
        <?php comment_id_fields(); ?>
        </p>
        <?php do_action('comment_form', $post->ID); ?>

    </form>

        <?php endif; // If registration required and not logged in ?>

    </div>
<?php endif; // if you delete this the sky will fall on your head ?>
            </div>
    </div>
    <!-- #comments -->
