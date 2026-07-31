<?php
/**
 * Custom Post Type: Serviços.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

add_action('init', 'mpe_register_servico_cpt');

function mpe_register_servico_cpt(): void
{
    $labels = [
        'name'                  => _x('Serviços', 'Post type general name', 'marcela-por-elas'),
        'singular_name'         => _x('Serviço', 'Post type singular name', 'marcela-por-elas'),
        'menu_name'             => _x('Serviços', 'Admin Menu text', 'marcela-por-elas'),
        'name_admin_bar'        => _x('Serviço', 'Add New on Toolbar', 'marcela-por-elas'),
        'add_new'               => __('Adicionar novo', 'marcela-por-elas'),
        'add_new_item'          => __('Adicionar novo serviço', 'marcela-por-elas'),
        'new_item'              => __('Novo serviço', 'marcela-por-elas'),
        'edit_item'             => __('Editar serviço', 'marcela-por-elas'),
        'view_item'             => __('Ver serviço', 'marcela-por-elas'),
        'all_items'             => __('Todos os serviços', 'marcela-por-elas'),
        'search_items'          => __('Buscar serviços', 'marcela-por-elas'),
        'not_found'             => __('Nenhum serviço encontrado.', 'marcela-por-elas'),
        'not_found_in_trash'    => __('Nenhum serviço na lixeira.', 'marcela-por-elas'),
        'featured_image'        => __('Imagem do hero', 'marcela-por-elas'),
        'set_featured_image'    => __('Definir imagem do hero', 'marcela-por-elas'),
        'remove_featured_image' => __('Remover imagem do hero', 'marcela-por-elas'),
        'use_featured_image'    => __('Usar como imagem do hero', 'marcela-por-elas'),
    ];

    register_post_type('servico', [
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'query_var'           => true,
        'rewrite'             => ['slug' => 'servicos', 'with_front' => false],
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-portfolio',
        'supports'            => ['title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes'],
    ]);
}

add_filter('post_type_link', 'mpe_servico_permalink', 10, 2);

function mpe_servico_permalink(string $post_link, WP_Post $post): string
{
    if ($post->post_type !== 'servico') {
        return $post_link;
    }

    return home_url(user_trailingslashit('servicos/' . $post->post_name));
}

add_action('pre_get_posts', 'mpe_servico_archive_order');

function mpe_servico_archive_order(WP_Query $query): void
{
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }

    if ($query->is_post_type_archive('servico')) {
        $query->set('orderby', 'menu_order title');
        $query->set('order', 'ASC');
    }
}
