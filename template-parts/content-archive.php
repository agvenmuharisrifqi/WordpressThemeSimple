<?php
/**
 * This File For Displaying Blog Post
 * 
 * @package Killua Simple
 * @subpackage index
 */
?>

<div class="post-wrapper">
    <?php 
        if ( has_post_thumbnail() ) {
            ?>
            <img class="post-thumbnail" src="<?php echo the_post_thumbnail_url(); ?>" alt="Post">
            <?php
        } else {
            ?>
            <img class="post-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/default_thumbnail.jpg" alt="Post">
            <?php
        }
    ?>
    <div class="post-content animate__animated animate__fadeIn animate__slower">
        <?php 
            if (has_category()){
        ?>
                <a class="post-category" href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><?php echo get_the_category()[0]->name; ?></a>
        <?php
            }else {
        ?>
                <a class="post-category" href="<?php echo the_permalink(); ?>">Uncategorized</a>
        <?php        
            }
        ?>    
        <a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p class="post-content"><?php killuasimple_the_excerpt(); ?></p>
        <a class="post-link" href="<?php the_permalink(); ?>">Read More »</a>
    </div>
</div>  