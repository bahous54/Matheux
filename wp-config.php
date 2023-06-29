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
define( 'DB_NAME', 'matheux_db' );

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
define( 'AUTH_KEY',         'h@Jo4pMNWWRq# vt$1^k7Sw@_o@bfBDOAa6:fdWd>Bz7:fKfZ8=!=[@9+h!SFkM|' );
define( 'SECURE_AUTH_KEY',  'HMl,zrcn,HU2nqz5M@vpYUC&NXW`Wh<)F%(LOhCKDl&x1hJto)I1tjOD]swa}3v}' );
define( 'LOGGED_IN_KEY',    'uc4m3 R%E?F}FXq=Zb&*ZW%L$2YDxeVrz#7u_N.Cmj_g(<ym7YO;bL7Vu7$R|$OL' );
define( 'NONCE_KEY',        '~%x,3d%]6l#w#lST{*dcztS3Knd28ytba5v5mxai?AJNNq1BM/<O={0#>8iqf&&n' );
define( 'AUTH_SALT',        ',C1%)o Js/tg3^L7#]tQ6jOzZ3YV!G%x172:ml.v^:q70jwLxJk1%7<#H@<{?ECk' );
define( 'SECURE_AUTH_SALT', 'E<]#.`/dBAJ|&dR?Wn8{!]9v>G=}pfR-!@ojt!,c/ 4QZ(?}]QU*/P=M6=5^{a0b' );
define( 'LOGGED_IN_SALT',   ':Oo.r=dr@R9x{c|cKl.7v=X9NqO2Lg4q6|}E|Ak441,~f`, d$[B];a[xc-XE1Y8' );
define( 'NONCE_SALT',       '.UW{ATJVO>voI$<Gy1rh6*ELR=PzUqpWkx%zb4NQ6KXS[8{!xW.G(5pR%}{L-OvS' );

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
