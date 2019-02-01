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
define('DB_NAME', 'fictional_university');

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
define('AUTH_KEY',         '%(0b&?fi{H(J3KaAG3_|e/rQSFR~`aW5)XD>amnNvSRwQt^7Quqz.YeJ}j*yB{K9');
define('SECURE_AUTH_KEY',  'xx* c *zg j.^~^aJ>nG~(ZV%R,?bs2iVNUG2V=N}]X4OQIHl/8jDm{R W2G}Z~/');
define('LOGGED_IN_KEY',    'kcyVRo7y&v_{~>vG8#{1]J[mi$kWMCDW[O%Cmm~H1(Q6lj#~a^!O4e.j,ItALXt>');
define('NONCE_KEY',        '!2MF8Pf9TN8(bj6I;i|R4S5(p7}{@JC0~gb&=;)@I+!&^ze/` C?Y`;8seB>@N}6');
define('AUTH_SALT',        'd`V -3Xj);8H!lqw=#AKMD*TDN*jTfP]+{To*o-V$@,k#Io}.ZDyCtK69x%%(%pu');
define('SECURE_AUTH_SALT', '<!&P<7}=q!F&zTS&z&aIYl>8O]a{#L-Sj=U;(@,!1UtZlv;t$.3%EBfn6_B+kiB5');
define('LOGGED_IN_SALT',   'RRcw/NzsD8=r9-6VFZBh*^m}:UE[ZrUl S/Mih-ajg@5ef+cS>AG70^T*=8QGuj7');
define('NONCE_SALT',       'R+7~!Z~H|WXFcIsD<7Z!p&?~7{UbMOGZ0&#bS{6@H5!f!/b|ZI@D.Gtp Qp?x$}~');

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
