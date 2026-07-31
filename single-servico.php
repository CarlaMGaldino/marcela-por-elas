<?php
/**
 * Single serviço template.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

get_header();
?>
<main id="main">
  <?php
  while (have_posts()) :
      the_post();
      $slug = get_post_field('post_name', get_the_ID());
      if (locate_template('template-parts/services/content-' . $slug . '.php')) {
          get_template_part('template-parts/services/content', $slug);
      } else {
          get_template_part('template-parts/services/content', 'mala-inteligente');
      }
      get_template_part('template-parts/services/service-related');
  endwhile;
  ?>
</main>
<?php
get_footer();
