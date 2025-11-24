<?php
/**
 * 404 template.
 *
 * @package ResumeRefiner
 */

get_header();
?>
<section class="rr-404 rr-section">
    <div class="rr-container">
        <p class="eyebrow">404</p>
        <h1><?php esc_html_e( 'The page you were looking for is refining elsewhere.', 'resume-refiner' ); ?></h1>
        <p><?php esc_html_e( 'Try starting over from the homepage or search for resume tips.', 'resume-refiner' ); ?></p>
        <div class="rr-404__actions">
            <a class="rr-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'resume-refiner' ); ?></a>
            <?php get_search_form(); ?>
        </div>
    </div>
</section>
<?php
get_footer();