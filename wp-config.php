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
define('DB_NAME', 'db404281426');

/** MySQL database username */
define('DB_USER', 'dbo404281426');

/** MySQL database password */
define('DB_PASSWORD', 'wGMBaa59mjRZ');

/** MySQL hostname */
define('DB_HOST', 'db404281426.db.1and1.com');

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
define('AUTH_KEY',         'kXP,P]~+Qj7D~yS j&AU5Wf%#Zi8zmph-{pULuKO$,Uc{Al-?rz6CAcRTOBRBA0>');
define('SECURE_AUTH_KEY',  ']|E(5^|z[#ANA%H)&;8+Bqt>}RHz@pEP[(4e-[o*[-}]7i>E/-{/$Y;+&k`I[0`/');
define('LOGGED_IN_KEY',    'XFi-4R XC%yTDcqe4HG80YSr-DNJCMk=[{++tM9p+P0*Z?T)LZKL+z{usA<*!+02');
define('NONCE_KEY',        '?9+|?@7|Z[+TERE&<$uqGNzlk~|vZ*={n<u]meE27s>$g`#W<9hM-=9k5bF5R$gZ');
define('AUTH_SALT',        'e%X F^y.1f10eu@=a%5YI+S|8EeBdkKNW_TMA]<ixU]Q|,N?qq3hH}Uc@J&}p8.j');
define('SECURE_AUTH_SALT', '%]wN1]nb+M?Xa-4X)Y>$yy7gj/zVBE]9NvpyGI79-4bDB-#/yMSzQD_Gp+=Ld*`m');
define('LOGGED_IN_SALT',   '.a;B#1EBVVPc+Ag9@iOo^OY|tX8g,/1y7P~w43plCg{pY- T[R-w7Wf-DhH~k!SX');
define('NONCE_SALT',       '[TL]4E0IfMeAET*/+b 01V?Rq9^6KACc^0H~5|he@}j*)ol0r+pE?@+ot,~uo=y|');

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
