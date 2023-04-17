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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'rFsL-Fn;:tv?lKuB|5{0-0^kaszBpmJRRL[Q_4<L6BsQZC 2kNX$JiJurvZb ~+h' );
define( 'SECURE_AUTH_KEY',  'y{4Z+?:Vsq:B2:BS6RtVbLs+Yu3.*fO8n ){dsJ0B?tc_NUJj/B@z*+_aJZSd4Sz' );
define( 'LOGGED_IN_KEY',    'v9czY^KT S__lt|6%/A*C${_T[4]slo#LASTjET$Vhvz79d+9v4KB7jrd6k.TsFG' );
define( 'NONCE_KEY',        'gB!E7G.OkE@p3H7 A%JtyM{M]MZh{fD=U))h|;5&Hz2VWjh^bY*JR:0POPB L/Kj' );
define( 'AUTH_SALT',        'mCgS$(iA;AsWu1NCe7]JgeV{i%ImSZfKjXsY,)),w}j2ySm@#*F#NUh&Yu)<O,<3' );
define( 'SECURE_AUTH_SALT', 'Q(U)dgn-0)sINcLA#25hP<C1<OX6xdrsQKkCCC)8c+2JOFy-?f_d}-vVRl>NO2&Q' );
define( 'LOGGED_IN_SALT',   '!nJ>IZ&u7WJQ?vtB3tyE=/ZJvFh;k*!5]EKbJKJI&l&}I!47@aK^paChY@>0GD62' );
define( 'NONCE_SALT',       '-}E+{.@K%=}q5T;< -S({2(f2SfF5*qa(oAc>XvI}4G$PCW$#Ng0B!Oht!XY)XSp' );

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
