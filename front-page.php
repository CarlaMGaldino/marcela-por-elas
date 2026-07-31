<?php
/**
 * Front page template.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

get_header();
?>
<main id="main">
  <?php get_template_part('template-parts/home/content'); ?>
</main>
<?php
get_footer();
