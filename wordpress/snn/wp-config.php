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
define( 'DB_NAME', 'snn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '(1~->34I#N/N/Z31)IngxmCAEP$}<pqvlvfX)T(O8N+Ild4X-RZilZ(1A=X2>iD$' );
define( 'SECURE_AUTH_KEY',  'e1U+~1&3w4Eu@r{[;w`,=)NX!h&MjNL3[x-v(BLyv(`;_2xjx*dspg9theynQ*?1' );
define( 'LOGGED_IN_KEY',    'E_Nv-IJ*]|2}t/|gr2rx0biT@uJy|)216|_+F:_!+G,q#|)*=_%-6v$.~*]CPXj3' );
define( 'NONCE_KEY',        'B<W<trdo6ZG!)CA,_A.*/:g0aI^Z(9n2q=6)A)zPO!M.!aZ+.Y0Cr6aAM@4[[b0r' );
define( 'AUTH_SALT',        '&Oh(/W<!>lkgDO$he`^1X4k+*0Xi>3osA@=,Y(NIe#ST]AOkVjGmD=Z)Iqo,i+Mk' );
define( 'SECURE_AUTH_SALT', '0K>@RJA?](e[;NGd:4d5a.Gj7S{0w%h8&DduL^0PQE)gdgVN&U@/J+|pEN3iDU4|' );
define( 'LOGGED_IN_SALT',   '@pgye0:sta,uEACRbzCS0r+XQFdenYB0&UBxtVB4T-)FCxG3>Ls$J6ep&bO==.%<' );
define( 'NONCE_SALT',       'e}{[M]g 8x]TSV)}/lEG `rIJeII*}i_~3+]48u7.1eq^3&FgriYLWI#X3TC(:Zz' );

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
