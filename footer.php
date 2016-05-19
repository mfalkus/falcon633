<?php
/**
 * @package Falcon633
 */
?>
<footer class="footer-wrapper" role="contentinfo">
    <div class="content-prep">
        <div class="footer-top">
            <a class="falcon falcon--dark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <h1>Falkus<em>.co</em></h1>
            </a>

            <?php wp_nav_menu( array(
                'container_class'   => 'menu-header',
                'menu_class'        => 'nav nav--main nav--footer',
                'theme_location'    => 'footer_nav'
            ) ); ?>
        </div>

        <div class="footer-bottom">
            <hr class="rule" />
            <p class="micro">
                <?php bloginfo('description'); ?>
                &dash; Copyright &copy; <?php echo date("Y"); ?>
            </p>
        </div>
    </div>
</footer>

</div><!-- total-warpper -->

<?php wp_footer(); ?>
</body>
</html>
