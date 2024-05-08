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
define( 'AUTH_KEY',         'jQrX*)RG<c!)A0r7=g8IX{FtY]R,9xtzl)o#r K0$(]/Tw2n9.!29F;!yA-Ve^`C' );
define( 'SECURE_AUTH_KEY',  '[gsk?r#1>&1sL+[ye6C?[kO%:6R@-M:V8Fbhx8=vQ#.j-AwY,lo___gTP+OF!Wf!' );
define( 'LOGGED_IN_KEY',    '(. xv]^t#qp*3i3<!p}k>8Je`#n#Id~D,~KkY@as>sq6RcO?m-#TRw7hhzz:;>z$' );
define( 'NONCE_KEY',        'N:ZBgT1XvrldKT44T|KGaQrEzX;YU`6grVwV5Uh4*Y.k;#~-&u= qHKyGv_nP|S;' );
define( 'AUTH_SALT',        'ml*~S%uZ7lxZe;,{g~dF75n~c[JBv/GUx08#ylk@75^ N~6=t6{wih>W&&+a{?nR' );
define( 'SECURE_AUTH_SALT', 'Xu$%^x,1:Jb@J@>a_P%exE9sf)RlKZd10ll{J0@yfelH4;[k)2X@O9?V5Qx6eFhe' );
define( 'LOGGED_IN_SALT',   'JNLmX-N&RPz|Eru.*fyp3Y1<V~KEcEzZ?JJ H4}Q?}y9x_ii$9}r{:jz=s(hWfTQ' );
define( 'NONCE_SALT',       '>^=%)Nn,HG%z]c#T:;FVo/Kl+iI(Wg?A/|x8[H9>R0zTRy?Rf~F!|~Tu/?/D|z(l' );

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
