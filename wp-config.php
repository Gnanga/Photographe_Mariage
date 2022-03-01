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
define( 'DB_NAME', 'photographe_mariage' );

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
define( 'AUTH_KEY',         '[5hz[&)>kL(b,})a=,}Gh}f}n-2P{%E2v&{R8Q4,lo4-A}g+Slkg)F&n2-L,C!o8' );
define( 'SECURE_AUTH_KEY',  '.IfeZh!${)qZMku*R9U0)EAE.74bkw/X_Udc4_wcI`}]6|snS|;{rX}@0+dZ/)/I' );
define( 'LOGGED_IN_KEY',    'cI<6rVZ;D$`pLx|[gU>N&@aX)!57>kzAm=EeAn<dN&fC8Zz)Cf.p!e;)DWw(8G)D' );
define( 'NONCE_KEY',        '#gShr.jB4xl]/i4UQbrz5o}H=],L8-fK1 ty#(L4]x~H=NGY|l7AeOtFJGrm8N~X' );
define( 'AUTH_SALT',        '8&BFQQ~L-es3tf$NN>.u]B::^jq{8e5]JRtQ[KuHEBWY(jb5PexxehJV6>j$Q4;!' );
define( 'SECURE_AUTH_SALT', '6j&gJWgH:#Aqd9vgZqCI`FqVyXJ@y_?<4;tzlb~=*H#Q70J<D3L6dNv:uD>[+cd#' );
define( 'LOGGED_IN_SALT',   'J9P34=3G_:Gz[l~8crxjGpU=%kX#JuawoYs-?WX%/ytBV12)=QWxmO5+yo6%oxfM' );
define( 'NONCE_SALT',       '}+(a+^T%1Hh><,z0pgpVJ24z)9q<=ZWBpG2$i~>f8Z+.mLq1?sgg&X!<;]p.X|{q' );

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
