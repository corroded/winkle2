<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'winkle_production');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


//define('DB_NAME', 'sweetpe_winkle');

/** MySQL database username */
//define('DB_USER', 'sweetpe_winkle');

/** MySQL database password */
//define('DB_PASSWORD', 'winkle');

/** MySQL hostname */
//define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8rpR4OJsRf79~s $khOWRX?HagbO!iELidZwD+8H,sMkx><S#s 2Dr~|2pYfV3f$');
define('SECURE_AUTH_KEY',  'xvYt`pU,0~(YS>hM35Bl_%dX~v BpfolL|WCOz.A|dwkjP23JW. n= PT+%]vut?');
define('LOGGED_IN_KEY',    's05_/ |rqn!QnlP|-6ntU/<$f9hto|Z>k-Y&XtI2!=]~_VY6-.0?| -IIj/B3ox%');
define('NONCE_KEY',        'AHZ3C@QX;^](M#,?I&um%b~.1mh2<;c^HN+FRC8NHR+(%{Aen,k<E||N5]:7|21u');
define('AUTH_SALT',        'a9Ai&)_AhU~6yO`<)!&U+6|9RDy5`Y?%lzOao=WjoY)os7x(-$+.3;Dd9o#G)zzF');
define('SECURE_AUTH_SALT', ']a*&D?XdY3n^%kI;/1x.P@zWHHc%G-N/U7mISd91/9wBKghb>m4O7TXvcdp~fXhY');
define('LOGGED_IN_SALT',   'NZhetlo)9fR&$En[y<cXE{m<<W&1*j$]%;3~;<{u/1baHdT2|M}3A 4jrF0<?A4}');
define('NONCE_SALT',       '-# _&+EVQI3;cY(E{q/c>re6{9,v?/L9y_HhK~uG,TFeIVHBmUY-!7BQXgT!`ij[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

