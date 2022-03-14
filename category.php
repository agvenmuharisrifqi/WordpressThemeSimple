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
                <span><?php echo get_the_category()[0]->name; ?></span>
            </p>
        </div>
        <h1 class="heading-page animate__animated animate__flipInX"><?php echo get_the_category()[0]->name; ?></h1>
        <article class="blogpage">
            <?php
                if (have_posts()){
                    while ( have_posts()){
                        the_post();
                        get_template_part('template-parts/content', 'archive');
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