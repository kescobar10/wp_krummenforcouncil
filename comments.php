<div class="comments">

<!-- comment form -->

<?php $fields = array(
	'author' => '<input id="author" placeholder="Name" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" />',
	'email' => '<input id="email" name="email" placeholder="Email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />'
);
$args = array(
	'fields' => apply_filters( 'comment_form_default_fields', $fields )
);
comment_form($args); ?>

</div>

<!-- display comments -->



	<div class="comment-box">
		<?php if (have_comments()) : ?>

			<h2><?php comments_number(); ?></h2>

			<ul>
				<?php wp_list_comments('type=comment&callback=html5blankcomments'); ?>
			</ul>
	</div>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>


</div>
