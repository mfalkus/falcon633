<?php
/**
 * @package Falcon633
 */
?>
	</div><!-- .site-content -->

    <hr />

	<footer class="footer-wrapper" role="contentinfo">
        <div class="footer-top">
            <a class="falcon" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <h1>Falkus<em>.co</em></h1>
            </a>
        </div>

        <p class="micro">
            <?php bloginfo('description'); ?>
            &dash; Copyright &copy; <?php echo date("Y"); ?>
        </p>
	</footer>
</div><!-- total-warpper -->

<?php wp_footer(); ?>
</body>
</html>
