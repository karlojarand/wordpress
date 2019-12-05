<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package responsiveness
 */

?>

</div><!-- #content -->

<a href="#" class="topbutton"></a><!-- Back to top button -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="row"><!-- Start Foundation row -->

        <?php get_sidebar( 'footer' ); ?>

    </div><!-- End Foundation row -->



    <div class="copyright small-12 columns text-center">
    <?php echo '&copy; '.date_i18n(__('Y','responsiveness')); ?> <?php bloginfo( 'name' ); ?> | <?php esc_html_e( "Powered by", 'responsiveness' ); ?> <a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>"><?php esc_html_e( "WordPress", 'responsiveness' ); ?></a> | <?php esc_html_e( 'Theme by', 'responsiveness' ); ?> <a href="<?php echo esc_url( 'http://madeforwriters.com/' ); ?>"><?php esc_html_e( 'MadeForWriters','responsiveness' ); ?></a>
</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
