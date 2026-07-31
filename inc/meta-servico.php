<?php
/**
 * Serviço meta fields.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

add_action('init', 'mpe_register_servico_meta');

function mpe_register_servico_meta(): void
{
    $meta_fields = [
        '_mpe_hero_eyebrow'          => 'string',
        '_mpe_hero_lead'             => 'string',
        '_mpe_hero_image'            => 'string',
        '_mpe_hero_cta_primary_text' => 'string',
        '_mpe_hero_cta_primary_url'  => 'string',
        '_mpe_hero_cta_secondary_text' => 'string',
        '_mpe_hero_cta_secondary_url'  => 'string',
        '_mpe_card_image'            => 'string',
        '_mpe_card_excerpt'          => 'string',
    ];

    foreach ($meta_fields as $key => $type) {
        register_post_meta('servico', $key, [
            'show_in_rest'      => true,
            'single'            => true,
            'type'              => $type,
            'auth_callback'     => static fn (): bool => current_user_can('edit_posts'),
            'sanitize_callback' => 'sanitize_text_field',
        ]);
    }
}

add_action('add_meta_boxes', 'mpe_add_servico_meta_box');

function mpe_add_servico_meta_box(): void
{
    add_meta_box(
        'mpe_servico_hero',
        __('Hero do Serviço', 'marcela-por-elas'),
        'mpe_render_servico_meta_box',
        'servico',
        'normal',
        'high'
    );
}

function mpe_render_servico_meta_box(WP_Post $post): void
{
    wp_nonce_field('mpe_save_servico_meta', 'mpe_servico_meta_nonce');

    $fields = [
        '_mpe_hero_eyebrow'            => __('Eyebrow', 'marcela-por-elas'),
        '_mpe_hero_lead'               => __('Texto de apoio', 'marcela-por-elas'),
        '_mpe_hero_image'              => __('URL da imagem do hero (opcional)', 'marcela-por-elas'),
        '_mpe_hero_cta_primary_text'   => __('CTA primário — texto', 'marcela-por-elas'),
        '_mpe_hero_cta_primary_url'    => __('CTA primário — URL', 'marcela-por-elas'),
        '_mpe_hero_cta_secondary_text' => __('CTA secundário — texto', 'marcela-por-elas'),
        '_mpe_hero_cta_secondary_url'  => __('CTA secundário — URL', 'marcela-por-elas'),
        '_mpe_card_image'              => __('Imagem do card (carrossel)', 'marcela-por-elas'),
        '_mpe_card_excerpt'            => __('Resumo do card', 'marcela-por-elas'),
    ];

    echo '<table class="form-table" role="presentation">';
    foreach ($fields as $key => $label) {
        $value = get_post_meta($post->ID, $key, true);
        echo '<tr><th scope="row"><label for="' . esc_attr($key) . '">' . esc_html($label) . '</label></th>';
        echo '<td><input class="large-text" type="text" id="' . esc_attr($key) . '" name="' . esc_attr($key) . '" value="' . esc_attr((string) $value) . '"></td></tr>';
    }
    echo '</table>';
    echo '<p class="description">' . esc_html__('Use a imagem destacada como hero quando a URL acima estiver vazia.', 'marcela-por-elas') . '</p>';
}

add_action('save_post_servico', 'mpe_save_servico_meta');

function mpe_save_servico_meta(int $post_id): void
{
    if (! isset($_POST['mpe_servico_meta_nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['mpe_servico_meta_nonce'])), 'mpe_save_servico_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (! current_user_can('edit_post', $post_id)) {
        return;
    }

    $keys = [
        '_mpe_hero_eyebrow',
        '_mpe_hero_lead',
        '_mpe_hero_image',
        '_mpe_hero_cta_primary_text',
        '_mpe_hero_cta_primary_url',
        '_mpe_hero_cta_secondary_text',
        '_mpe_hero_cta_secondary_url',
        '_mpe_card_image',
        '_mpe_card_excerpt',
    ];

    foreach ($keys as $key) {
        if (! isset($_POST[$key])) {
            continue;
        }
        update_post_meta($post_id, $key, sanitize_text_field(wp_unslash((string) $_POST[$key])));
    }
}
