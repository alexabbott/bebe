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
define('DB_NAME', 'alex_wrdp2');

/** MySQL database username */
define('DB_USER', 'alex_wrdp2');

/** MySQL database password */
define('DB_PASSWORD', 'E5Svk6XQjVUjv3nP');

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
define('AUTH_KEY',         'qW5Q0<p1Vz9>1@OqMZ;v!4eej@I!??oVXVt;8vXIXhof~wR?@0DtS0:qlFAd>sDSX3O?Zn');
define('SECURE_AUTH_KEY',  'GGDmT:xi\`FAjKAq6kV:UvU1*~9R=a0kyfn_s-cDBY6:vjpoIur|=8i|JkeUGej~ldG7eOfoz4h8h?hp->aYCk');
define('LOGGED_IN_KEY',    'og|v\`3nn\`Y|61tWPLGyI1K-qjoC90JfOHkN!*Z$3b~2>J7m?yEY>V*kq|EM*iRymw^735Lul3s(R_(');
define('NONCE_KEY',        'BJKlFcwR(>VVc7|M/07D0WDzQ@fC9aH-6$3*g:?2g<H!\`y~<T1j0*hTh>|0O7Q=RDW7X?ZoXc~_J');
define('AUTH_SALT',        '\`DGwyGKyfwoLJ@il6I$l@hgH)GSRrVRkt2uwPiO-)IF)2lbtQE6B~~0ko0|BYVvPagl4FUT>');
define('SECURE_AUTH_SALT', '_yAWV2W!2_L6=zr$(ECD602BBUsJmc3n-IOZ2#5(9BnN<~vWjUmHXk1E4Z$gSi3iBTCcz(|:y');
define('LOGGED_IN_SALT',   'aUm?!C5kIBFPm^u3An=19bss1Brba$0P)XS1NDSzb>2(2aNnR2VKH;FeDs8e7bYO0Hk0vq|/P\`');
define('NONCE_SALT',       'Py0;Y2|)(#ml7s8Z3w9=lq<!qS;R_iBG@r|t<<B3L=29qsFyzSgebkxCH5X#8i0U/GzbW*');

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
