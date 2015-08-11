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
	define('DB_NAME', 'basetheme');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'basetheme');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'basetheme');
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
define('AUTH_KEY',         '@FrFv<j}m}t%[vuh)JRM2<ao-.C^%5y@0(@|VeF-)$Lw=j35JY]b77NT9Y;9qP[d');
define('SECURE_AUTH_KEY',  'O@$ [-+W0a6%URfo1SFy5+B9<YJM~6cqL-9-45myvcNF1)+Dh+c[hPC>fth:YX:-');
define('LOGGED_IN_KEY',    ';JLb|JjBfKc`hfiN`YH[.AbbJ@S|<~d#Tq6*v3Ie|B>%)L1nlZeT!K(31hO0#-NR');
define('NONCE_KEY',        ';j?$|yW5/TK{8W?BROqo*4x4;5kCXNK+H^Y[dMqjc`tlZkcH=%X!s/e3vb)naK;/');
define('AUTH_SALT',        '.st.].GN1S=PRe)+|m Q!73E`bO/QLs3uQPM%hIi%fy(=%zX<{|-wnK8zyBBn?`^');
define('SECURE_AUTH_SALT', 'F6LqSNu4*S/c-VR,`?WMyr$,s {N{n[KE,fAP_b 2{~@G`sZkZ]GU>D,[_YX3qJr');
define('LOGGED_IN_SALT',   '{]OI(Y)M};6Zo9}DwPY8zd&<KrTB>F|M9:183Xj$3yBS,B5:$l-l3hsP8h$qH$j]');
define('NONCE_SALT',       'CVo0q}Feg/K2GA756iQw*-d*0)=nAGEang<t=[0/,6on{uMf,H(Kt.Q8v+iX75F#');

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
