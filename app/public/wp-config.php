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
define( 'AUTH_KEY',          '{N<qd{/huh2[p<7R%tp.g+ASCn/klf*xm#;~J: #2;4z]O&jvBX3 MC[JlA:[NL+' );
define( 'SECURE_AUTH_KEY',   'h0}f^tw l+gc1K!Tsp!IljQ7sfVyx4;yrsMh<s&yDT<O]caBR|]j8c$6==2`|i:7' );
define( 'LOGGED_IN_KEY',     'o2rq$Jb.Kt!q2u9Lw|u&{DL}16^0dc$3B2`aImF-svt@ZAti&?lFDXpj;H]+aqX3' );
define( 'NONCE_KEY',         'da7]s@6G0O*NA~7Nv[ocJ>+uKfESG: ZB,o])~T%/W)Y8@C6;`)?k?Aim[<Bd~:>' );
define( 'AUTH_SALT',         'F>p24|TDQr5`6!.HPH$,cc8IFmxwB[*Xb)RS_A;s$Fih>k1JLo R{(OuaVw?k>g{' );
define( 'SECURE_AUTH_SALT',  'lJ3_^J~_)C)/X7En7Mpq>#{)I>2wSz(@V|yHCjOlJtP7I}N 9>`t>Rft3+%4z,.L' );
define( 'LOGGED_IN_SALT',    'a/BA^!t1@)0XRDfTh:A7dFXUmf^F<!Xq)i[B>?CImY45S!v=bK ZwPu !&!dI-~^' );
define( 'NONCE_SALT',        '#qfJrn0=@AXz&Y/%L/EWlYI.h)j 0}!O]MU<%5ewBM(5vxtjb,R8~^`a;(*NO;Ju' );
define( 'WP_CACHE_KEY_SALT', 'o19b#/u|n7t1s0O:.I1vz]D2Kk`U_;;)06:xnyJPTE%g,)1xI,q;wR#naC$$st2~' );


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
