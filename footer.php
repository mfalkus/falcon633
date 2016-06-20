<?php
/**
 * @package Falcon633
 */
?>
<footer class="footer-wrapper" role="contentinfo">
    <div class="content-text">
        <div class="footer-top">
            <a class="falcon falcon--dark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php echo site_heading_tag() ?>
            </a>

            <?php wp_nav_menu( array(
                'container_class'   => 'menu-header',
                'menu_class'        => 'nav nav--main nav--footer',
                'theme_location'    => 'footer_nav'
            ) ); ?>
        </div>

        <div class="footer-bottom">
            <hr class="rule" />
            <p class="milli">
                <?php bloginfo('description'); ?>
                &dash; Copyright &copy; <?php echo date("Y"); ?>
            </p>
        </div>
    </div>
</footer>

</div><!-- total-warpper -->

<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                smallHeadStart = 40,
                header = document.getElementById("header");

            if (distanceY > smallHeadStart) {
                header.classList.add("smaller");
            } else {
                header.classList.remove("smaller");
            }
        });

        var mobile_trigger = document.getElementById('menu_trigger');
        mobile_trigger.addEventListener('click', function(e) {
            var mobile_menu = document.getElementById("mobile_menu_wrapper");
            mobile_menu.classList.toggle('on');
            return false;
        });
    }
    window.onload = init();
</script>
<?php wp_footer(); ?>
</body>
</html>
