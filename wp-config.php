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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'oP[L<@Cd0Gx+~($LxFGOMx0.+y^wq9`g^M{x[0ND:)iSN@C9S^pS<fn+B.yS.I ;' );
define( 'SECURE_AUTH_KEY',  'cnWE`(wSOTG<+A[{-mc*aTgAbm!MkZ2+[CL8IwICJqqY(oe_;S]9<//]X+AO0W7;' );
define( 'LOGGED_IN_KEY',    '0e;?UsTf>80k*w@kGGF[E@U4T1M^uQ,2!+ObG![;- ]F3u39!2FhhwQ_[dCVG&jg' );
define( 'NONCE_KEY',        'm_ri0(kP+C-Scx9`bv3A`(.IRlNI6T}9g2Dg/P`?%Ym!>%KXLN8{KRr|JE:Y);@+' );
define( 'AUTH_SALT',        'd|}?).$foL]Zq8l0V~_AWPQSRMFh0k#uUXyEdGS4^`F/g&,~M=9%5o[:yyx{=*EA' );
define( 'SECURE_AUTH_SALT', 'T=y@1F@(n~/4g-eE*B^M3r_{3:0uHFZFR.;uM1[?sQ`Aq:Nj4KvloA;% &iX{Y}9' );
define( 'LOGGED_IN_SALT',   '%xA:Z+L}&)9*#LSqEnQY|:]i>#|Q?Tnn%!sqcJJ?|65G%;m?(BA ]NC+)DN`&X]n' );
define( 'NONCE_SALT',       '(OO~$vo<mo )(:3WH!n;+cg:]MmY+W^$]Vfz)umTX+^gvO.S9xkT=`;ZrEdg.77,' );

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
