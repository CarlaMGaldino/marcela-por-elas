<?php
/**
 * Final CTA band for service pages.
 *
 * @package MarcelaPorElas
 *
 * @var array $args {
 *     @type string $eyebrow
 *     @type string $title
 *     @type string $title_id
 *     @type string $text
 *     @type string $btn_text
 *     @type string $btn_url
 *     @type string $btn_class
 *     @type string $secondary_text
 *     @type string $secondary_url
 *     @type string $secondary_class
 * }
 */

declare(strict_types=1);

$eyebrow          = $args['eyebrow'] ?? '';
$title            = $args['title'] ?? '';
$title_id         = $args['title_id'] ?? 'service-cta-title';
$text             = $args['text'] ?? '';
$btn_text         = $args['btn_text'] ?? '';
$btn_url          = $args['btn_url'] ?? mpe_whatsapp_url();
$btn_class        = $args['btn_class'] ?? 'btn--brown';
$secondary_text   = $args['secondary_text'] ?? '';
$secondary_url    = $args['secondary_url'] ?? '';
$secondary_class  = $args['secondary_class'] ?? 'btn--outline-light';
?>
<section class="service-cta-panel" aria-labelledby="<?php echo esc_attr($title_id); ?>">
  <div class="service-cta-panel__backdrop" aria-hidden="true">
    <span class="service-cta-panel__grid"></span>
    <span class="service-cta-panel__glow service-cta-panel__glow--left"></span>
    <span class="service-cta-panel__glow service-cta-panel__glow--right"></span>
  </div>

  <div class="container">
    <div class="service-cta-panel__shell reveal">
      <div class="service-cta-panel__inner">
        <?php if ($eyebrow !== '') : ?>
          <span class="service-cta-panel__badge"><?php echo esc_html($eyebrow); ?></span>
        <?php endif; ?>

        <?php if ($title !== '') : ?>
          <h2 id="<?php echo esc_attr($title_id); ?>" class="service-cta-panel__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>

        <?php if ($text !== '') : ?>
          <p class="service-cta-panel__text"><?php echo esc_html($text); ?></p>
        <?php endif; ?>

        <?php if ($btn_text !== '') : ?>
          <div class="service-cta-panel__actions">
            <a href="<?php echo esc_url($btn_url); ?>" class="btn service-cta-panel__btn <?php echo esc_attr($btn_class); ?>" target="_blank" rel="noopener noreferrer">
              <?php echo esc_html($btn_text); ?> <span class="btn__arrow" aria-hidden="true">→</span>
            </a>

            <?php if ($secondary_text !== '' && $secondary_url !== '') : ?>
              <a href="<?php echo esc_url($secondary_url); ?>" class="btn <?php echo esc_attr($secondary_class); ?>">
                <?php echo esc_html($secondary_text); ?> <span class="btn__arrow" aria-hidden="true">→</span>
              </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
