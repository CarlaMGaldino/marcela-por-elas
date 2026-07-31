<?php
/**
 * Fallback index template.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

get_header();
?>
<main id="main" class="section section--light">
  <div class="container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('reveal'); ?>>
          <h1 class="section-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p><?php esc_html_e('Nenhum conteúdo encontrado.', 'marcela-por-elas'); ?></p>
    <?php endif; ?>
  </div>
</main>
<?php
get_footer();
