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
define('DB_NAME', 'wordpress');

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
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B0$8NbYn@.Z8jfWjiH6.54zTX5EC=d?##7Ugjz`)*F&RoE;fI;()DDf900toO#L&');
define('SECURE_AUTH_KEY',  '{^JH`2mCkd6;E3zuE~{tSJ:zS*GDMZNCh>Ez6hcO1UC7A_BUtTlKv|A7he<V$Ypt');
define('LOGGED_IN_KEY',    ')t%*R$du7mtJY_csm6[Ztq$zAo55hK8eh*)a`;%c!8Nr!s3z#iJBaj@tdEC(yGTj');
define('NONCE_KEY',        '=gNj?-1S!4jW&~@u/ak9 |=k#8eY6W/bN 2M<b?`@C2Q]DFx7~dcCLrkG8^30.ei');
define('AUTH_SALT',        'u*x+,Um^xd~2O#xSE_DsV>uHI`9>X}Y!wV/QDcMW(bt>:m[^ua)q%=rKQ~Lj0A,z');
define('SECURE_AUTH_SALT', ':f+=6z:WgaFR:v|9MlA|0$da:]LV`yn] q=wY33cZpTQiY<@1^!*5X@Nbp(|]5gB');
define('LOGGED_IN_SALT',   'nvuh@>ZJ~*q <0a*?4?=/lOT`Es++zDiX]X*EviMydkA~LSH3og@?4s$d7fm;//o');
define('NONCE_SALT',       '}Rm5]iKzfQwl%w/db^H|i!Z(NPYTJ3,<(^Bd|*YKv+|*Tsb$C3QKTD9a$evfG6/~');

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
