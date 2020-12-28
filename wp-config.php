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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`Q(kVyF)XeUN7S7$K<#_LX CePTW)Kr(se:kD<+2Q];{LkNoR?E0hD?MZ1x5nFkD' );
define( 'SECURE_AUTH_KEY',  'eV/`KB-[w0P_x4D,(ISr/NWv=tc&n8.c*WYagGfhGVHM*U.gDiO<XKF-[PQKJ>Z]' );
define( 'LOGGED_IN_KEY',    'M6~fY2<2<V#WA OsDOnnlv&(Eak#2`kg1eVeik6$_wxv7@<I$.<2Y;__Nh&HS[J3' );
define( 'NONCE_KEY',        'G~A!.[}N!L? V&ZwQ$|8X~^=Y8f`eM2-,1`>s%UB5~YVxvqUY0Fy?;Z6ob?hSi0P' );
define( 'AUTH_SALT',        '(Y6CtXW[2=^7:Cq +fj*T<&3>kRUHYp`CsUi6b)NI&E+zc9U *&-eOBECWUi.7?8' );
define( 'SECURE_AUTH_SALT', 'v17q2H:An0_Cd5|#h!#=<iJ@=_|_?*~]g%huX<yGT]$0.yp?9sB7v}T9aXiIabuK' );
define( 'LOGGED_IN_SALT',   'EY`` HG{6`G+,;MqY-@$H)d~,yRdTMz<8L1fO2bAWT/nRcc,zK<7:w:bzUg,oqL_' );
define( 'NONCE_SALT',       '8T>0-77&^5exw{A $kjC,,+cM*yVgxTxplsU-]ywqb6u2==CR8rA][G`awm2o*FK' );

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
