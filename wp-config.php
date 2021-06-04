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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jailbreak' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7?UOj1S>qea{E?-0XN,$<fGPt/L3t#tMz!D;s?`l;jsTHzWS;-[MR_F:t!At>$kf' );
define( 'SECURE_AUTH_KEY',  '{2@L[tqk~snjH#$rYjfYfX@d;;m[*ErLR@H%&.l+hsh|u$WP~5u8aNyMm.`X?c[]' );
define( 'LOGGED_IN_KEY',    ']HS=,/tG_8ADd.#b5l^KT!}<N1[wWWxJ=hZRKZzfh9CHS/-mKR?PPYz/jRR FO@F' );
define( 'NONCE_KEY',        'QW[huiHJL;*m;T.a,n6WN!kcEos{R>+sp0`XU.TKt<1r>FK/p%<hsy8|fG@Ls|[?' );
define( 'AUTH_SALT',        '5!z+B6:UnS$XGNsVlZg#$F5Jy2~}=>/)`B@-!%<y:jFmP7P8uT*H>QZu_*hy-.`s' );
define( 'SECURE_AUTH_SALT', 'Bg}Lfaeh[xQ*{mU>8[y(ZeeV1[:PA+6_9{2`P}6@chCHT^x[Kc30fff0}p3bJK:B' );
define( 'LOGGED_IN_SALT',   'n~NCrKzqlmrUwE} =.}v4-49BlI|9iwSl$}y&}bF~94:Lw/Q;[5b%.Jz+}A,z.{-' );
define( 'NONCE_SALT',       '$S$~{@:;Ht/DH }C(g#NA_zQ`849Yv#l6_;Gj&gwkND!Rm+r/>YfbtPZjx>AD;)O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
