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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '`F+p64IW!7A hyCa%4v#YKr;mb6@L[pE_JUuha`5>A&l(z_2M) DF]dutx5+.)Y{' );
define( 'SECURE_AUTH_KEY',  'T<B1[t{xi)6 qIoJ0o`t^_tV>)IZ<fx<s4cSY;C=R0jNvsajUQqLuEEnmE%*;ceY' );
define( 'LOGGED_IN_KEY',    'Ew f3u[hjY }S<BgB 2KG-Z[*4lS2a%H%u~1c4(G+ss:cS2>WKaqcvG-agm#OyVd' );
define( 'NONCE_KEY',        '^:B5D|X2$0@F+Mwac/!T7muG#Q[9~trL|zNETh2z6IeE&NX9nG^)_>u>4=6FrHi{' );
define( 'AUTH_SALT',        'ZxGTb)XA!LmFVYT-GSj^E`%;+pu&683[c id(xmft9ytUNJ9EI sX:mM?x(t=50;' );
define( 'SECURE_AUTH_SALT', 'ANWL[y5/#Kwdqf5gwF,-lJDYeD,?Bsu,w5ozT=}#l7xeSv{LwtO,|!<1xlCtld/O' );
define( 'LOGGED_IN_SALT',   '.[G,N6SVr&t]`m3as(s+V!lUfQK-dO;C4w9 BVm*|b|-BVvb:[W.1s3A1#oDQdFe' );
define( 'NONCE_SALT',       'y=L3D=FwTMw<v0=8V^@OxN6fW/_ic;BCII<q.j9hHo?if6QU1::6x?I8{DDiWSE@' );

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
