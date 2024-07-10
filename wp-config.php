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
define( 'DB_NAME', 'tembea2' );

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
define( 'AUTH_KEY',         'Bzx=Y8>7ie&^IU^)j`A6l7,ujuUHP1-i)tv$bmh;9LD>TTp+eZW{D$u5risf<*4<' );
define( 'SECURE_AUTH_KEY',  'h8whsPJ1E=~+QK)W%Um.5qnVsG*kUF>5nn/Uqy%x/A8kD8_Ga Iu.Dxz9eEmkb1B' );
define( 'LOGGED_IN_KEY',    '{.pBaY#I.y2E3YYM:rLVq>MpX(Xou;-rZYdGzE!>Ru,aTg8]QJ,x&W|-Z_?7XlA}' );
define( 'NONCE_KEY',        'bUX>;5Ju-S6bY*AJlG?v1to|Z4FMM05qGI:FVP6AZk^W$pTK:A)4h^X;r1.oq-4[' );
define( 'AUTH_SALT',        '1u;h_&dGn6^oATJ]9qwcLrCcqt]ROvmxg- jaw.-J]BQiaw^v$)U&X6yhR[8`WO6' );
define( 'SECURE_AUTH_SALT', 'uD!n0 -s-=bJz|{CP0X&DPhO(lTQx:Tf$@L#u,xU7<OC4%&J 9]/R@5ABt#v<p46' );
define( 'LOGGED_IN_SALT',   '2Y.=53SJqV,ABwQfCHxKJM ,zE9hgsA{3+=>bz%`7K;=62 D+aHjWIiCCaL`WV.|' );
define( 'NONCE_SALT',       'Xe:+.qh|/C`rQduy>>L8o J?cKHM0+7R*n_VxZPkX|piF)6+R2?!d:GvJ@kOA()8' );

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
