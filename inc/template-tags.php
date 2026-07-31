<?php
/**
 * Template tags and helpers.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

function mpe_asset(string $path = ''): string
{
    return trailingslashit(MPE_THEME_URI) . ltrim($path, '/');
}

function mpe_instagram_url(): string
{
    return (string) get_theme_mod('mpe_instagram_url', 'https://www.instagram.com/marcelaporelas');
}

function mpe_tiktok_url(): string
{
    return (string) get_theme_mod('mpe_tiktok_url', 'https://www.tiktok.com/@marcelaporelas');
}

function mpe_whatsapp_number(): string
{
    return (string) get_theme_mod('mpe_whatsapp_number', '5511993346757');
}

function mpe_whatsapp_url(string $message = ''): string
{
    $url = 'https://wa.me/' . mpe_whatsapp_number();
    if ($message !== '') {
        $url .= '?text=' . rawurlencode($message);
    }
    return $url;
}

function mpe_email(): string
{
    return (string) get_theme_mod('mpe_email', 'contato@marcelaporelas.com.br');
}

function mpe_define_cta_url(): string
{
    $url = (string) get_theme_mod('mpe_define_cta_url', '');

    return $url !== '' ? $url : mpe_whatsapp_url('Olá Marcela, quero me inscrever no Programa DEFINE');
}

function mpe_curadoria_cta_url(): string
{
    $url = (string) get_theme_mod('mpe_curadoria_cta_url', '');

    return $url !== '' ? $url : mpe_whatsapp_url('Olá Marcela, quero receber a Curadoria Compra Certa');
}

function mpe_get_servico_meta(int $post_id, string $key, string $default = ''): string
{
    $value = get_post_meta($post_id, $key, true);
    return is_string($value) && $value !== '' ? $value : $default;
}

function mpe_get_servico_hero_image(int $post_id): string
{
    $custom = mpe_get_servico_meta($post_id, '_mpe_hero_image');
    if ($custom !== '') {
        return $custom;
    }

    if (has_post_thumbnail($post_id)) {
        $image = wp_get_attachment_image_url($post_id, 'mpe-hero');
        if ($image) {
            return $image;
        }
    }

    return '';
}

function mpe_is_current_nav(string $slug): bool
{
    if ($slug === 'home') {
        return is_front_page();
    }

    if ($slug === 'servicos') {
        return is_post_type_archive('servico') || is_singular('servico');
    }

    return is_page($slug);
}

function mpe_primary_menu_fallback(): void
{
    $items = [
        ['label' => __('Início', 'marcela-por-elas'), 'url' => home_url('/'), 'slug' => 'home'],
        ['label' => __('Sobre', 'marcela-por-elas'), 'url' => home_url('/sobre/'), 'slug' => 'sobre'],
        ['label' => __('Serviços', 'marcela-por-elas'), 'url' => get_post_type_archive_link('servico'), 'slug' => 'servicos', 'children' => mpe_get_servico_menu_items()],
        ['label' => __('Define', 'marcela-por-elas'), 'url' => home_url('/define/'), 'slug' => 'define'],
        ['label' => __('Curadoria', 'marcela-por-elas'), 'url' => home_url('/curadoria/'), 'slug' => 'curadoria'],
    ];

    echo '<ul class="nav__list">';
    foreach ($items as $item) {
        $active = mpe_is_current_nav($item['slug']) ? ' is-active' : '';
        if (! empty($item['children'])) {
            echo '<li class="nav__item nav__item--dropdown">';
            echo '<a href="' . esc_url($item['url']) . '" class="nav__link' . esc_attr($active) . '">' . esc_html($item['label']) . '</a>';
            echo '<ul class="nav__submenu">';
            foreach ($item['children'] as $child) {
                $child_active = get_queried_object_id() === (int) ($child['id'] ?? 0) ? ' is-active' : '';
                echo '<li><a href="' . esc_url($child['url']) . '" class="nav__sublink' . esc_attr($child_active) . '">' . esc_html($child['label']) . '</a></li>';
            }
            echo '</ul></li>';
            continue;
        }

        echo '<li><a href="' . esc_url($item['url']) . '" class="nav__link' . esc_attr($active) . '">' . esc_html($item['label']) . '</a></li>';
    }

    echo '<li class="nav__cta-item"><a href="' . esc_url(home_url('/contato/')) . '" class="btn btn--pill header__cta' . (is_page('contato') ? ' is-active' : '') . '">' . esc_html__('Contato', 'marcela-por-elas') . '</a></li>';
    echo '</ul>';
}

function mpe_get_servico_menu_items(): array
{
    $posts = get_posts([
        'post_type'      => 'servico',
        'posts_per_page' => 10,
        'orderby'        => 'menu_order title',
        'order'          => 'ASC',
        'post_status'    => 'publish',
    ]);

    $items = [];
    foreach ($posts as $post) {
        $items[] = [
            'id'    => $post->ID,
            'label' => get_the_title($post),
            'url'   => get_permalink($post),
        ];
    }

    return $items;
}

function mpe_service_has_light_hero(): bool
{
    if (! is_singular('servico')) {
        return false;
    }

    return get_post_field('post_name', get_queried_object_id()) !== 'mala-inteligente';
}

function mpe_render_social_nav(): void
{
    get_template_part('template-parts/header/social-links');
}

function mpe_render_footer_social(): void
{
    get_template_part('template-parts/footer/social-links');
}

function mpe_get_servicos_query(int $limit = -1, array $exclude = []): WP_Query
{
    return new WP_Query([
        'post_type'      => 'servico',
        'posts_per_page' => $limit,
        'post__not_in'   => $exclude,
        'orderby'        => 'menu_order title',
        'order'          => 'ASC',
        'post_status'    => 'publish',
    ]);
}

function mpe_get_related_servico_ids(int $post_id, int $limit = 4): array
{
    $all_ids = get_posts([
        'post_type'      => 'servico',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order title',
        'order'          => 'ASC',
        'post_status'    => 'publish',
        'fields'         => 'ids',
    ]);

    if (count($all_ids) <= 1) {
        return [];
    }

    $current_index = array_search($post_id, $all_ids, true);
    if ($current_index === false) {
        return array_slice(array_values(array_diff($all_ids, [$post_id])), 0, $limit);
    }

    $related = [];
    $total   = count($all_ids);

    for ($offset = 1; $offset <= $total && count($related) < $limit; $offset++) {
        $candidate = $all_ids[($current_index + $offset) % $total];
        if ($candidate !== $post_id) {
            $related[] = $candidate;
        }
    }

    return $related;
}
