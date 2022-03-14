<?php
    get_header();
?>

<!-- Awal Main -->
<?php
global $wp_query;
?>
<main>
    <div class="container">
        <div class="breadcrumb">
            <p>
                <a href="<?php echo home_url(); ?>">Home</a>
                »
                <span><?php echo $wp_query->found_posts; ?> <?php _e('Search results for', 'killuasimple') ?> "<?php the_search_query(); ?>"</span>
            </p>
        </div>
        <h1 class="heading-page animate__animated animate__flipInX">
            <?php echo $wp_query->found_posts; ?> <?php _e('Search results for', 'killuasimple') ?> "<?php the_search_query(); ?>"
        </h1>
        <article class="blogpage">
            <?php
                if (have_posts()){
                    while ( have_posts()){
                        the_post();
                        get_template_part('template-parts/content', 'archive');
                    }
                } else {
                    echo "<p>The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.</p>";
                }
            ?>
        </article>
    </div>
</main>
<!-- Akhir Main -->

<?php
    get_footer();
?>