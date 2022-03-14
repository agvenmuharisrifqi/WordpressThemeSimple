<?php
/**
 * This File For Displaying Single Post
 * 
 * @package Killua Simple
 */
?>

<?php
    get_header();
?>

<!-- Awal Main -->
<main>
    <div class="container">
        <div class="breadcrumb">
            <p>
                <a href="<?php echo home_url(); ?>">Home</a>
                »
                <a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><?php echo get_the_category()[0]->name; ?></a>
                »
                <span><?php the_title(); ?></span>
            </p>
        </div>
        <?php
        if (have_posts()){
            while (have_posts()){
                the_post();
                get_template_part('template-parts/content', 'single');
            }
        }
        ?>
    </div>
</main>

<!-- Akhir Main -->

<?php
    get_footer();
?>