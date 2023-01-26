<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'hilton' );

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
define( 'AUTH_KEY',         'g(u=^#6xI}Q3Nj%Iy/Vpi@K,<6-I-|PKUcc#@I6}gZZ)KP1<^QreH$C(sR/)02P&' );
define( 'SECURE_AUTH_KEY',  '@y)UeeU@?gc9+[Xz7@l/1)HfUHtYEH#-t!3.i?(]N]=IMHALRH;S,lr&XK|f^;%W' );
define( 'LOGGED_IN_KEY',    'qqoRPtsA*9ph]{O=d/B!ply/fTr<g-C?am7X+!6/k@|QT64Yg5*YpCwPomjc{<9O' );
define( 'NONCE_KEY',        'sesj/{hSDrR6VUfm_fhuRWzzD,32/B6D/uHy*;[?we_H&4L:?BW}X}qHi=E66S%)' );
define( 'AUTH_SALT',        'g&H@rCXG!pmSS[,o/~e//5~yT029cT-&zJ3%F!N&s?i=y{WbIU#H667*W,XHV/}S' );
define( 'SECURE_AUTH_SALT', '8K%,vC#7$`Y!(yKwF[ m1x?<n~^17i-TS#~Cecf3rvv9eor}[9lWn]w,cKmJvso1' );
define( 'LOGGED_IN_SALT',   ',c2u)@(ipQMIj/qq<:c}kJaD$,NRfj8ST@k)AwfmtV<=6fB=*VwQ5dDN,9fI[?}{' );
define( 'NONCE_SALT',       ';3W:|=}n6jhMkB2m.a.%=jCIzW8r7ZK)mK,<qgn@JY<,b>:PY~FAFFhA{IixeH{/' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
