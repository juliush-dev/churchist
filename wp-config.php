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
define( 'DB_NAME', 'jdev_wordpress' );

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
define( 'AUTH_KEY',         'oN^g0Y$50l6bhvnqbA W|K;h@);W_Xjtc_1k*6w<=T<TxCD*=~5pJ9WtX~r;uI)r' );
define( 'SECURE_AUTH_KEY',  '~Y#v3.V4B--u7.LJ@-SR_Vig]7ubdlK&LYT>m2Efn`/GMt|7nK7ZP,zJu4VA(2*!' );
define( 'LOGGED_IN_KEY',    '+&I:i- &;*+$_,^KR.!IqZ8=gd$eiwfBCG+t1Eb=wgsv;<</q/prMFjNzL/pPX6K' );
define( 'NONCE_KEY',        ' 0u Re:l5FNh+ztg X2RofSMAi*CI[QsCCytz?f4y^wF%Hzn|qu TNFa-8X&e.(N' );
define( 'AUTH_SALT',        'XWy8!vtt>%fZhed[{vQy4g]K<Yy3^.IQ<5d;,N#a.Dq?er>5>#2jebukSzH?1#mA' );
define( 'SECURE_AUTH_SALT', 'q]J wK0WOkyh}ao? h<[o<8*1xHDK+4m=_o]VtpCIR HQzOIwL jZiOo8Y83$#0>' );
define( 'LOGGED_IN_SALT',   'lM:l%@Jo6%bfjw 8|^Rv)ZUs0qzAOX7ZE&ts$9Y-Rwnr(gPK%V(DP&s`qk!8W]^#' );
define( 'NONCE_SALT',       '][n|#+DdWx:x9-KN+1yA1DJ3azcC^V7zPjdCZ0m%Ztt5A1LmfFnTZ=ZFaSE8h5k)' );

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

