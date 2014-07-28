<?php
define('WP_DEBUG', true);

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

/** Site URLS */
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', WP_HOME . '/' );

/** The name of the database for WordPress */
define('DB_NAME', '{YOUR_DB_NAME_HERE -- PREFIX WITH tmbr_');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'c$ <?L|:B@!wC&5D?by%?ER,.0V6i)$*t0|?wxz %Sg{bEhFbbPj/]Z})%|HlxBO');
define('SECURE_AUTH_KEY',  'D<cQT6ioPdwaqA`|Z~`!B$A:+&TJw1|<!54D1|U!eiM%a4|`S24.#U@/k, .MU-I');
define('LOGGED_IN_KEY',    'a8;$S|{Vy01(O+_Rgjt|!^O?8>on[~:?rn(srh1Sh$|7A]X22/!:ecb6QGTts,Ln');
define('NONCE_KEY',        '%qm-MfpQ,h-D#W}*1Lmyf4)T)u$ctl ?&Zf}HMhcYVuhYt+k{52QK}.e+15H_ypE');
define('AUTH_SALT',        '*`NpH|G+yzU+mRloESnR?+2Iu~H!vTD*PTpl-h?|,G)Do1:*lT4*gys{uxx &LPx');
define('SECURE_AUTH_SALT', 'Qde2f|E2k &R.^ s<)?N<_+(up-5R(ys=|iK_@$e^SHK?NTW00-{.(qa+IgUj5(8');
define('LOGGED_IN_SALT',   'h[V?bl|9>B;f+r-qS-/@CiQ|Hwb,EJQuV7xQ b<vguU.~.)z4*77wZu2Mf9Oct48');
define('NONCE_SALT',       'y;|{89<6`t>]SHGxNbB&EP}89+`?<84:zuh,c63o%nf+2hH<0<o|,Z^MrH(pj|_a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
