<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '*MsI`DOo{^x|689FK]8Nwn>/7zfZ|%%5)^0,TEt( +zk/+?0|oBP&$;{1*N;fag<' );
define( 'SECURE_AUTH_KEY',  'yuq&bUd#.Y`>o7E~|P&#Uzoa2TR7`JdHajD/[KlT*z!cud<~v{:6pD7)@%J2N4YP' );
define( 'LOGGED_IN_KEY',    'ziN26*/ml=3(DSNaU9K(Pmn:}3cp!oI{h/wm_<;pzm>noE{3HFJCIJWVL%T9SE$x' );
define( 'NONCE_KEY',        '`^.J12z,~d/y#tpu?xmOXByYPVtwIS9zP(a$G@d3_S_A^[o0E<,gtY4wtOQUFuWT' );
define( 'AUTH_SALT',        'BD^&6%>E83<.BjgOgV!y)_1>+GWv5<zLw]}jyoRZ$}~U7/un?BL(L1JLXKXIzfmt' );
define( 'SECURE_AUTH_SALT', 'fg0SuuYVWbX] r3!&=-KD!@o#aS?>7EB?itpXvW-p?#laKMG.(!<4)D`;`2! oXs' );
define( 'LOGGED_IN_SALT',   'o=(Ok[Yxdvr>cG&yCLwg{n_37tnXq;6%G2n(*Kqg>dG61cj.7(;+Iy[zRw_h6*ug' );
define( 'NONCE_SALT',       '3Z)2j-b[}kC7DpiASzMM5+f6>AwiKqVt;_peOa08S5300{@kEQ; {h#PmE<<AgD4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
