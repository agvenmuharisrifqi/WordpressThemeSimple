<div class="comments-wrapper">
    <div class="comments" id="comments">
		<div class="comments-header">
            <h4 class="comment-reply-title">
            <?php
                if (! have_comments()){
                    echo "0 Comment";
                }else {
                    echo get_comments_number()." Comments";
                }
            ?>
            </h4>
        </div>
        <div class="comments-inner">
            <?php
                wp_list_comments(
                    array(
                        'avatar_size' => 50,
                        'style' => 'div',
                    )
                )
            ?>
        </div>
	</div>
    <hr aria-hidden="true">
    <?php
        if (comments_open()){
            comment_form(
                array(
                    'class_form' => 'comment-form',
                    'comment_notes_before' => 'Comment Here',
                    'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
                    'title-reply_after' => '</h4>',
                )
                );
        }
    ?>
</div>