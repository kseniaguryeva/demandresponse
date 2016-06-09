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
define('DB_NAME', 'wordpress-demandresponse');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'byebyeRussia2015');

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
define('AUTH_KEY',         '~IpVzEe;OT-bO;!p7l?9<WqI[BA3dBaZ?~exxpL7}(Y+P:^(+1+GFq86AmfOA@!U');
define('SECURE_AUTH_KEY',  '}:E!4PUo6Uk &e5sA@LBJwPh&ETTNwXsZE jZ_*#b>@F-s:o,@^mX{;T@ZKD|Cgh');
define('LOGGED_IN_KEY',    'F[U.P{XOh</n-$:Yb^jpA1fW}guuXG%~YlO|3icPi=nuyku-pH[zZ.t;JDN&~^(l');
define('NONCE_KEY',        '|aWb,ky4g83C8-R=zGsK0[mB:|%QP~^$D~YYm!6JsF#er*rI4Pdc[ H!/%uusp5O');
define('AUTH_SALT',        'LZNzl9.s8Y$rlSX6D*lpe9|@D,PYR})1Hd& >dN-;MAB~r6tf]Vz)]]Y[(EO&|Tb');
define('SECURE_AUTH_SALT', '9Vz6=7d8[x+rcQPIsF8X6m75d pc|hRY6iVk[prE^-54L(NiK`;=RDYjfY1H2f:#');
define('LOGGED_IN_SALT',   'W)(s.lBD&n|`zM/cl)`[/cC+-Yn>Qd7S3l^xqrv%%)^nA~ix7_Y&D/JxFFdg0k:@');
define('NONCE_SALT',       '&rYk7P~s6Vv=BU[~AoK5u+c3Ycfm%2iFFwtm6Gn:58I7`$2cuQfvzw, %nwQ`0a4');

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
