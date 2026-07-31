<?php
/**
 * Theme activation tasks.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

add_action('after_switch_theme', 'mpe_on_theme_activation');

function mpe_on_theme_activation(): void
{
    mpe_register_servico_cpt();
    flush_rewrite_rules();
    update_option('mpe_needs_setup', 1);
}

add_action('admin_init', 'mpe_maybe_run_setup');

function mpe_maybe_run_setup(): void
{
    if (! get_option('mpe_needs_setup')) {
        return;
    }

    mpe_seed_content();
    delete_option('mpe_needs_setup');
}

function mpe_seed_content(): void
{
    $pages = [
        'sobre'     => ['title' => 'Sobre', 'template' => 'page-templates/page-sobre.php'],
        'contato'   => ['title' => 'Contato', 'template' => 'page-templates/page-contato.php'],
        'define'    => ['title' => 'Define', 'template' => 'page-templates/page-define.php'],
        'curadoria' => ['title' => 'Curadoria', 'template' => 'page-templates/page-curadoria.php'],
    ];

    foreach ($pages as $slug => $data) {
        if (get_page_by_path($slug)) {
            continue;
        }

        $page_id = wp_insert_post([
            'post_title'   => $data['title'],
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ]);

        if ($page_id && ! is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', $data['template']);
        }
    }

    if (! get_page_by_path('home')) {
        $front_id = wp_insert_post([
            'post_title'  => 'Início',
            'post_name'   => 'home',
            'post_status' => 'publish',
            'post_type'   => 'page',
        ]);

        if ($front_id && ! is_wp_error($front_id)) {
            update_option('show_on_front', 'page');
            update_option('page_on_front', $front_id);
        }
    }

    if (! get_posts(['post_type' => 'servico', 'name' => 'mala-inteligente', 'posts_per_page' => 1])) {
        $hero_image = mpe_asset('assets/imgs/marcela-novo/marcela-mala-inteligente-hero.jpg');

        $servico_id = wp_insert_post([
            'post_title'   => 'Mala Inteligente',
            'post_name'    => 'mala-inteligente',
            'post_status'  => 'publish',
            'post_type'    => 'servico',
            'post_excerpt' => 'Planejamento de looks coordenados e fotografados conforme o roteiro e clima da sua viagem. Sem peso excessivo.',
            'menu_order'   => 1,
        ]);

        if ($servico_id && ! is_wp_error($servico_id)) {
            update_post_meta($servico_id, '_mpe_hero_eyebrow', 'Praticidade & Sofisticação');
            update_post_meta($servico_id, '_mpe_hero_lead', 'Viaje sem o peso de malas excessivas ou da indecisão diária. Planejamento de looks coordenados e fotografados sob medida para o roteiro, clima e eventos do seu destino.');
            update_post_meta($servico_id, '_mpe_hero_image', $hero_image);
            update_post_meta($servico_id, '_mpe_hero_cta_primary_text', 'Planejar Mala');
            update_post_meta($servico_id, '_mpe_hero_cta_primary_url', mpe_whatsapp_url('Olá Marcela, gostaria de saber mais sobre o serviço de Mala Inteligente'));
            update_post_meta($servico_id, '_mpe_hero_cta_secondary_text', 'Tirar Dúvidas');
            update_post_meta($servico_id, '_mpe_hero_cta_secondary_url', home_url('/contato/'));
            update_post_meta($servico_id, '_mpe_card_image', mpe_asset('assets/imgs/marcela-novo/marcela-mala-inteligente-hero.jpg'));
            update_post_meta($servico_id, '_mpe_card_excerpt', 'Planejamento de looks coordenados e fotografados conforme o roteiro e clima da sua viagem. Sem peso excessivo.');
        }
    }

    flush_rewrite_rules();
}
