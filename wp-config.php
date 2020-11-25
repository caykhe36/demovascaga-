<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'bjatateuhosting_demovascaga' );

/** MySQL database username */
define( 'DB_USER', 'bjatateuhosting_demovascaga' );

/** MySQL database password */
define( 'DB_PASSWORD', 'demovascagademovascaga' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '} wFV8s^UiXi8nm.],+$~~B~/RfWWNu{y#NvoHJkL!r7[ZO;`B&f>Y&zTmGlj0V0' );
define( 'SECURE_AUTH_KEY',  '#)FxGyA5GrW<SX%KexNpiRv pCWz!HoHt%dM8@S[XfI~;=!hnd5+dhzmf-gW[pCu' );
define( 'LOGGED_IN_KEY',    'mc.QR%PzM.#:G?2!@F}h8cVOF9)<;<dpndv2AH}*FLsSHWT.(eIfErzClRR>mK6,' );
define( 'NONCE_KEY',        'A;:1b<.f/E~sR>{$HxaCV&Pl40#p2Tgs:.i#KSDmhV@A3YZ:%yAj7RbAxO.en1-s' );
define( 'AUTH_SALT',        'C^M&[X]?4iYdTsLBr=&&H9Z^!hX1HMx4kp8u+&}l#@EM gJqV,mqEX`+p/26|nzQ' );
define( 'SECURE_AUTH_SALT', 'TO/omO+g/j-O!Uz*Pr8s- Mt+RxxT[U^Z.B95^lLA;d0WDp]KTLLkf&l&_yh[xzk' );
define( 'LOGGED_IN_SALT',   'B*#Q=vIt%a4ecg0h&j>?Jb8)]e`a[OCF#=};8>&4]E`J{IsjyY4hpu+*Nrp_eGKf' );
define( 'NONCE_SALT',       'ee.dvdP^zdbOS-mGs>Ppd|c_UL-pnr$O4vi]UTci4%_2<5;sa!~([Z6VB] NO9E2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
