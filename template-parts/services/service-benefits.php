<?php
/**
 * Benefits / deliverables section for service pages.
 *
 * @package MarcelaPorElas
 *
 * @var array $args {
 *     @type string $eyebrow
 *     @type string $title
 *     @type string $title_id
 *     @type string $lead
 *     @type array  $items {
 *         @type string $title
 *         @type string $text
 *     }
 * }
 */

declare(strict_types=1);

$eyebrow  = $args['eyebrow'] ?? 'Entregáveis';
$title    = $args['title'] ?? '';
$title_id = $args['title_id'] ?? 'service-benefits-title';
$lead     = $args['lead'] ?? '';
$items    = $args['items'] ?? [];

if ($title === '' || $items === []) {
    return;
}
?>
<section class="service-benefits section" aria-labelledby="<?php echo esc_attr($title_id); ?>">
  <div class="service-benefits__backdrop" aria-hidden="true"></div>

  <div class="container">
    <div class="service-benefits__header reveal">
      <span class="eyebrow eyebrow--sage"><?php echo esc_html($eyebrow); ?></span>
      <h2 id="<?php echo esc_attr($title_id); ?>" class="service-benefits__title"><?php echo esc_html($title); ?></h2>
      <?php if ($lead !== '') : ?>
        <p class="service-benefits__lead"><?php echo esc_html($lead); ?></p>
      <?php endif; ?>
    </div>

    <div class="service-benefits__grid">
      <?php foreach ($items as $index => $item) : ?>
        <?php
        $card_title = $item['title'] ?? '';
        $card_text  = $item['text'] ?? '';
        $number     = str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT);

        if ($card_title === '' || $card_text === '') {
            continue;
        }
        ?>
        <article class="service-benefit-card reveal">
          <div class="service-benefit-card__top">
            <span class="service-benefit-card__index" aria-hidden="true"><?php echo esc_html($number); ?></span>
            <span class="service-benefit-card__spark" aria-hidden="true"></span>
          </div>
          <h3 class="service-benefit-card__title"><?php echo esc_html($card_title); ?></h3>
          <p class="service-benefit-card__text"><?php echo esc_html($card_text); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
