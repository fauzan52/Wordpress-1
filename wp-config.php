<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'data' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kZB]5BX` <aEi)J,aC%wSfM+Fm>F5.Ud!9.#BYG[p3D@oE{>Q^,e1^4POoY_8W-S' );
define( 'SECURE_AUTH_KEY',  'yrb;@SHO6F!FhGd]aRN}jWn# ozYjXWNJSoh`2+Q`XQsiqgE?_Hx_F=U-6UyL_xq' );
define( 'LOGGED_IN_KEY',    '<rk+_f}JgQ]!_TIb2D#`p!/P3Db-lvAIgAV0c7Y(Cxk#,DvRXg^AZ!JcABgi>nB1' );
define( 'NONCE_KEY',        ':`oe:fMp})SEQ/-D[Y497%h(n}$Q6;d6)2*B#IV)^RZn}pdqLZsJn~X+/;8U`J-c' );
define( 'AUTH_SALT',        '%27<`BKV@qK1i7++sMSL}MHb?L{aptq(Q:z]x&LUISd)uBR@,#xN|]@nRhhJ%}0b' );
define( 'SECURE_AUTH_SALT', '*55[Ww6WH$AFt(k:+QwG+MdgPt?HtD(0a2+2CF5B~{yHOvO-Fl]w*@`kbn9Dl%R)' );
define( 'LOGGED_IN_SALT',   'bIN(~P3Maw3[HD|@wl;_,rIO6V9SSC_UL*@,fW $kC~th$lzfH ~LlhDw>bT04rx' );
define( 'NONCE_SALT',       '[*v$lNU hD*=WKC(QszfBfdbr8P#.ZDx0K;5^5u-`({,Em=Mpye{CadXP&h@6K|q' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
