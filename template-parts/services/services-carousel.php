<?php
/**
 * Horizontal services carousel with dynamic CPT cards.
 *
 * @package MarcelaPorElas
 *
 * @var array $args {
 *     @type string $section_id
 *     @type string $section_class
 *     @type string $title_id
 *     @type string $eyebrow
 *     @type string $title
 *     @type string $lead
 *     @type int    $limit
 *     @type int[]  $exclude
 * }
 */

declare(strict_types=1);

$section_id    = $args['section_id'] ?? 'servicos';
$section_class = $args['section_class'] ?? 'section section--cream services-more-section';
$title_id      = $args['title_id'] ?? 'services-title';
$eyebrow       = $args['eyebrow'] ?? __('Soluções de Estilo & Varejo', 'marcela-por-elas');
$title         = $args['title'] ?? __('Serviços', 'marcela-por-elas');
$lead          = $args['lead'] ?? __('Seja de forma individual ou corporativa, encontre a assessoria de moda perfeita para você ou sua empresa.', 'marcela-por-elas');
$limit         = isset($args['limit']) ? (int) $args['limit'] : -1;
$exclude       = $args['exclude'] ?? [];

$services_query = mpe_get_servicos_query($limit, $exclude);

if (! $services_query->have_posts()) {
    return;
}
?>
<section id="<?php echo esc_attr($section_id); ?>" class="<?php echo esc_attr($section_class); ?>" aria-labelledby="<?php echo esc_attr($title_id); ?>">
  <div class="services-row reveal">
    <div class="services-intro">
      <span class="eyebrow eyebrow--sage"><?php echo esc_html($eyebrow); ?></span>
      <h2 id="<?php echo esc_attr($title_id); ?>" class="section-heading"><?php echo esc_html($title); ?></h2>
      <p class="section-lead"><?php echo esc_html($lead); ?></p>
      <?php if ($services_query->post_count > 1) : ?>
        <div class="carousel-nav-buttons">
          <button class="carousel-btn carousel-btn--prev" aria-label="<?php esc_attr_e('Serviço anterior', 'marcela-por-elas'); ?>">←</button>
          <button class="carousel-btn carousel-btn--next" aria-label="<?php esc_attr_e('Próximo serviço', 'marcela-por-elas'); ?>">→</button>
        </div>
      <?php endif; ?>
    </div>

    <div class="services-carousel-container">
      <div class="services-carousel-track">
        <?php
        while ($services_query->have_posts()) :
            $services_query->the_post();
            ?>
          <div class="services-carousel-slide">
            <?php get_template_part('template-parts/services/card', null, ['heading_tag' => 'h3']); ?>
          </div>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</section>
