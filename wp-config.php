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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ankeproject' );

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
define( 'AUTH_KEY',         'OKI{l#=C@M)B7Tq#=xAA* Xa>l!t_ ).R[E]CrL`W`N<=hLpxaY,tdvmU`h%q9Mu' );
define( 'SECURE_AUTH_KEY',  'Ry`a~X[300$0XEVv.ZJ1kQ!foJ^Cn7-n^VlFQ.L&4+aFhpziH+|2i<Co)``m(<n|' );
define( 'LOGGED_IN_KEY',    'V-`o,v;E0I46<6KVtjLv)[C>]uv8i^tL0hA84loLWxpwebkc C?iH=-=OVq]Bv/X' );
define( 'NONCE_KEY',        'WA()0XM8kblBH0<#62G%Xm}+kiSbc;lq&9:8j[xzYcca)b(gQ-uq>[WAMV;7,>^c' );
define( 'AUTH_SALT',        '^TnNo4th.Bdw+1YTwl:_>w y(2EgXX J_:SiA}kG|^I PtxW;Ai>:dK`}2&|RD^<' );
define( 'SECURE_AUTH_SALT', '_vdD1nH5S*S5xI0%9.tkq9,afCh<hliLE2gEq/4*uxD+pX0812T[gZ91g65FmzM%' );
define( 'LOGGED_IN_SALT',   '3z`R9iZv-a+e6m1SR;I]?=wPAjE,FL2XZ>Mvr(A/fO4[H2ON+EUg,`ZJWyH{wq}f' );
define( 'NONCE_SALT',       '=h6nC{uk7I{ui]fd-^M/(.8/Pm,7mH8^B&*m>dfKvNy!d*zSG-ruU*`nH}rDXP+-' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
