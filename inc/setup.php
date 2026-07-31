<?php
/**
 * Theme setup.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', 'mpe_setup');

function mpe_setup(): void
{
    load_theme_textdomain('marcela-por-elas', MPE_THEME_DIR . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
    add_theme_support('custom-logo', [
        'height'      => 48,
        'width'       => 180,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');

    add_image_size('mpe-hero', 1200, 1600, true);
    add_image_size('mpe-card', 800, 600, true);

    register_nav_menus([
        'primary' => __('Menu Principal', 'marcela-por-elas'),
        'footer'  => __('Menu Rodapé', 'marcela-por-elas'),
    ]);
}

add_filter('body_class', 'mpe_body_class');

function mpe_body_class(array $classes): array
{
    if (is_front_page()) {
        return $classes;
    }

    if (is_singular('servico')) {
        $classes[] = 'page-service';
    } elseif (is_post_type_archive('servico')) {
        $classes[] = 'page-service';
    } elseif (is_page('sobre')) {
        $classes[] = 'page-about';
    } elseif (is_page('contato')) {
        $classes[] = 'page-contact';
    } elseif (is_page('define')) {
        $classes[] = 'page-define';
    } elseif (is_page('curadoria')) {
        $classes[] = 'page-curadoria';
    }

    return $classes;
}

add_filter('document_title_separator', static fn (): string => '|');

add_filter('excerpt_length', static fn (): int => 28);
add_filter('excerpt_more', static fn (): string => '&hellip;');
