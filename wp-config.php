<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_immunocal');

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
define('AUTH_KEY',         '(Hc*HCZNp(]M|.UtV!aYO`P.h:2m6A_%=<]*l+o#fQF8KBx[x~uf-4zq:nWn(Yte');
define('SECURE_AUTH_KEY',  '|{)5-+nE>rXy}ye>mCFV}vAai13T$22?fKV|p6D;?a~(%YF&|ukpR[t*>k=ga;}N');
define('LOGGED_IN_KEY',    'y:)Cyf&o*+23DBN@- :-rjwky` qULh05(q[?Oe=ML9_G}dnXPQ+|B8AU&bga= ;');
define('NONCE_KEY',        '6US>YzUuYRdAyR_6cm0K8Kjf;sRzt)UZ,#v|+~_aFz F+qp!-0^A!c]q,F@-qk,:');
define('AUTH_SALT',        'vM$w0wThJ[}(z@TmPWeI z.qZFAflFA]}_&}p(u]h eN--^tD/{A*:Y12=K5njF9');
define('SECURE_AUTH_SALT', 'rS#|T^i)3-;/X9o^e`^XJ7F. ~q,o/Ja eY5KybhP [2g(er-+1S?Fs-k.IFtm+ ');
define('LOGGED_IN_SALT',   'qw&$y iZW/,?Mh+y`;;y^|y|{]%w=}+Pe%tb/%:[`?A:Aeky t*sY+1dr$HCLk^K');
define('NONCE_SALT',       '4N=a[W)zd: gp|r>o*zTGf3O]_|P>DMtqFo|Fks0+//Q{[w=`AERa}[.8ofby-7z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
