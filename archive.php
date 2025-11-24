<?php
/**
 * Archive template.
 *
 * @package ResumeRefiner
 */

get_header();
?>
<section class="rr-page-hero">
    <div class="rr-container">
        <p class="eyebrow"><?php the_archive_title(); ?></p>
        <?php if ( $description = get_the_archive_description() ) : ?>
            <div class="rr-archive-description"><?php echo wp_kses_post( $description ); ?></div>
        <?php endif; ?>
    </div>
</section>
<section class="rr-section">
    <div class="rr-container rr-grid rr-grid--2">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'rr-article-card' ); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php echo esc_html( rr_theme_excerpt( 28 ) ); ?></p>
                    <a class="rr-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'resume-refiner' ); ?> ?</a>
                </article>
            <?php endwhile; ?>
            <div class="rr-pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e( 'No posts found.', 'resume-refiner' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
