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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '{|t)17|/(2+c}I0$ULJZgV3$?)KkKD`d3hYX|&{U=/oz{hVc3e@OFyWv[,+KDln?');
define('SECURE_AUTH_KEY',  'eo$Wsj^|k1UvA.D$&%Ty-W]%3,EgXxA8l!_ntB::$(@`XewAgZeX2Za+]8aDvD86');
define('LOGGED_IN_KEY',    '[:i!!kr,n7QE:}j3T- LQ#|<Za-ZnOOWyYwd-aD4m9YNiR2vZtEp<Ol&j#yP@ D]');
define('NONCE_KEY',        '9oz[kqL1Al=|8BJ#E15>+|_+nDmls-q)r}|!z->+<apMd$L*SKS)eNtKpTn$2dsi');
define('AUTH_SALT',        'H}Nix|;PG(|s-9WJFab>=+-oxp[j?Pv%Zv~@4LUKlN]w+)53Z0gM%{K_olOrFb+z');
define('SECURE_AUTH_SALT', '($#%i0W9),i=AX)!apNjxq)2MX;$#R|*|jp*Pyr26Hy_fW;QSI-bVUr?|];NAtiF');
define('LOGGED_IN_SALT',   'C12me1+iy6AxWXvvbAm0NBss^K^Z)043kfi9ZPi0kF9k|{T1`=-%HhH.S0E3XuB;');
define('NONCE_SALT',       'y<zEo2QRlMQ7=78d~^Z$z<O<-.s5(!vH,{WAYYU^qdObqC$Ux?M]V=_^8]V]bM[c');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
