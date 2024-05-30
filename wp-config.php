<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'appgurus_new' );

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
define( 'AUTH_KEY',         'qe#t5pQ,CYB{ya#C3hQaG87dW,bz+[i4)btL*U/>cAkKH-lMq:XIa<!qWN mUju/' );
define( 'SECURE_AUTH_KEY',  '_,+QZ>x2K/7 6eKs|<|#qlqG{QL`3R@v=_11+^05gRw*z3QCg^W+H3xoXvhbGB;h' );
define( 'LOGGED_IN_KEY',    'zR6_Lv6GG1nVO{5`4SCm)DDvT*?bn*)Jd&)A#%g}q}sxX3eg7lD1YmY3#wri=sH~' );
define( 'NONCE_KEY',        '.6QoG4b&HN@XyHbzqge?#BVcSF 0LB&gbfThd[vQmw0VGJ4v~x;8a!^&5tIZp|xg' );
define( 'AUTH_SALT',        'd5a7n@TO~;T@FH+QdO~T&TE3;F!GG0[:F_U,1nkX{k|6n7p+ gpohv.b7G3>aWXK' );
define( 'SECURE_AUTH_SALT', '2QW!%Jy@Zd .JW*o?.$p@>swy4PjP@Q.[Q8}VuSe+5mIMg.O%OikLX50l]]TE9ES' );
define( 'LOGGED_IN_SALT',   'v2Z#~pHP&7Hxa|nibqQp|$1qxDvR>J>SNom)2pJmxW.+K3< k,UM3qihIN0a=,KS' );
define( 'NONCE_SALT',       '+Z]-7]=l|yya+qbBT-V&uh5@wE3OKBl#CrID>R#-]Nr5_0z1qb:RA8YrUy??-%!_' );

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
