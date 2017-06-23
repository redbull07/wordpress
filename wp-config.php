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
define('DB_NAME', 'next57');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '3G1OY!?Bg|8^0#iE0HkITrTicu*q4>}S!D}aI6GsP5g4|6`SH8cRI:Ox0Vxy/UO9');
define('SECURE_AUTH_KEY',  '~klz<:W@@<;EDQUAE=DwwFBGV4sy}j)<w1~eD5]AV5ltxMNFGOr TJGJ%PMn_alv');
define('LOGGED_IN_KEY',    'TG7k*|2VoD<WZB0W:8<nsp=#~RX}B8B0%s4#A%NXHT]G3 4NtzeU8-*1cwkiDor!');
define('NONCE_KEY',        '/#UBzp0F+}%{|vv8@Q<:y<5U?H&(OB#G>Wnvp)@8VfvoIJLca7Oq~3B@3A-#M},t');
define('AUTH_SALT',        '9+j3K*hBDqcm-WsydH08$61>u0hN#,5R&7fi)_M?uy:Q9*:=e[b/{k/DZox[)|u!');
define('SECURE_AUTH_SALT', '5/.)#Ttma:w+/@Yn`cCBT8l~M(<?xn=v5Ez+1 i8SA]{tD@rK1`0o=d4.vyX&kPv');
define('LOGGED_IN_SALT',   '1L6$jw:/2j(41bOf}y&-.,JGB_%5JO.xt,yi%#,~rSap2 W7v6pg,=isAUf6^#VY');
define('NONCE_SALT',       '1{M(r(v^x&,O+i/5#Rcv<cH#QB]D$f9JZII<I@3(.=uB67^*,WG#v+U|`pl+YEm!');

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
