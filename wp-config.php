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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'michelleGriesiWordpress');

/** MySQL database username */
define('DB_USER', 'michelleAdmin');

/** MySQL database password */
define('DB_PASSWORD', '!@QWERFD78947894');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3306'); 
// define('DB_HOST', 'localhost'); 

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '77c483c3948fc50223bcf7b0922796b9912aaf09');
define('SECURE_AUTH_KEY',  '29e6f61a767b1ef43ea670b53695b38e2d41a44f');
define('LOGGED_IN_KEY',    'f4d6950ba1581f8e701a3a0511c70d867331a1a9');
define('NONCE_KEY',        'cbf8d306be2f14d453cb74df2d513daafee57264');
define('AUTH_SALT',        'dbefbf534cd33e39d1b03358dcbe71b7d9c56e20');
define('SECURE_AUTH_SALT', 'a5ec56103fc71aa72fcd8a983475904df7e19d9a');
define('LOGGED_IN_SALT',   '1f1fbd7c9ba684f3949e917bc9ae2e19b0f1f339');
define('NONCE_SALT',       '99f8076d9667de386f302168a8e44a2b61a9db90');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_DEBUG', true);
