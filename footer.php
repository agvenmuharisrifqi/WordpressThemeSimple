<!-- Awal Footer -->
<footer class="footer">
        <div class="container">
            <?php
                if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3')){
            ?>
            <div class="subfooter1">
                <div class="subfooter1-1">
                    <?php
                        if (is_active_sidebar('footer-1')){
                            dynamic_sidebar('footer-1');
                        }
                    ?>
                </div>
                <div class="subfooter1-2">
                    <?php
                        if (is_active_sidebar('footer-2')){
                            dynamic_sidebar('footer-2');
                        }
                    ?>
                </div>
                <div class="subfooter1-3">
                    <?php
                        if (is_active_sidebar('footer-3')){
                            dynamic_sidebar('footer-3');
                        }
                    ?>
                </div>
            </div>
            <?php
                }
            ?>
            <div class="subfooter2">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'footer',
                            'container' => '',
                            'theme_location' => 'footer',
                            'items_wrap' => '<ul class="menu-footer">%3$s</ul>'
                        )
                    );
                ?>
                <div class="copyright-footer">
                    &copy; 2022 Copyright
                    <a href="<?php echo home_url(); ?>"> Killua Developer, </a>
                    All Right Reserved.
                    <a href="<?php echo home_url(); ?>"> Privacy Policy </a>
                    |
                    <a href="<?php echo home_url(); ?>"> Terms and Conditions </a>
                    |
                    <a href="<?php echo home_url(); ?>"> Site Map</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->


    <?php
        wp_footer();
    ?>
</body>

</html>