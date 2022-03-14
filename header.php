<?php
/**
 * This File Header Theme
 * 
 * @package Wordpress
 * @subpackage Killua Simple 
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme Style -->
    <?php
        wp_head();
    ?>
</head>

<body>

    <!-- Awal Header -->
    <header>
        <!-- Awal Topbar -->
        <div class="topbar-wrapper">
            <div class="container topbar-content">
                <div class="topbar">
                    <i class='icon-topbar bx bxs-contact'></i>
                    <span class="desc-topbar">Example@email.com | 021 xxxx xxxx</span>
                </div>
                <div class="topbar">
                    <i class='icon-topbar bx bxs-time'></i>
                    <span class="desc-topbar">Mon - Sat : 8.00 AM - 5.00 PM</span>
                </div>
            </div>
        </div>
        <!-- Akhir Topbar -->

        <!-- Awal Navbar -->
        <nav class="navbar-wrapper">
            <div class="container navbar">
                <i id="toggle-nav" class='btn navbar-toggler bx bx-menu'></i>
                <a href="<?php echo get_home_url(); ?>" class="navbar-brand">
                    <?php
                        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ){
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id);
                            ?>
                            <img class='logo' src="<?php echo $logo[0] ?>" alt='Logo' title='Site Logo'>
                            <?php
                        }else {
                            ?>
                            <h4 class="title" title="Site Title"><?php echo get_bloginfo( 'name' ); ?></h4>
                            <?php
                        }
                    ?>
                </a>
                <div class="navbar-collapse" id="navbar-mobile">
                    <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
                            )
                        );
                    ?>
                    <?php
                    get_search_form(
                        array(
                            'aria_label' => __( 'Search for:', 'killuasimple' ),
                        )
                    );
                    ?>
                </div>
            </div>
        </nav>
        <!-- Akhir Navbar -->
    </header>
    <!-- Akhir Header -->