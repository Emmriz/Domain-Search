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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '<;{i]{6cN/]^l~!O?6J0Xo`##<xbkF68jDXCHsE!oA=ir+2g(D`2,8PRl>|ysY8,' );
define( 'SECURE_AUTH_KEY',   '),MlAH$j9CUXS?aRgGe6}&=*,&5<|T7f6?< Z>DIoDL~ QRp0~r? =f5`7MS7MYj' );
define( 'LOGGED_IN_KEY',     '(19X0QA1&st5>bQ-0o~nfP>RT/s|I`Cpr/U(ej<&5ksh~M4qf_&tE*@8d8gD*O3*' );
define( 'NONCE_KEY',         '?83O*x}-=nzRCh<v9Et(LM5dj;tM|`TR.^(s8CYvObp<i8x+;&h*mV6PKQ5~ILGa' );
define( 'AUTH_SALT',         'F!j7u(=&iF,cx/S=_c<T4dUqo;|iQ2Z976K2Z,kv_`vZj!!t0R5=^4(jwlD@4[7Z' );
define( 'SECURE_AUTH_SALT',  '],6z4rn&suQ;se=W0mY~HuVkT !Ztp;~fz}RTnK{/G.(_q8XVE$1t;lr[(@&W4o%' );
define( 'LOGGED_IN_SALT',    'N)2* /S-vVUSdY42BF6XhM8Yn*#n=q=CP(3WsZ~u!%0`_BoXzc5%d4wO#w@<UNMP' );
define( 'NONCE_SALT',        'uNm_+qM%nEx,Qpp|7V)t(P,Pez1)u*}_-Tve{lKWZHt0@g)*xS`^Htz1%8%wTfN6' );
define( 'WP_CACHE_KEY_SALT', '04%kj1Z`F.vw^p)G5 Vp~RH%TS>`MOc@Em4pn|ie(V<FI}2=.mkS,E<00-VhXxPJ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
