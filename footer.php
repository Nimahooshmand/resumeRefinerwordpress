<?php
/**
 * Footer template.
 *
 * @package ResumeRefiner
 */
?>
</main>
<footer class="rr-site-footer" id="get-started">
    <div class="rr-container rr-footer-cta">
        <div>
            <p class="eyebrow">Launch in minutes</p>
            <h2>Ensure every resume is ready to impress hiring teams.</h2>
            <p>Upload DOCX, TXT, or pasted text, enrich it with AI prompts, and export polished versions in PDF, DOCX, and TXT formats.</p>
        </div>
        <div class="rr-footer-cta__actions">
            <a class="rr-button" href="<?php echo esc_url( site_url( '/contact' ) ); ?>">Book Demo</a>
            <a class="rr-button rr-button--ghost" href="<?php echo esc_url( site_url( '/docs' ) ); ?>">View API Docs</a>
        </div>
    </div>
    <div class="rr-container rr-footer-widgets">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <?php dynamic_sidebar( 'footer-1' ); ?>
        <?php endif; ?>
        <div class="rr-footer-meta">
            <h3 class="widget-title">Resources</h3>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'rr-footer-menu',
                    'fallback_cb'    => '__return_false',
                )
            );
            ?>
        </div>
        <div class="rr-footer-meta">
            <h3 class="widget-title">Contact</h3>
            <ul>
                <li>support@resumerefiner.ai</li>
                <li>+1 (555) 867-5309</li>
                <li>123 Resume Lane, Remote City</li>
            </ul>
        </div>
    </div>
    <div class="rr-container rr-footer-bottom">
        <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Resume Refiner. <?php esc_html_e( 'All rights reserved.', 'resume-refiner' ); ?></p>
        <div class="rr-footer-legal">
            <a href="<?php echo esc_url( site_url( '/privacy-policy' ) ); ?>">Privacy</a>
            <a href="<?php echo esc_url( site_url( '/terms' ) ); ?>">Terms</a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>