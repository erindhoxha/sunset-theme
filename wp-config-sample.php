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
define( 'DB_NAME', 'youtubewordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'UO-Eq4[Vk_Rd-5qLu d@^MFC1{kaq^+1o=&;8~J-Kk/2y)!4lO9-<G?-;QVD2Yx?');
define('SECURE_AUTH_KEY',  '0hgDlmARd(x+_%;)PKsS|I=sEVO<cM 4Dx-+ugZR.MDGlLnlo++=K[T0NC<F?4@}');
define('LOGGED_IN_KEY',    'M9MLox+R-[|u%)D}so%=0-eQ1i*lK7-}OHf9lAi,V(t[75-_vyw/z|y jZf2}X|E');
define('NONCE_KEY',        'WvJZgtRRIh;>!KCV /P|->I?vG)8+%bfeWe,+=`C<O>:b&UW*C:lF5bj`C4}S`LC');
define('AUTH_SALT',        '%>5kW$0v7I*K38]w}B]TEu+Rb1gNL+n3!Y5<IAPLH*57C3mWkQWFMUZMHkZ^4xP2');
define('SECURE_AUTH_SALT', 'QL-3T`)wptNZVV*7Z{]+ CMKN>|&3x]>Zo:mNwHp~J8- vWY--4K]AaC/}]<^P3t');
define('LOGGED_IN_SALT',   '7cLuI3D00wJ?$,$R.Qk!zaR4j}S;Nxsr--0.^H}h|:!`!vdD_<j]oLzp<{{uvYzd');
define('NONCE_SALT',       '[lPy>-ztO%t&w=WA1b@B.=hc@rJ_zN>c9KF-G5+-gEZ;#,>qew/h4+%+:5n19 u[');

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
