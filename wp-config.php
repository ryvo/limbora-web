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
define('DB_NAME', 'limbora');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'p~;|Jsr8X|)$Bx)j0:H54].c}G0JLc]2-RP|-a:cN{HYK%vcd7T7_+l9v$,Cq<Zb');
define('SECURE_AUTH_KEY',  '?2q.yZd8!mt4--Ah-G.g-jA<lngp)Q|$q:z%S?;>7F-q8}W~L>[uqjIret<J?h?]');
define('LOGGED_IN_KEY',    '[=6)}5huzy[_#sr)I&cHxAJt#*[5MYT%2Q^~xo7|)kH$6QneX<r8cj):kZqqxfjZ');
define('NONCE_KEY',        'Z;SL-j.vB,fW$6D{eA#id*QeuVeU9?w/vc+!hggD,7]fnmV];i}|vKSnav<Xe?-z');
define('AUTH_SALT',        '5PdWpS|@9S0:i|+>{Q4^21]Tl7b6@2~OROFW3fxA4t7H-6!+gFwf3 TdI`H{RZ{6');
define('SECURE_AUTH_SALT', 'Nc!ENV5.M GYgB(n-,/nFzT#1p|QeA/v6|[xx)lnd+N=TY8dk:mnuRFOEmcQ.%Va');
define('LOGGED_IN_SALT',   'u06-LGkf:4oh_r`nM.`KAowN8&]toz)/|{ :J72.j9%ln|eaaP+#MX$LZPdKzzf`');
define('NONCE_SALT',       'U39o;HKh{LVAK4>?oO,pF>DL/g3CT&h aOrF:_V}]lWycx@C@ J7N zE/-zYKV1[');

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
