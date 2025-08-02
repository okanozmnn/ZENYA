<?php
/**
 * The template for displaying comments
 */

// If the current post is protected by a password and the visitor has not yet
// entered the password we will return early without loading the comments.
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $zenya_comment_count = get_comments_number();
            if ('1' === $zenya_comment_count) {
                printf(
                    /* translators: 1: title. */
                    esc_html__('One thought on &ldquo;%1$s&rdquo;', 'zenya'),
                    '<span>' . wp_kses_post(get_the_title()) . '</span>'
                );
            } else {
                printf(
                    /* translators: 1: comment count number, 2: title. */
                    esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $zenya_comment_count, 'comments title', 'zenya')),
                    number_format_i18n($zenya_comment_count), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    '<span>' . wp_kses_post(get_the_title()) . '</span>'
                );
            }
            ?>
        </h2>

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size' => 50,
                    'reply_text' => __('Yanıtla', 'zenya'),
                )
            );
            ?>
        </ol>


        <?php
        the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if (!comments_open()) :
            ?>
            <p class="no-comments"><?php esc_html_e('Yorumlar kapalı.', 'zenya'); ?></p>
        <?php endif; ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
    comment_form(
        array(
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after'  => '</h2>',
            'title_reply' => __('Yorum Yap', 'zenya'),
            'title_reply_to' => __('%s için yanıtla', 'zenya'),
            'cancel_reply_link' => __('Yanıtı iptal et', 'zenya'),
            'label_submit' => __('Yorumu Gönder', 'zenya'),
            'comment_field' => '<p class="comment-form-comment">' .
                '<label for="comment">' . _x('Yorumunuz', 'noun', 'zenya') . '</label>' .
                '<textarea id="comment" name="comment" cols="45" rows="8" required></textarea></p>',
            'must_log_in' => '<p class="must-log-in">' .
                sprintf(
                    __('<a href="%s">Giriş yapmanız</a> gerekiyor yorum yapmak için.', 'zenya'),
                    wp_login_url(apply_filters('the_permalink', get_permalink()))
                ) . '</p>',
            'logged_in_as' => '<p class="logged-in-as">' .
                sprintf(
                    '<a href="%1$s" aria-label="%2$s">%3$s</a> olarak giriş yaptınız. <a href="%4$s">Çıkış yapmak ister misiniz?</a>',
                    get_edit_user_link(),
                    esc_attr(sprintf(__('Profilinizi düzenleyin. %s', 'zenya'), $user_identity)),
                    $user_identity,
                    wp_logout_url(apply_filters('the_permalink', get_permalink()))
                ) . '</p>',
            'comment_notes_before' => '<p class="comment-notes">' .
                __('E-posta adresiniz yayınlanmayacak.', 'zenya') . ( $req ? $required_text : '' ) .
                '</p>',
            'comment_notes_after' => '<p class="form-allowed-tags">' .
                sprintf(
                    __('Bu HTML etiketlerini ve özelliklerini kullanabilirsiniz: %s', 'zenya'),
                    ' <code>' . allowed_tags() . '</code>'
                ) . '</p>',
        )
    );
    ?>
</div>
