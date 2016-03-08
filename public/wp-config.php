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
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H]-uLN9/q-+(ZuxcG[~nnGSqtyjo6{ZjrxcVsi/Q)oE|-DHgsK+p!Whs,+>uKQY.');
define('SECURE_AUTH_KEY',  'gB6H^a!a!5R_a}cL2}s$H@|Es(GI!n <&u:AA20-o*+6=Y2]8U|#K9uYG!pr&+[3');
define('LOGGED_IN_KEY',    '*FnTPIT|,+l+y|qkj4S|3&KWP nh1[QzfB=-!U!*-?A~:~/O[oJ|3&}d) n)6{*b');
define('NONCE_KEY',        'to>F?!?|6mEV89kXFW]$~X6iV*v9+OvZz4A-r+]iHqr9o`=6z,_!{gs<cqGdB(|K');
define('AUTH_SALT',        '9YeD-b}}>{N|ll(DKX%a^Z_E+|%K;oE6]}6c^I|tO3f3rF+i_`EouB!t{v/7+|=q');
define('SECURE_AUTH_SALT', 'oTv]b!||-)df45O-xMwp~o[fco2LHKpoDO3u5|F|u)_)wS]LI@b&9+&FAys ncCq');
define('LOGGED_IN_SALT',   'dE3}J5J(puG[b2w5%)hiBO?c<<8]R{nc^%2xAtdVm%b*(|gTHZ !<$y+V6,hp0{4');
define('NONCE_SALT',       '(V`y>kNI+X!mcyr0pO{Vb|U(C&+dX$n47<~:e1&[ iKX,*ZB!wA.1,VY|$7+e.Jf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
