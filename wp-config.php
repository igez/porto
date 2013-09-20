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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gez');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Tg;hXFw^XwSD5/p}O$C_2sQLE(6+F*tlvXJR^Mybo!3DS~bW7usg5&Ni3T,77G.m');
define('SECURE_AUTH_KEY',  'pu|(4~[h&WN/vXuM)r3sn*?z*eVGyFuJ.4BEN/-A7^[DkWiWlL46@b073[/i+U%E');
define('LOGGED_IN_KEY',    'RYi3)#(iDShYB+|SoBg7#*g)U|89(kNoJ2#o6-hTac _tL~R<F@ucoN#dF6j-B/j');
define('NONCE_KEY',        'qEw@19HxJTji9@(RTJM~!5G#]hv^).?zrqMU<Syz77qe8ut,Xy/eT{o]76dXQL;[');
define('AUTH_SALT',        's6<4N^o!9O^~a8U2K4i+W%+f1{nF)$C<o~D<c6{.5C,6:|*<(KGO5I#QI^sRad,S');
define('SECURE_AUTH_SALT', '`h&}7VG;Z8G@:+dr(8d)4%sb$w*N2Y<mr2b<BVW,Is2HKG`Cqc8d6BpErO+k <dB');
define('LOGGED_IN_SALT',   'S8SAE1?z*h~QHD]iPF} !~iFfQ `/<H<C8d@-3pW93Jl;{-!neoNhC}ku5adzx8{');
define('NONCE_SALT',       'S_8Vb^dxBWWQOW{f)mAQvQKTY>#?iF1$(|PMYE[nM)-onxtVS1:MF&zf;(Ou;#iW');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
