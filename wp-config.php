<?php
// =============================================
// Configuraciones AUTO-GENERADAS por Docker (¡NO MODIFICAR MANUALMENTE!)
// =============================================
/** Datos de conexión a la BD (se inyectan desde .env) */
define('DB_HOST', getenv_docker('WORDPRESS_DB_HOST', 'database:3306'));
define('DB_NAME', getenv_docker('WORDPRESS_DB_NAME', ''));
define('DB_USER', getenv_docker('WORDPRESS_DB_USER', ''));
define('DB_PASSWORD', getenv_docker('WORDPRESS_DB_PASSWORD', ''));
$table_prefix = getenv_docker('WORDPRESS_TABLE_PREFIX', 'wp_');

// =============================================
// TUS CONFIGURACIONES DE SEGURIDAD (personalizables)
// =============================================
/** Deshabilita editor de temas/plugins */
define('DISALLOW_FILE_EDIT', true);

/** Debugging desactivado en producción */
define('WP_DEBUG', false);

/** Forzar HTTPS (descomenta si tienes SSL) */
// define('FORCE_SSL_ADMIN', true);
// define('FORCE_SSL_LOGIN', true);

// =============================================
// Configuraciones finales (¡NO MODIFICAR!)
// =============================================
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';