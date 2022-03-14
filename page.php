<?php
/**
 * This File For Displaying Page
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
                <span><?php echo the_title(); ?></span>
            </p>
        </div>
        <h1 class="heading-page animate__animated animate__flipInX"><?php echo the_title(); ?></h1>
        <article class="singlepage">
            <?php
                if (have_posts()){
                    while ( have_posts()){
                        the_post();
                        get_template_part('template-parts/content', 'page');
                    }
                }
            ?>
        </article>
    </div>
</main>
<!-- Akhir Main -->
<?php
    get_footer();
?>