<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tamidb');

/** MySQL database username */
define('DB_USER', 'easterman');

/** MySQL database password */
define('DB_PASSWORD', 'Whinfrey1');

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
define('AUTH_KEY',         'Q>r^+{ntS-c|`A&;?C8wZbQuJNiY=W]u#F.@jfBTpL#T dH^T;eCG_Rv|*-/jF5u');
define('SECURE_AUTH_KEY',  'y-o}IicUCOAzt<s8PQ$Y|D!C!/D3L$9uK6:2Ut?9xFC5eC=QE!-g(K|-*+2>0F%V');
define('LOGGED_IN_KEY',    ';s+Y@.7-gg8`[hAz0BBeUK6l_MlDeG^./|)IMA=*nx(>?V-vXG)H`g/igiI=6}W0');
define('NONCE_KEY',        '<5PYpU[/MFc_s.DI^$h#mGD-#ZG?&2=Ff@3va,+Nm0+h.t-:g*Mxi?%UPnIF--]C');
define('AUTH_SALT',        '4C}-vf]q7zNwU6#IYEn+9r^RVB}64( 8ZW| ~+jK9%a[.r7wCqd.(:*>NXdu|tFg');
define('SECURE_AUTH_SALT', 'M9-+{}o|TN|6#*Ab^HTyFxW9t$LQ38s3N.fGmdz qUN!cb?JW>`#O6q(:(3MY{?5');
define('LOGGED_IN_SALT',   '0L{:{ ?vrhh3|c-I@M,GSZ^@,Ty>AO]~(YG[-*snmg#PS/hvc`e4*ZyrWc|dR@sy');
define('NONCE_SALT',       'd1KT/0~yE^c.)XKz6>L`/>-s`E]io{!}~>:VwC`;^s[1Ow!5M-Fw`p#IsMBAAFMQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
