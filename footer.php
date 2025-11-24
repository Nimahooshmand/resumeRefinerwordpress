<?php
/**
 * Footer template.
 *
 * @package ResumeRefiner
 */
?>
</main>
<footer class="rr-site-footer" id="get-started">
    <div class="rr-container rr-footer-widgets">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <?php dynamic_sidebar( 'footer-1' ); ?>
        <?php endif; ?>
    </div>
    <div class="rr-container rr-footer-bottom">
        <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Resume Refiner. <?php esc_html_e( 'All rights reserved.', 'resume-refiner' ); ?></p>
        <a class="rr-footer-contact" href="mailto:info@resumerefiner.online">info@resumerefiner.online</a>
        <div class="rr-footer-legal">
            <a href="<?php echo esc_url( site_url( '/privacy-policy' ) ); ?>">Privacy</a>
            <a href="<?php echo esc_url( site_url( '/terms' ) ); ?>">Terms</a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
