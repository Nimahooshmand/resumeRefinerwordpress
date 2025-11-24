<?php
/**
 * Search results template.
 *
 * @package ResumeRefiner
 */

get_header();
?>
<section class="rr-page-hero">
    <div class="rr-container">
        <p class="eyebrow"><?php esc_html_e( 'Search results for', 'resume-refiner' ); ?></p>
        <h1><?php echo esc_html( get_search_query() ); ?></h1>
        <?php get_search_form(); ?>
    </div>
</section>
<section class="rr-section">
    <div class="rr-container rr-grid rr-grid--2">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'rr-article-card' ); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo esc_html( rr_theme_excerpt( 28 ) ); ?></p>
                </article>
            <?php endwhile; ?>
            <div class="rr-pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e( 'We could not find results. Try refining the keywords.', 'resume-refiner' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();