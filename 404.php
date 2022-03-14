<?php
/**
 * The template for displaying the 404 template in the Killua Custom Simple theme.
 *
 * @package WordPress
 * @subpackage Killua_Simple
 * @since Killua Custom Simple 1.0
 */

get_header();
?>

<!-- MAIN -->
<main>
    <article class="page404">
        <h2 style="font-size: 10em; font-weight:900;">404</h2>
        <h3 style="font-size: 3em; font-weight:700;">Page Not Found</h3>
        <p style="font-size: 14px; font-weight:500;">The page you are looking for doesn't exist or an other error occured. 
        <a href="<?php echo esc_url(home_url('/')); ?>">Go Home</a></p>
    </article>
</main>

<?php
get_footer();
?>
