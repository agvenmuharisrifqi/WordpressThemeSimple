<?php
/**
 * This File For Displaying Single Post
 * 
 * @package Killua Simple
 * @subpackage single
 */
?>

<h1 class="heading-page"><?php the_title(); ?></h1>
<article class="singlepost">
    <div class="post-desc">
        <p><strong><?php echo get_the_author(); ?> - <span style="color: var(--bg-primary);">Killua Simple</span></strong></p>
        <p><?php echo get_the_date('F j, Y, g:i a'); ?></p>
        <p class="btn btn-comment">
            <i class='bx bxs-comment-detail'></i>
            <?php echo get_comments_number(); ?> Comments
        </p>
    </div>
    <div class="post-content">
        <?php
            the_content();
        ?>
    </div>
</article>

<?php
    if (comments_open() && !post_password_required()){
        comments_template();
	};
?>