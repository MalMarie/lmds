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
define( 'DB_NAME', 'LMdS' );

/** Database username */
define( 'DB_USER', 'LMdS' );

/** Database password */
define( 'DB_PASSWORD', 'LMdS' );

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
define( 'AUTH_KEY',         'BqhS<r{hR q81(S[;#4GX#7J3tE0%RrzY}fBD|G^Ns_Pr=|=IW&T~~K=g`^&.RBy' );
define( 'SECURE_AUTH_KEY',  'K>fL%L$z:,XB]R]Lh{4@z~XyYURgYtKCfYXb^;*hY#:/uo1d@I2g%jQpPQN*!z~~' );
define( 'LOGGED_IN_KEY',    'HBN<tm4@e7z2^-o8Pv*?$vFbV_k]J1^hDi~@iBzc_!tJvUsn:e-;5nk}KQ]s0bW1' );
define( 'NONCE_KEY',        'e:E53)]6~IKD1)I*!h}W~6j&bwKnW?, |j#bMJM6d-}3{8=NEcrX].mXn@,2K0Td' );
define( 'AUTH_SALT',        'eY|lf~K<[.6a;0rvdTl[52:yq~]G:QEuYD?CC$*Dd*!X!KHZx_N6Q-H$KUQqsg&x' );
define( 'SECURE_AUTH_SALT', '{:]/q?Z.j(rv|#ONNUkpX]>,CcZZ>9Tqvqm`IK_5D;JweAE}?Vd$X ,G]f(J,a*c' );
define( 'LOGGED_IN_SALT',   '*y-<-p]k<o6KU4_%($TK/FE)6m_@]B}} ^!SDs<{cB-<z$Ie~P#w,WVuL&SBLcGp' );
define( 'NONCE_SALT',       'o# (1VfBX0Gkt_wNo#:e4nN!@ C89>GIg|isy#!;Zp}M{ViiD.[=Rtsdgpp 9KhP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lmds_';

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
