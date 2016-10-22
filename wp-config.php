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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'mothernewcrazyleaveearn');

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
define('AUTH_KEY',         '7b_)+n]4o}_#R#F<0m&9KsZ@?}vR&M#crGPdT^sFMP&,GEQKk3eMY~0%,+57Ta?D');
define('SECURE_AUTH_KEY',  'K-atS n:&5YXl/jRPw*dh};RC@S9GW$ZU[;5Xc=.}cgL}1k/DGQH!XjVI9_RS|1_');
define('LOGGED_IN_KEY',    '1AT$Bw3~S:Hq|6t7V:=GP_ c4eycMDWU#]$qS5(hqfhZjL;Gs%Z{(,:UmcRzcK>s');
define('NONCE_KEY',        'vq?Q-n^$RovJ<*%u[[35G.9YX3?HSx0{7>lU/Ihtd=<7hfxIC883K`-zZdzlXL$V');
define('AUTH_SALT',        '<hiG:G`xhF&EYp=C]M0ST.r}OeFoQ%O|F626/W MXivD4U,@ck68}m8.b<RM;e>!');
define('SECURE_AUTH_SALT', '63r9Dk;W}BAou9]gAW,uC=?]Q*tW~nb&i]+P6k~|+hVr5;@RobV{k)t[}@i&*y~Y');
define('LOGGED_IN_SALT',   'X@(atc,/~1)l~XrDRB9rgf_>yLXvA=MY(A(OxYV;Cb0O}Iza:8u7.gc+i]Ks#j4 ');
define('NONCE_SALT',       '~Liojbm5^+!A%Mb9ArEJIS{I^<[E2kidIqErV~J:rW83j>X&=sATMOR*eeo5;lV>');

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
//define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
