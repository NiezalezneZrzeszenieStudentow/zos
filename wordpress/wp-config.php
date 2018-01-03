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
define('DB_NAME', 'zos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '9In#?d&[)f;$qQI26TJD^8ux+P)2WO09hf^?PKZ.^tP{bY;XII#;$POM%4]0<*n*');
define('SECURE_AUTH_KEY',  '[p$l0_?QOGTX?Jwc701S;dN6``t}%0NBq%6wM8D_qsV%G9ebGQ6?Sw.Ejs`Rt&/2');
define('LOGGED_IN_KEY',    'jMUp]d#}H$Fh;;(7PbD}(J:4`x>39X>``V|I+-SC) =|1^zral4^u.r:iqLI:_K%');
define('NONCE_KEY',        ')gyp,[64,0S)n^EoP}]A7IWBC!/C%$}jWs(,~GPc3saM _fUk4]qDP$TG:XF:d<K');
define('AUTH_SALT',        'U.J_mfq9qomL`Hk;Fl6BS^|Sz2j!D_u[(7o8UblZM;Zu,;b1~RmK!gy(p[ W1GbL');
define('SECURE_AUTH_SALT', 'mTt2VCa0IB4i{+q|*yu(mcJC,2vSEEX^cEV^!=ROIPilu5]^LJXE~<-Sefd]_N#D');
define('LOGGED_IN_SALT',   'D@H,i1uA15fo&Aoc7]~^Zm~*%zN=Nv~UWLBz,6PjtnfMN`YGX/`N9S3Uf]v/R#C4');
define('NONCE_SALT',       'DQJn/$k~fa$CDp0-),2DS,5964!?TY(!V,Iz|nm&2gg-bPGa0IX]VPIXfR:v*#l=');

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
