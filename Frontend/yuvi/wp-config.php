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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cloudwit_profile_db' );

/** Database username */
define( 'DB_USER', 'cloudwit_profile_admin' );

/** Database password */
define( 'DB_PASSWORD', 'Cl0ud@dmin@123!@#' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         '/Chrr.3)hLlCl5C~?[~~1lA<7JpY(F3;QqE^lfBV+AG8x[=[,AOtG <g]78ENyb_' );
define( 'SECURE_AUTH_KEY',  'QU#gav1=]rEUh){KiXe2^vkK~bZ2Y!hu`L^?}qGuWc[A,dgME[Ycmp[wkZgr=.EG' );
define( 'LOGGED_IN_KEY',    '=18:^;T:q`vC&ZqGwh(f]k8X:ajwGI:kY5p];5Gq@tmeVOXD_D0N^.~*L&&vC&Hq' );
define( 'NONCE_KEY',        'E*2g3JK& 61H^G`x2ZIp8jxFO7B`HjmxZZ57eiiI.TQgx4,p2o:7%mD~cJQ26L,f' );
define( 'AUTH_SALT',        'a6Sd>>-*>ff:vQ1pI*nz6Pfy;YW;Xm <H7x4tRj+kI5zD@f$R?N+;MITvu[.+XAj' );
define( 'SECURE_AUTH_SALT', '8l##C?D>>RB-SDK/v^/^qaF.a>p6M&rtKgNa>bDC9gV3eW*pK4gh@??Vt(xmvZXl' );
define( 'LOGGED_IN_SALT',   '{(W}$qtRq39l.Fy2;_9*/TPD$Lt}5n$My?FL.FF.)]=AY=uV@Ec|Fzr^FnkS.0qy' );
define( 'NONCE_SALT',       'u1}fSE!eQ0</W~ybQaF-{JQYc*.hiX<](~L8j.30fTxVlpNldF AkxGXe],:uRb(' );

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
