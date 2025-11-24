<?php
/**
 * Front page template.
 *
 * @package ResumeRefiner
 */

get_header();
?>
<section class="rr-hero">
    <div class="rr-container">
        <div class="rr-hero__content">
            <p class="eyebrow">Unlock Powerful Resume Tools</p>
            <h1>Easily upload your resume and tailor it to specific roles in minutes.</h1>
            <p class="lead">Provide the job description, feed a custom AI prompt, and our open API refines every bullet with the right skills, keywords, and tone.</p>
            <ul class="rr-hero__bullets">
                <li>Support for DOCX, TXT, and pasted content</li>
                <li>Automatic keyword alignment based on job posts</li>
                <li>Instant export as PDF, DOCX, or TXT</li>
                <li>Guided prompt builder for niche roles</li>
            </ul>
            
            <a class="rr-button rr-button--xl" href="https://resume-refiner.onrender.com/" target="_blank" rel="noopener">Refine Now</a>
            <div class="rr-hero__meta">
                <div>
                    <span>2.4M+</span>
                    <p>Resumes optimized</p>
                </div>
                <div>
                    <span>98%</span>
                    <p>Keyword match accuracy</p>
                </div>
                <div>
                    <span>&lt;90s</span>
                    <p>Average refinement time</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="rr-section rr-section--cards">
    <div class="rr-container">
        <div class="rr-section__header">
            <p class="eyebrow">Context aware editing</p>
            <h2>Upload in any format and tailor resumes to job-specific keywords.</h2>
            <p>The refinement engine ingests DOCX, TXT, or raw text, compares it to the job description, and realigns every bullet with proven phrasing.</p>
        </div>
        <div class="rr-grid rr-grid--3">
            <article class="rr-card">
                <h3>DOCX & TXT ingestion</h3>
                <p>Extracts content while preserving bullet structure and relevant formatting.</p>
            </article>
            <article class="rr-card">
                <h3>Job post alignment</h3>
                <p>Detects keywords, seniority cues, team size, and must-have skills from your description.</p>
            </article>
            <article class="rr-card">
                <h3>AI skill suggestions</h3>
                <p>Surfaces quantifiable impact statements to ensure each role stands out.</p>
            </article>
        </div>
    </div>
</section>
<section class="rr-section rr-section--timeline">
    <div class="rr-container">
        <div class="rr-section__header">
            <p class="eyebrow">Built-in workflow</p>
            <h2>Guide the AI with prompts or automation.</h2>
            <p>Decide exactly how the resume should read—from industry tone to leadership emphasis.</p>
        </div>
        <ol class="rr-timeline">
            <li>
                <span class="step">1</span>
                <h3>Input Job Description</h3>
                <p>Paste a posting or integrate via ATS to capture responsibilities and success metrics.</p>
            </li>
            <li>
                <span class="step">2</span>
                <h3>Refine with Custom Prompts</h3>
                <p>Tell the AI to emphasize achievements, seniority, or niche technical stacks.</p>
            </li>
            <li>
                <span class="step">3</span>
                <h3>Auto-optimize with API</h3>
                <p>Use the open API to run bulk refinements and track keyword coverage programmatically.</p>
            </li>
            <li>
                <span class="step">4</span>
                <h3>Download</h3>
                <p>Export polished resumes as PDF, DOCX, and TXT, ready for any application portal.</p>
            </li>
        </ol>
    </div>
</section>
<section class="rr-section rr-section--downloads">
    <div class="rr-container">
        <div class="rr-section__header">
            <p class="eyebrow">Seamless delivery</p>
            <h2>Download refined resumes in every format hiring teams expect.</h2>
        </div>
        <div class="rr-grid rr-grid--3">
            <article class="rr-card rr-card--accent">
                <h3>PDF</h3>
                <p>Locked-in formatting for applicant tracking uploads.</p>
            </article>
            <article class="rr-card rr-card--accent">
                <h3>DOCX</h3>
                <p>Edit-ready files for collaborative feedback.</p>
            </article>
            <article class="rr-card rr-card--accent">
                <h3>TXT</h3>
                <p>Plain-text versions for legacy portals and quick updates.</p>
            </article>
        </div>
    </div>
</section>
<section class="rr-section rr-section--posts">
    <div class="rr-container">
        <div class="rr-section__header">
            <p class="eyebrow">Insights</p>
            <h2>Latest resume intelligence</h2>
        </div>
        <div class="rr-grid rr-grid--3">
            <?php
            $rr_posts = new WP_Query(
                array(
                    'posts_per_page' => 3,
                )
            );
            if ( $rr_posts->have_posts() ) :
                while ( $rr_posts->have_posts() ) :
                    $rr_posts->the_post();
                    ?>
                    <article class="rr-post-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'rr-card' ); ?>
                            <?php endif; ?>
                            <div>
                                <p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo esc_html( rr_theme_excerpt( 22 ) ); ?></p>
                                <span class="rr-link">Read story &rarr;</span>
                            </div>
                        </a>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p><?php esc_html_e( 'Publish your first post to showcase insights.', 'resume-refiner' ); ?></p>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>
<section class="rr-section rr-section--faq">
    <div class="rr-container">
        <div class="rr-section__header">
            <p class="eyebrow">FAQ</p>
            <h2>Everything you need to know.</h2>
        </div>
        <div class="rr-accordion">
            <?php
            $faqs = array(
                array(
                    'q' => __( 'Can I upload multiple resumes at once?', 'resume-refiner' ),
                    'a' => __( 'Yes, import a folder of DOCX or TXT files and process them individually or via the API.', 'resume-refiner' ),
                ),
                array(
                    'q' => __( 'Does the AI rewrite my resume?', 'resume-refiner' ),
                    'a' => __( 'It enhances what you already have, adding metrics, targeted keywords, and style consistent with your prompt.', 'resume-refiner' ),
                ),
                array(
                    'q' => __( 'How does the download work?', 'resume-refiner' ),
                    'a' => __( 'Once satisfied, export polished PDF, DOCX, and TXT files, all kept in sync.', 'resume-refiner' ),
                ),
            );
            foreach ( $faqs as $index => $faq ) :
                ?>
                <article class="rr-accordion__item">
                    <button class="rr-accordion__trigger" aria-expanded="false">
                        <span><?php echo esc_html( $faq['q'] ); ?></span>
                        <span class="icon">+</span>
                    </button>
                    <div class="rr-accordion__content">
                        <p><?php echo esc_html( $faq['a'] ); ?></p>
                    </div>
                </article>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
<?php
get_footer();