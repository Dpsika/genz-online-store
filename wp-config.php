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
define( 'DB_NAME', 'my-shop' );

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
define( 'AUTH_KEY',         '@XBVNKDqxo@(c|L.gL?{;R~[LR04xo9tiH:0d;QZl@z2L vMfM^~K.^h]H^j < G' );
define( 'SECURE_AUTH_KEY',  '$Y/]7`G,PbM]tG=.*|)Cm@N$C0&))7,a^,3Sl]M^cXYTL=sm+(!B@V+`6Kxpt-+K' );
define( 'LOGGED_IN_KEY',    'CS+=Mkz+g4m1+#g`$[2=|EKaEaE;b)sX$;e{~J>,VA$Eh=24hxbT#9*2XQKZtd!J' );
define( 'NONCE_KEY',        'zUirc-f=6v[u2mZ,o)werBzp_`JH_mTbHl>>Oh/I7/_YkTFlQTZb*Yx7HzHbRGNc' );
define( 'AUTH_SALT',        '[)?6>w2L;xkMUd#}9qBol#<AM<HgMH+nwL.BX<+z7KLEL?v$a r0:+a%q/-/1kvO' );
define( 'SECURE_AUTH_SALT', '34-NNeG*gQbd3?>2Z]H6W9^z?~x>6g<_BFbL -!Vqfch dQ-(OAk>%{%Cg$VArPv' );
define( 'LOGGED_IN_SALT',   'StA~q9mK{Jvi<3(|a,*IqJgv}l-A| A^x6=1c!&Rrt4~`+>@MN(Y[9gx?fOc:K9i' );
define( 'NONCE_SALT',       '}ViQ.*1BRIQ :>FvBcOt#T`bj4t]un$u)r/.Te`B]QMFjE7?:/7fw,^&u5VTns>c' );

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
