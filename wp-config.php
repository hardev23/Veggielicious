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
define( 'DB_NAME', 'veggielicious' );

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
define( 'AUTH_KEY',         'gO3:0}PWDwsG?6`~YBhGWeo(=FZc<A@Co<o!51[wEPNxSeHYptkgn%?$c!jNSV!w' );
define( 'SECURE_AUTH_KEY',  '4.C-].Oi5_85_4,F6D/g*B-@|8ju3tBM_p-!Q@#8omlhl#<Ur;LQ%+!,5a(IPn;(' );
define( 'LOGGED_IN_KEY',    'V8pql0FH9}8-dLDC75#czt!+:|ytN3y8~ZfLEvsnqcB5Xkj%U5n0V|?DO{hw!f/g' );
define( 'NONCE_KEY',        'n$Zma0Q0HV-srUe1Jpr.?eMW`=)eDZ:[I$(cfaDX#7UTgaE->&S* Ev64U}6UV2P' );
define( 'AUTH_SALT',        'C_f^?[++Lv!X-eWKEId]BWnrzaonLyNcWlF3:kS#DF+r_}ed*ztF%<1ZUE`i>dtJ' );
define( 'SECURE_AUTH_SALT', 'pgyPRN/9SW|:M7K:BW#< {DJ|wql] *q+%Q)LZ5ha$@h)|4.=mIKpD f-{NbZ?aH' );
define( 'LOGGED_IN_SALT',   '<l&tFJUDMn/yB^?06l8@W.Y:!58,AJCDGaVpHZX)h$$,+^Daq0pru`Ov8j#wC9()' );
define( 'NONCE_SALT',       'uNGntzF9m6,(>:{2uT1Bq!jI>F:,u^_|d[hD_!Tl3>oQ#:]><2K!BH^$taT1K#=;' );

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
