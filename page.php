<?php
/**
 * Default page template.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

get_header();
?>
<main id="main" class="section section--light">
  <div class="container reveal">
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h1 class="section-heading"><?php the_title(); ?></h1>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</main>
<?php
get_footer();
