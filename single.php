<?php
/**
 * Single post template.
 *
 * @package ResumeRefiner
 */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>
        <section class="rr-page-hero">
            <div class="rr-container">
                <p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
                <h1><?php the_title(); ?></h1>
            </div>
        </section>
        <section class="rr-section rr-section--content">
            <div class="rr-container">
                <?php
                if ( has_post_thumbnail() ) {
                    echo '<div class="rr-single-thumb">';
                    the_post_thumbnail( 'large' );
                    echo '</div>';
                }

                the_content();
                wp_link_pages();
                ?>
            </div>
        </section>
        <section class="rr-section rr-section--content rr-section--share">
            <div class="rr-container">
                <h2><?php esc_html_e( 'Share this insight', 'resume-refiner' ); ?></h2>
                <div class="rr-share">
                    <a href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode( get_permalink() ); ?>&text=<?php echo rawurlencode( get_the_title() ); ?>" target="_blank" rel="noopener">Twitter</a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" rel="noopener">LinkedIn</a>
                </div>
            </div>
        </section>
        <?php
    endwhile;
endif;

get_footer();
