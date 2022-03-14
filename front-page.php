<?php
    get_header();
?>

<!-- MAIN -->
<main>
    <?php 
        if ( has_post_thumbnail() ) {
            ?>
            <img class="jumbotron" src="<?php echo the_post_thumbnail_url(); ?>" alt="Jumbotron">
            <?php
        }
    ?>
    <div class="container">
        <article class="frontpage">
            <?php
                if (have_posts()){
                    while (have_posts()){
                        the_post();
                        the_content();
                    }
                }
            ?>
        </article>
    </div>
</main>

<?php
    get_footer();
?>