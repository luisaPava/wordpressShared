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
define('FS_METHOD','direct');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NFn1(#-mfZV^X>;)0wOtF13(m(YJ8Sn$Dq[+Xc[]_7*$n@R=X*%s:L#S4D_&BONk');
define('SECURE_AUTH_KEY',  'E12lIaC4q>6A+Ez<Ke{+1iRF#%@;|1eP[]z@~;)fHo@8Zpzl`]cvVTcnPe%gjR2c');
define('LOGGED_IN_KEY',    'qv[?GRkUOL<f$rZjJnrcfN@Gy,#}nHp<S/wmZr0OUu>^OZCvZxALeswp3_b`G(zI');
define('NONCE_KEY',        'OVo93<Q-:%N=ObvwxM/N=hc<yq>-2|/v<Q; pe21xZV@v7hgH[z@ayN+)k!R6W&P');
define('AUTH_SALT',        '=|,%eb*)A(;D*8Z0dtSLo4 F$P#[qI&&^X7.QL2,iuiC*85iG y}@|;>KFq<!)Iy');
define('SECURE_AUTH_SALT', 'g]Zq==A-v5x(D-8}nq*Y*PJ,>XygibzkSz$~X JNIJ}c14^yQ7Ow~H@vG:DHS=wy');
define('LOGGED_IN_SALT',   'M)J49NqyOr>i($^d*:QIs!<+(|%e~MpYCU:Ko_24&k<-mq0wB$=$*^WUp/(Vbj&E');
define('NONCE_SALT',       'T |F;06;l?%Nhuem4~Ed>tJo@%0QRy]~Q:X_aL.9]WZ#2riURs^lbgjE*iYal5[@');

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

?>