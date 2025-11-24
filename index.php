<?php
/**
 * Default index template.
 *
 * @package ResumeRefiner
 */

get_header();
?>
<section class="rr-page-hero">
    <div class="rr-container">
        <p class="eyebrow">Insights</p>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </div>
</section>
<section class="rr-section">
    <div class="rr-container rr-grid rr-grid--2">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'rr-article-card' ); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" class="rr-article-card__thumb">
                            <?php the_post_thumbnail( 'rr-card' ); ?>
                        </a>
                    <?php endif; ?>
                    <div>
                        <p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo esc_html( rr_theme_excerpt( 32 ) ); ?></p>
                        <a class="rr-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continue reading', 'resume-refiner' ); ?> &rarr;</a>
                    </div>
                </article>
            <?php endwhile; ?>
            <div class="rr-pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e( 'No posts yet. Start sharing your resume insights.', 'resume-refiner' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
