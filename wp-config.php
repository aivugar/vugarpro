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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'd`n;SPkkNuw4y<UWRim94b!o}47T{]YMGDIP?k}w/r~0iCLS+F(Tf:+OxD5v;HVc' );
define( 'SECURE_AUTH_KEY',   'jcF`ib3r}K6).>VsFR!o*_;RruW?_:|q2j50-5}=~J<F&PT)=U$j#E#pEqf9{W21' );
define( 'LOGGED_IN_KEY',     'S!Yh_ngxjo/K#vc XO4`f_0d08L63jx%I.-wT<~wJV Wvyykfb$M$snJJMmLXL~&' );
define( 'NONCE_KEY',         'gTPjR[|.gX|niHK;)K]jA[4(hz%k)|?dIIl@aRgm-?q}#b6^f<]MSx^HX?pVNVQj' );
define( 'AUTH_SALT',         '$=NO>I<N~}f,i};|0y[hxWZ|[ONnTc(Hz#a}1@</}cbw,iHgL88D?7>8~8)E)7h#' );
define( 'SECURE_AUTH_SALT',  't<<nH9~6zu>+Q1j!5o_j[@&lzpPil}e$}I8R>p#`%lw}TwBcv.bo?qcv{4&*k( A' );
define( 'LOGGED_IN_SALT',    'KSwEzh3i-6hw{czhn V2qr4qr]]+SVZ1o:3s[:EtP.H?bl-1MKa+$p&k(CM*Xc6O' );
define( 'NONCE_SALT',        'w`W6|,{g>{X,<zrtf)s[aOTS2F8K[%OKJIZZV5p-1^B zkkhJ@>8KJQRy`bF{xH$' );
define( 'WP_CACHE_KEY_SALT', '!dQ~c/)DOc&nL`.1*{u4V,}FO>*5?4&uKN[n(!*4b0 B}@a4U.I)xfDec$%?wIMD' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
