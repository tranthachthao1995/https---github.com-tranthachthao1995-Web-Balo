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
define('DB_NAME', 'balobola');

/** MySQL database username */
define('DB_USER', 'balobola');

/** MySQL database password */
define('DB_PASSWORD', '57125488');

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
define('AUTH_KEY',         'MO1pl1+h?-h&f81>l=[+{*s&X(K?+}zbg~bTH,@+)s6myxaDZN[Awnc-;yxh9G3s');
define('SECURE_AUTH_KEY',  '~I6Gnw;wj^`BksB;mQ;WWO_Xj3cV]+8=*u8IjGznM-U%,>zP,PuGlh0+m$?>ow4I');
define('LOGGED_IN_KEY',    'eWcz+lcs#a2]#QFc&ewW=?h*y+O7c3ohHmw&F[)l|U^OZi1JgR~:W)^LR[T~wl[=');
define('NONCE_KEY',        'x<t0Z(Gep;vM(@(7kPnUX(RDM3Ml$UV 4~6d@3iPrPT7>|RJKGMLY&/~l&uV,62d');
define('AUTH_SALT',        '}m;K#k:J^[Heousma#Ah~|?wQulZx4)sC;b$[S;^#Q*#m1eW6;lJ]YM^M(-xk=`b');
define('SECURE_AUTH_SALT', '96wF>gh;i:2;fr,SW?N-)Z=Jy<r+bE{IR4?BE<G*sANPc#aVv)Abz^}mrEtf,Apj');
define('LOGGED_IN_SALT',   'd~z9B$c,*rTxx$YG#}VjUS=*b/B!(}=sAF6H2hHv%k{;K=OCiRKs-^>Ali|H-sXP');
define('NONCE_SALT',       '@y.UONDMjVLtd@JGVZY,=nFfY +.0B6r Tl7v?UO$I_hQ9~fz4[}?W+mET(D0+U`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qt_';

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
