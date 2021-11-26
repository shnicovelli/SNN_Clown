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
define( 'DB_NAME', 'snn-naoufal' );

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
define( 'AUTH_KEY',         'L1jx<(~$aIXKdca|Gu6pFg-,HrI@%b9o3-TRz#b-;>+t{9MWgy(rJOq:*o9!$l=l' );
define( 'SECURE_AUTH_KEY',  'fHLeLUW,l_!|X[vl@w7}2}#2TH4TRedM#aU:3%rVWYP_SQ%)YR[I3V<K31<Yuy<S' );
define( 'LOGGED_IN_KEY',    'WkR|ONF$]Su[Yh2t}lKVj!!kP2j@:UPb|0uwhaJ=BX XK5Oun$uOeY`PywN`[^pu' );
define( 'NONCE_KEY',        'N]Uu){?D$nac-kf3cv(MZS-/mF;8.Qd{l(^Bh8}_$8^Y}4${MC5G%:OO}&y#(f+v' );
define( 'AUTH_SALT',        'zTpbf7z^&v7LY%^N-MS5[&LCimBM=SH:|Jyz%7 =KSOhs}KI8KAE``lQ)[-EvfJR' );
define( 'SECURE_AUTH_SALT', 'rPb~tf&gX*);6;BJs/a3:S&8TS{73ma8lGJS/!n?LqD2~2M/*_n0;VGsOj}~gGb#' );
define( 'LOGGED_IN_SALT',   'st3+3AJ%KIiDM}>>@@G*U@~N5>@;?CRJeg_F6,&i80Y WlrMEq7=m3}4BQyVHr-8' );
define( 'NONCE_SALT',       'UN}=4. z0GhA!%fNst`t=EqT??rI](Y=6kbTOwU~rOMdRCc+Yy390Fc3e%~{p}Cw' );

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
