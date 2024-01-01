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
define( 'AUTH_KEY',          'ZI>IR_bbD1<_C,(Ighs]V|Zz1Jt`$V&AaLqWdCgOXADA%_Z7p)v#@qt0d,|:4Fm?' );
define( 'SECURE_AUTH_KEY',   '{gBO6fTcG2qu0J@)-XE-__J@xG3+)Z{._ ^jgxbL(R<@A2o>6QEPManq|R&yA|fN' );
define( 'LOGGED_IN_KEY',     '$dlT-]6&o?OI*1s4SS!MN@v>7BJ#qQXO;H-*>6e$Q9VwLMc]9v69>u|GL]|[R8|%' );
define( 'NONCE_KEY',         '4h6+BAaE2%XND6JohgA>5GAMl4tGg$t@t{xay=X:@73cHBKnDv*|YZZ^;4yXKimG' );
define( 'AUTH_SALT',         'wi-GJ03zGhZ>@%re:goV.xiXgJuW2o3J@z1nOE=><Lr@H}; u*n|C$ynndmZ(*|V' );
define( 'SECURE_AUTH_SALT',  'vd(1#o6X1&*sG*r}nkiCcgIq!i{]LsZ-7O2FTXcq@o1$!T(%5Yj@cU}!|;7ZC$pu' );
define( 'LOGGED_IN_SALT',    '[EUuztcC1kQ/fQ$|7Hf]9VF+4 &[.V>;~~VWb~ptvovFq][bDpoR;Y~[2:h07Cqh' );
define( 'NONCE_SALT',        '0,(yRG7k*S}%g8T}&0OvR7=5>T~j%jj^~jK1@4KGZM^+kR[{*G-sCr#5fT,?OCnt' );
define( 'WP_CACHE_KEY_SALT', 'fXWgYB gEtc!V^[,K|9n(yt;*./#:a}K0ii/Pg]p,:69.*3@s},>#Rsqz/!i_ON%' );


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
