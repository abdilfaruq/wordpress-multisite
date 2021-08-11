<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MultiSite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VqZHr9NbgC1kWhxAIdEF8C2UtHLPDAJwbi13iQ5PGUYcnNR5nEkznPGs4lZWyqpN' );
define( 'SECURE_AUTH_KEY',  'Q50mBbfSln0nufXXbr09oEtT5Uxotn7byqhGL6W4V44PEz6OKi9qDFN7ty6zzXjl' );
define( 'LOGGED_IN_KEY',    'p2CZCprw0VpPTOkugbRHm7C5vgK4PrNEaGO9fWu64QKT1rDqNp3RHVjvlbyd5qCR' );
define( 'NONCE_KEY',        '0Y942vHqgo1QVG8L4mTtdMhnVqEcUJttfQyG6rdQdMynRVrKtDQ9elX3GpJBHcd0' );
define( 'AUTH_SALT',        'QOUdn2gEYzoJ58TKmKwmsHCnmGXHA7b3JzoIM7JerqZ1dkwEhk8E8EfboBuHUGqi' );
define( 'SECURE_AUTH_SALT', 'AimxyQuiN4zOKZ0ZAVgY1l859eQnaRe53hFNhECQFNsMphmOYJF9OGV4AEunvBoH' );
define( 'LOGGED_IN_SALT',   'JKUGupRsgpt3GudJc1D2juG4Uo6Zc5hNiNm4wtPVVsbpBoJpUk1jt4SaIUVxkd1D' );
define( 'NONCE_SALT',       'auRyqsDJgkhdjaBHk0yL5m0AlW9oKj1MHb7tIGYccG8KXaQcdpPfe4HPjtzB23uQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'multisite.test');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* Plugin Jetpack */
const JETPACK_DEV_DEBUG = TRUE;

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
