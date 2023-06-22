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
define( 'DB_NAME', 'foodblast' );

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
define( 'AUTH_KEY',         'o(!MEiv/Wap)IGV*$0,Pwr3~%#gx*/fwP7rsboY35?Pq++5AA0 tZdvw D~d52H^' );
define( 'SECURE_AUTH_KEY',  'u:o4o:7 =<hnu+<p8,#2gOr(i)%@t]/keKcs5bm$8Q3+<-jnw^+U5`uE,JSQeTY(' );
define( 'LOGGED_IN_KEY',    '|{}3XgE_c?U|LW#X:0(Z~tS*7^<1S6^upBHL[N`@WGeXF_!UZ^90`/*D1ysvmS[O' );
define( 'NONCE_KEY',        'YA[_>b1lsngue@.r6i}LG:2=6R-#6V935#0>-/S))P5d&tC*Rl|Am)9{QNiz!7()' );
define( 'AUTH_SALT',        '+y292woC/3)h=|M.5fq^=ubtnkC*u4KkF`:d@d?%PsI0cr*A@E3gaa>8vSP5*GE3' );
define( 'SECURE_AUTH_SALT', '3b}LP<M 0=iQtx~tvn7+3E,u1L$^Ui[GYJjw&H)+#{5X+mxWR<NmhE VT$}!DG@k' );
define( 'LOGGED_IN_SALT',   'xdou8UJ.eu_r1O`?U>j^dswK]n F~yD7&|RIqdpT&}eGM8%4[JaF0:0G} [vs@RI' );
define( 'NONCE_SALT',       '$&*SMT)>oQI:r8?k?z]g@n@/3hqL!s#7m PaZ^Ue7by.Jh>RqC!|u$ENpLMUyJi9' );

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
