<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'tembea3.0' );

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
define( 'AUTH_KEY',         'I?/MG|$53_U~ad^9E+CjS~Bu+?ZJ&.cQ^F9FERWvtZ<Dt%ATTY0@Aon5C(A#0BAE' );
define( 'SECURE_AUTH_KEY',  'X*e3mvzTurGOGO%`pY;xU](.}ERA% Rj)TT|1-wujO@# K5MhpbiUX&hW7f9fAv>' );
define( 'LOGGED_IN_KEY',    'o,N^ryCkR&9B0`|a:>.SmX6EZO=y8]jkUbOLeY:O0#[)F*2Nd$E^fu2ho+1w#aTz' );
define( 'NONCE_KEY',        'B82;4oa*|)H~wI_@SL:gye6zFiK!cT{SQe4z}x]EhP+F${m6:[,!Gg90XllwQ~w5' );
define( 'AUTH_SALT',        'C=b T cl^-!.d$H*Ypq5<tI{3@XVJzc:roegg91:a#GE2U{=m*V|M_ehrpA;@`_S' );
define( 'SECURE_AUTH_SALT', 'jpI1f7bXN%j=cg|]Ih5hjwZN#g~y53~)A~ wNVOsjcXNW`Qv$oS}KGt[{OF{-o33' );
define( 'LOGGED_IN_SALT',   'I<yf~>x=O8J?rv{#hQZ|7g9k{pDx*j*x9On )BBIOaXhm9NIbwMT%7u6?@yA| ~|' );
define( 'NONCE_SALT',       'heNeO O>PCx^~JhtDK&(v ov}T/[LS>KL B21T(}vu+DW5L;h;}7[1Db<T%-?_3b' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
