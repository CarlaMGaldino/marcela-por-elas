<?php
/**
 * Enqueue scripts and styles.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', 'mpe_enqueue_assets');

function mpe_enqueue_assets(): void
{
    $version = MPE_THEME_VERSION;

    wp_enqueue_style(
        'mpe-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;1,9..144,400&display=swap',
        [],
        null
    );

    wp_enqueue_style('mpe-fonts-local', mpe_asset('css/fonts.css'), [], $version);
    wp_enqueue_style('mpe-reset', mpe_asset('css/reset.css'), ['mpe-fonts-local'], $version);
    wp_enqueue_style('mpe-variables', mpe_asset('css/variables.css'), ['mpe-reset'], $version);
    wp_enqueue_style('mpe-styles', mpe_asset('css/styles.css'), ['mpe-variables'], $version);
    wp_enqueue_style('mpe-theme', get_stylesheet_uri(), ['mpe-styles'], $version);

    wp_enqueue_script('mpe-config', mpe_asset('js/config.js'), [], $version, true);
    wp_localize_script('mpe-config', 'MPE_SITE', [
        'siteUrl' => home_url('/'),
        'themeUrl' => MPE_THEME_URI,
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'ctaDefineUrl' => mpe_define_cta_url(),
        'ctaCuradoriaUrl' => mpe_curadoria_cta_url(),
    ]);

    wp_enqueue_script('mpe-main', mpe_asset('js/main.js'), ['mpe-config'], $version, true);

    if (is_page('contato')) {
        wp_enqueue_script(
            'mpe-contact-form',
            mpe_asset('js/contact-form.js'),
            [],
            $version,
            true
        );
        wp_localize_script('mpe-contact-form', 'MPE_CONTACT', [
            'whatsapp' => mpe_whatsapp_url(),
        ]);
    }
}

add_action('wp_head', 'mpe_preload_hero_image', 1);

function mpe_preload_hero_image(): void
{
    if (is_singular('servico')) {
        $image = mpe_get_servico_hero_image(get_the_ID());
        if ($image) {
            echo '<link rel="preload" href="' . esc_url($image) . '" as="image">' . "\n";
        }
        return;
    }

    if (is_front_page()) {
        echo '<link rel="preload" href="' . esc_url(mpe_asset('assets/imgs/banners/banner-marcela-home-principal.jpg')) . '" as="image">' . "\n";
    }
}
