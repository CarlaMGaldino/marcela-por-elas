<?php
/**
 * Service card for archive and carousels.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

$card_image = mpe_get_servico_meta(get_the_ID(), '_mpe_card_image');
if ($card_image === '' && has_post_thumbnail()) {
    $card_image = (string) get_the_post_thumbnail_url(get_the_ID(), 'mpe-card');
}
$card_excerpt = mpe_get_servico_meta(get_the_ID(), '_mpe_card_excerpt', get_the_excerpt());
$heading_tag  = isset($args['heading_tag']) && $args['heading_tag'] === 'h3' ? 'h3' : 'h2';
?>
<article <?php post_class('service-preview-card service-preview-card--archive'); ?>>
  <?php if ($card_image) : ?>
    <div class="service-preview-card__media">
      <a href="<?php the_permalink(); ?>">
        <img src="<?php echo esc_url($card_image); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
      </a>
    </div>
  <?php endif; ?>
  <div class="service-preview-card__content">
    <<?php echo esc_html($heading_tag); ?> class="service-preview-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></<?php echo esc_html($heading_tag); ?>>
    <p class="service-preview-card__text"><?php echo esc_html($card_excerpt); ?></p>
    <a href="<?php the_permalink(); ?>" class="service-preview-card__link"><?php esc_html_e('Saiba Mais', 'marcela-por-elas'); ?> <span aria-hidden="true">→</span></a>
  </div>
</article>
