<?php
/**
 * Header template.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

$header_class = 'header';
if (is_front_page() || is_singular('servico') || is_page(['sobre', 'contato', 'define', 'curadoria'])) {
    $header_class .= ' header--transparent';
}
if (mpe_service_has_light_hero()) {
    $header_class .= ' header--light-hero';
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#main" class="skip-link"><?php esc_html_e('Ir para o conteúdo', 'marcela-por-elas'); ?></a>

<header class="<?php echo esc_attr($header_class); ?>" role="banner">
  <div class="container header__inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo" aria-label="<?php esc_attr_e('Marcela Por Elas — início', 'marcela-por-elas'); ?>">
      <img class="header__logo-img header__logo-img--light" src="<?php echo esc_url(mpe_asset('assets/imgs/logos/logo-branca-principal.png')); ?>" alt="" width="180" height="48">
      <img class="header__logo-img header__logo-img--dark" src="<?php echo esc_url(mpe_asset('assets/imgs/logos/logo-marrom-principal.png')); ?>" alt="<?php bloginfo('name'); ?>" width="180" height="48">
    </a>

    <nav class="nav" id="nav-menu" aria-label="<?php esc_attr_e('Navegação principal', 'marcela-por-elas'); ?>">
      <?php
      if (has_nav_menu('primary')) {
          wp_nav_menu([
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'nav__list',
              'fallback_cb'    => false,
          ]);
      } else {
          mpe_primary_menu_fallback();
      }
      ?>
      <?php mpe_render_social_nav(); ?>
    </nav>

    <div class="header__cta-wrapper">
      <a href="<?php echo esc_url(home_url('/contato/')); ?>" class="btn btn--pill header__cta<?php echo is_page('contato') ? ' is-active' : ''; ?>"><?php esc_html_e('Contato', 'marcela-por-elas'); ?></a>
    </div>

    <button class="nav__toggle" type="button" aria-expanded="false" aria-controls="nav-menu" aria-label="<?php esc_attr_e('Abrir menu de navegação', 'marcela-por-elas'); ?>">
      <span class="nav__toggle-bar"></span>
      <span class="nav__toggle-bar"></span>
      <span class="nav__toggle-bar"></span>
    </button>
  </div>
</header>
