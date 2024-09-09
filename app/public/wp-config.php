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
define( 'AUTH_KEY',          'hG5J (%!Se.g.d$LJSSswr[U:RY*B&Y&00g.RGUbc#,^&LFv65i@VcH?n8=SF;jF' );
define( 'SECURE_AUTH_KEY',   'L.tFC2/,</UU$-Q STcbYAeQfdFku7ul.=@nY.hFWzAHbZVO:8&dVb&)&b9G8|HZ' );
define( 'LOGGED_IN_KEY',     'ryWn]|3t)~0}^^`r.6]%<QJM#%@MJhH4/(]gK[{(l&:*]s?1$0G5}XJa=);,m?~k' );
define( 'NONCE_KEY',         '#[]PHt5(g5usY$r 9&]x`Zi>P!Bp33TYyqB0)1-~>_WY%Nq |!N8vS=*{O?.|rK6' );
define( 'AUTH_SALT',         ' K/f`H=jV9z[nJ4+wivn*ScSlZ)p+XLUll2-<TS]1(SV*a<QgFuGKO(HfkQ},>V!' );
define( 'SECURE_AUTH_SALT',  '}0+1!(m/ZId8$s-RJ39Kb2+-IIy.AlOT`QmraWZBA-Unm_:57q9E=,]2Vvrws7q$' );
define( 'LOGGED_IN_SALT',    'Z<;F%yWvSpNYxyzie?tPN*6$/^[JR;,G{P<p-}3G+bXifAV<1?LL~4GhP.BR(}J.' );
define( 'NONCE_SALT',        'qloiQH5U u*0YLN[y1[Lg{jt6fC-$1n-SOE;EHt1bBkHyH$;piLpP__[oG.N47<-' );
define( 'WP_CACHE_KEY_SALT', ';yJJ8#XQU6$Z6r{M0s7~qH)qb2=+`adC!E?,,L83|rH)K>Pmxb|kAo!VNa`kqul3' );


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
