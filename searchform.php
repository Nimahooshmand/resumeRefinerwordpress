<?php
/**
 * Search form partial.
 *
 * @package ResumeRefiner
 */
?>
<form role="search" method="get" class="rr-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'resume-refiner' ); ?></span>
        <input type="search" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="Search resume tips" />
    </label>
    <button class="rr-button" type="submit"><?php esc_html_e( 'Search', 'resume-refiner' ); ?></button>
</form>