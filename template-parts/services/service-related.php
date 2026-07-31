<?php
/**
 * Related services carousel at the end of single serviço pages.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

$current_id  = get_the_ID();
$related_ids = mpe_get_related_servico_ids($current_id, 4);

if ($related_ids === []) {
    return;
}

$related_query = new WP_Query([
    'post_type'      => 'servico',
    'post__in'       => $related_ids,
    'posts_per_page' => 4,
    'orderby'        => 'post__in',
    'post_status'    => 'publish',
]);

if (! $related_query->have_posts()) {
    return;
}
?>
<section class="section section--light services-more-section services-related-section" aria-labelledby="services-related-title">
  <div class="services-row reveal">
    <div class="services-intro">
      <span class="eyebrow eyebrow--sage"><?php esc_html_e('Explore Mais', 'marcela-por-elas'); ?></span>
      <h2 id="services-related-title" class="section-heading"><?php esc_html_e('Serviços Relacionados', 'marcela-por-elas'); ?></h2>
      <p class="section-lead"><?php esc_html_e('Outras consultorias que complementam sua jornada de estilo e posicionamento.', 'marcela-por-elas'); ?></p>
      <?php if ($related_query->post_count > 1) : ?>
        <div class="carousel-nav-buttons">
          <button class="carousel-btn carousel-btn--prev" aria-label="<?php esc_attr_e('Serviço anterior', 'marcela-por-elas'); ?>">←</button>
          <button class="carousel-btn carousel-btn--next" aria-label="<?php esc_attr_e('Próximo serviço', 'marcela-por-elas'); ?>">→</button>
        </div>
      <?php endif; ?>
    </div>

    <div class="services-carousel-container">
      <div class="services-carousel-track">
        <?php
        while ($related_query->have_posts()) :
            $related_query->the_post();
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
