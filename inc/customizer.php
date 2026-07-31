<?php
/**
 * Theme Customizer settings.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

add_action('customize_register', 'mpe_customize_register');

function mpe_customize_register(WP_Customize_Manager $wp_customize): void
{
    $wp_customize->add_section('mpe_contact', [
        'title'    => __('Contato & Redes', 'marcela-por-elas'),
        'priority' => 30,
    ]);

    $settings = [
        'mpe_whatsapp_number' => ['default' => '5511993346757', 'label' => __('WhatsApp (apenas números)', 'marcela-por-elas'), 'sanitize' => 'sanitize_text_field'],
        'mpe_email'           => ['default' => 'contato@marcelaporelas.com.br', 'label' => __('E-mail', 'marcela-por-elas'), 'sanitize' => 'sanitize_email'],
        'mpe_instagram_url'   => ['default' => 'https://www.instagram.com/marcelaporelas', 'label' => __('Instagram URL', 'marcela-por-elas'), 'sanitize' => 'esc_url_raw'],
        'mpe_tiktok_url'      => ['default' => 'https://www.tiktok.com/@marcelaporelas', 'label' => __('TikTok URL', 'marcela-por-elas'), 'sanitize' => 'esc_url_raw'],
        'mpe_define_cta_url'  => ['default' => '', 'label' => __('URL do CTA Define (vazio = WhatsApp)', 'marcela-por-elas'), 'sanitize' => 'esc_url_raw'],
        'mpe_curadoria_cta_url' => ['default' => '', 'label' => __('URL do CTA Curadoria (vazio = WhatsApp)', 'marcela-por-elas'), 'sanitize' => 'esc_url_raw'],
    ];

    foreach ($settings as $id => $config) {
        $wp_customize->add_setting($id, [
            'default'           => $config['default'],
            'sanitize_callback' => $config['sanitize'],
        ]);

        $wp_customize->add_control($id, [
            'label'   => $config['label'],
            'section' => 'mpe_contact',
            'type'    => 'text',
        ]);
    }
}
