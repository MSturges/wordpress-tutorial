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
define('DB_NAME', 'wordpress-tutorial');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         'cN_2Q`bs-v_#o/|9o]E^+YT?x]NK/M5(n6Cfp;/Gy^i8oxEZMa|AhA]nAhvnK_I-');
 define('SECURE_AUTH_KEY',  '-|}Y 5s}.`-6nv|Y<Q$(qZ[/1a0TY@}!tLsNE jdNyS(dS=4v*)U4+#=yv[[(8UH');
 define('LOGGED_IN_KEY',    'mS?+c`-o}v|T0aF2S[B|HsD* J[OaJmk7curn(e*B^u8^zOPf8_@V{$Hx1addL:`');
 define('NONCE_KEY',        '9B(F4Vb0STbu/RZZRVfK-A@|58HGl--ZQa-`S<Y98Yj,,orPO&KLh,)K:Uo~|)?~');
 define('AUTH_SALT',        '?_7ohE?zD=_NLK|#/[wMmodEVo,;xysm(_!o-<s?YVaE{K|60E*8-C;;H1]YeK2J');
 define('SECURE_AUTH_SALT', '`G|bMhmn|?Us717.+<^wTL+COq]s2zN$2j$U<gq+rsvYg+I+&p2.-K!S|oDrK>^6');
 define('LOGGED_IN_SALT',   'nZ;azEy&U8r3!Y?`#=j<-|HqM%WK>~2vA!}Z<4N+zI^7&s,Tk8BCX,jX~=$O[.)@');
 define('NONCE_SALT',       'ZO8g%}=A1M*1,@$_y$9f )Y;KK9P?AJ-ZFjA?,T}|,eSU|C#lf9MiKj^:-jG<,NI');	

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
