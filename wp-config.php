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
define('DB_NAME', '_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123123');

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
define('AUTH_KEY',         ')<`3H|!jhS` :i4MPl|[isx`iG_csoRM)S##nH`F+JW|Ww,p]1AOFKF<<T~tjW8_');
define('SECURE_AUTH_KEY',  ';{p 9q3aii*dr.`y8DAajPC%_vQOIKzb[Hr0RA6ssD_9U~j)|E=Z7 }l.R7mlsiK');
define('LOGGED_IN_KEY',    'T1$c=#2R&Q9Bbv*AR5 AB{4YHeW{y@ia09,o9jX&Wsq>5RKq%2S5(KXv{WvNj{T3');
define('NONCE_KEY',        '.pjgn$c0n+5)Ig#c;cK^jb]4dMR4`WJfLp zJYh%B>#Y7Fu 9#.T<d<P=!kicF(Z');
define('AUTH_SALT',        'yqU+e^`FUt$LAZc+|frtK`=~vyqvmR*HT>L/<2[Kzf+JQr|el3=%jdLp}7fvJ-=1');
define('SECURE_AUTH_SALT', '#c<hXL$J<6$oVky]zUgH5cBoFJSNOEE5iHPaeyA$XN:xOL}Sz6EkZz+5wWZqnsF!');
define('LOGGED_IN_SALT',   'Z<_#=S2n#,g_Y~z/rrD uM*j>e+p>3:UU#A}]lk=3DI2@Y.;qEG-lr:x0tpZUOKp');
define('NONCE_SALT',       '>)H]~yYo451)7rQ*XlkP*v^~2S.y=8<I0qnC>X2Z#(<s53Ow{naN]s!hl.@)`sn&');

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


