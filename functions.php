<?php
/**
 * Marcela Por Elas — functions and definitions.
 *
 * @package MarcelaPorElas
 */

declare(strict_types=1);

if (! defined('ABSPATH')) {
    exit;
}

define('MPE_THEME_VERSION', '1.0.2');
define('MPE_THEME_DIR', get_template_directory());
define('MPE_THEME_URI', get_template_directory_uri());

require_once MPE_THEME_DIR . '/inc/setup.php';
require_once MPE_THEME_DIR . '/inc/enqueue.php';
require_once MPE_THEME_DIR . '/inc/template-tags.php';
require_once MPE_THEME_DIR . '/inc/customizer.php';
require_once MPE_THEME_DIR . '/inc/cpt-servicos.php';
require_once MPE_THEME_DIR . '/inc/meta-servico.php';
require_once MPE_THEME_DIR . '/inc/theme-activation.php';
