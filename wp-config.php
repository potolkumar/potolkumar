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
define('DB_NAME', 'ninja');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ')X Xx;>J)utnmxjse@[p!{|7mL(i7JJ@*dlGDG73_`w,OK1HF.^Q^Eaf0o>ekwf@');
define('SECURE_AUTH_KEY',  'r-+Uu2dIhPTOpik$dN_uh]EJ`]50J>$b`b722|t6|w)g:@I<}l_Q(8?L~$URST6]');
define('LOGGED_IN_KEY',    '[FYV mIfp--L2HA%5t#0;M,O(zCV;#6TJcvwEPMX-1p3Bi=ymJTbe!>E}ARw*>TW');
define('NONCE_KEY',        'mB>}TJOQi,9I:)x2/z:kz0ZVVEe]lZ(8g4FIn69J3%w#n3X/]H w?sn6G~nEjfeX');
define('AUTH_SALT',        ')g5N;T9PSkhSjWO*i)imF1%*dkx(R.a:$>A&R6L=6C|Q#U_-zGZ}D!dA*udz[]9A');
define('SECURE_AUTH_SALT', 'JZY@:A6Y0)rse>qq*Ts3<o0X5I1?,6IAk%/.N}Ra]OQG3F7ZO4vL9 $0DTD-}}6|');
define('LOGGED_IN_SALT',   'gPLy(otUG}7,8UqGvMjc}/j>b1);o=o&)_,4g~T04zW}Sh65==n]z>3!#rhDG(@4');
define('NONCE_SALT',       'KE~|oXFjBb1cZ@O^w&#wvarQDWY+A6MQzMvUKjF&C%1KGb<}#(]Xk&OO<M-kgFnQ');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
