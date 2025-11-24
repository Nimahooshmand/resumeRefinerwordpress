<?php
/**
 * Page template.
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
                <p class="eyebrow"><?php esc_html_e( 'Resume Refiner', 'resume-refiner' ); ?></p>
                <h1><?php the_title(); ?></h1>
            </div>
        </section>
        <section class="rr-section rr-section--content">
            <div class="rr-container">
                <?php the_content(); ?>
            </div>
        </section>
        <?php
    endwhile;
endif;

get_footer();
