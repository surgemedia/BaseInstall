<?php
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
 
/*====================================
=            LOCAL CONFIG            =
====================================*/


// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}


// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'brandpro_qO2X23H');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'brandpro_tb4EbCD');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '{UY=:vM\9]<"*:E)dnQ;N[=?6$p!s');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&3.+h.uS4DWS|EwWttcH+}ceLYM2N46^|(BFO%z>]iDsqceawn4kS26o5.X|9Irc');
define('SECURE_AUTH_KEY',  '[ri~G]l{Z-is~.K|IrBRT+A0]|u|@j`g&MLd#{I=!Q.6=Y}jIg3mcPiLUys^Fr~t');
define('LOGGED_IN_KEY',    'T}:KE)X$Hv8Y6Ch+,X-tX]g4t<b@$hqs+T>--7uhC8El+_iqumOY[-AL$Gj#@{.`');
define('NONCE_KEY',        'Kyw[.oiuz*dO%JU$<9Og0+sdDi2p+JXE&Y$u,:Bm|9d-l;aCre7hn%XzD8)W$?1D');
define('AUTH_SALT',        'LoAMBzrA+WuAFtt?!|NUBAU}o+[GuG^?J{8Tdi#8zA.uxKD>nk9RdxPdoAkvc#76');
define('SECURE_AUTH_SALT', '3%;BX8wlY|EAL##aigH[k;%}w61eGLZ]GKWz5HGk&Tc6v!jdw2<HT5r{aK1|A[K-');
define('LOGGED_IN_SALT',   '#<Bsgu`{xQuIljUUT{4V_|@`jJn>uvVu@ Snr^hQ2#kHR`[n F|oK=2Ll+~W?&w1');
define('NONCE_SALT',       'P~n :1bdxbvOK<`Pwf*BL[DGPQ9`+B!;jU|3#clFBb-Q.<Y[(Ob~9LM++/O;&[:=');
define( ‘DISALLOW_FILE_EDIT’, true );
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kcqe3SOM1SE_'; // <-- GENERATE A RANDOM PREFIX
/**#@+
* {@link http://passwordsgenerator.net/ WordPress.org secret-key service}
*/
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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
	define( 'SCRIPT_DEBUG', true );
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
