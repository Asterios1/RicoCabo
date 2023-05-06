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
define( 'DB_NAME', 'ricocabo_DB' );

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
define( 'AUTH_KEY',         '&!KMbWKj g;h9r0d6Umy82a4Lma0zQ<M$cf!(Y~JF3&KfLFn`0vmr6HNL7I6L 5o' );
define( 'SECURE_AUTH_KEY',  'gf!mdfgKfdB^>1E~@M=9>T/T{])aVB%^>#83a9Gy:Tj5TOfdTw}mvGrTvRF[u1gC' );
define( 'LOGGED_IN_KEY',    'Ak-p[1TZMo4qCc(1z;{w1>W{525?nCWw !t>&{]xOosk|]$O2/muyfe%xt|yVsMo' );
define( 'NONCE_KEY',        'NO|_v?uE>?}UxnfP^O#SA@UJac#GM+GdZ@M }Q+4[/INM+,s+KEI+q|{E:h/;%j9' );
define( 'AUTH_SALT',        'bV38PP- *I^@_1N5o%q}>NUQ%C|R8_p18LRK_wME$q]wO:*0(W<;Cs2sk)T#x)A%' );
define( 'SECURE_AUTH_SALT', 'Pfb8p[@RlE.=m|&z:5-v>DP_BiMjnxhXy%sLJn3-MGSXK4${L[Cu)Qbt9H~2xHx~' );
define( 'LOGGED_IN_SALT',   '@Q&&anZ1Cz^S/ psP)*%J]`E]OWwjgjv[$vB5,:_m>^(J6St*IS3eVO<T?H3;9 y' );
define( 'NONCE_SALT',       'pZfAqN?fhON6N}ht-[,LR%LuV`_!K$5%62K%ql>WDe/<?-)cwmoUU/;*4{eA9<#,' );

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
