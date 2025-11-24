<?php
/**
 * Header template.
 *
 * @package ResumeRefiner
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="rr-site-header">
    <div class="rr-container">
        <div class="rr-branding">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a class="rr-site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo( 'name' ); ?>
                </a>
            <?php endif; ?>
            <p class="rr-tagline"><?php bloginfo( 'description' ); ?></p>
        </div>
        <nav class="rr-nav" aria-label="<?php esc_attr_e( 'Primary', 'resume-refiner' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'rr-menu',
                    'fallback_cb'    => '__return_false',
                )
            );
            ?>
        </nav>
        <button class="rr-nav-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" data-nav-toggle="true">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="rr-mobile-menu" id="mobile-menu" aria-hidden="true">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'menu_class'     => 'rr-mobile-nav',
                'fallback_cb'    => '__return_false',
            )
        );
        ?>
    </div>
</header>
<main id="primary" class="rr-main">
