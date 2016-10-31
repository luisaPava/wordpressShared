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
define('DB_NAME', 'mynewbd');

/** MySQL database username */
define('DB_USER', 'luisamabp');

/** MySQL database password */
define('DB_PASSWORD', 'luisinha');

/** MySQL hostname */
define('DB_HOST', 'db4free.net:3306');

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
define('AUTH_KEY',         'U;zLibqi?CaJzp`O)E1hVI}`oJ&1R^:2zd#[~X@j5`QJYVgG *bE_pJpq rs#JLa');
define('SECURE_AUTH_KEY',  'dwkPqmaoANwOn@PliE>(X^{sY*5Rfiz}>`&jxYn,PShQ0KV<4x9X* 6OG!UJhkaW');
define('LOGGED_IN_KEY',    '+h;Z5Ht>BDW@|H%houH-7&F3D}zE]A&dv$<*z+Qg52q%B)T}S5@>9k:p~,OZv[fg');
define('NONCE_KEY',        '5x{IHN6Y^#d@oD-OE4T)*uf,ShX<g`.M(!!HG|1bj+Jr3h|-RY)!^37Iqhed@l13');
define('AUTH_SALT',        'T6M)-/Nlxht6d#MrQ}j*Lb,!<`%^6fHD}h/H.n(]<yi7z>kjT+;8`)@SFc&TBxvq');
define('SECURE_AUTH_SALT', 'h?08A a)F[~BinhU6uOAMJ#p@7x )>[s#Ah@i`AM0 @C|xQhx.r.RGEk9I(0^~a6');
define('LOGGED_IN_SALT',   'c].r0SC+;sfq~,^B.>,b?Q}/ p*d,}!PwXC:f/PVbfTsort>seM9IPXQ(t@D0j=|');
define('NONCE_SALT',       '}P`sgCLJ (mts_}NBg?ua,65#rDQ+1dE{Q~@VnPutx+eR/,z.gz+O.RMu5F=SO>a');

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
