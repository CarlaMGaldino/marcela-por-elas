<?php
/**
 * Archive serviços template.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

get_header();
?>
<main id="main">
  <section class="section section--light" aria-labelledby="archive-servicos-title">
    <div class="container">
      <div class="section__header section__header--center reveal">
        <span class="eyebrow eyebrow--sage"><?php esc_html_e('Portfólio', 'marcela-por-elas'); ?></span>
        <h1 id="archive-servicos-title" class="section-heading section-heading--center"><?php post_type_archive_title(); ?></h1>
        <p class="section-lead"><?php esc_html_e('Consultorias de imagem pessoal e soluções estratégicas para o varejo de moda.', 'marcela-por-elas'); ?></p>
      </div>

      <?php if (have_posts()) : ?>
        <div class="services-archive-grid reveal">
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/services/card'); ?>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <p class="section-lead"><?php esc_html_e('Nenhum serviço publicado ainda.', 'marcela-por-elas'); ?></p>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php
get_footer();
