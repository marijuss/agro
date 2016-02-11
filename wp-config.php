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
define('DB_NAME', 'agro');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'k?b)V$?U4*RwR_CEpQ[prKGs2T$#Mu;Z`=.[JO}0QbkP_TpG+&/C+3q5Kn&?1sSQ');
define('SECURE_AUTH_KEY',  '.p3lkVQYgp88!EG*cP{zq_c=rlu}52x0#1${k,ip7:7:|T6r`|$yL=YMURQw/^04');
define('LOGGED_IN_KEY',    '03M|o&Q#Tu0Tq[,u? Yd1s)_E>5YLN6![:JNpp=:&8FM GEr|439~.)|L9?+|+bN');
define('NONCE_KEY',        '}0rz]Z*{J.4C3jd73jjkTfX1sKzDy9fwk/M]a[:VBumo{rV_h76K*RS^s<`*AbT&');
define('AUTH_SALT',        'I;I.T@u,-A>UNWh=:|G==?GGdeCy=bPq@Ew!Bt%=vV-T}`k2rtP~r*Dfy _&f5.0');
define('SECURE_AUTH_SALT', '|FpAr0L+j{ii%URWjyN>q-#.qW#QPszp$3:XZ?xr>4LK.wi+ppNYHK:e|LS+A|^B');
define('LOGGED_IN_SALT',   '|z5d^>zz&@/oYv`]u$jnh^ALMG/~$5=$,?:qX_}Dl/L?t%6:ow-:?c]H)jvTmkry');
define('NONCE_SALT',       '1^FQGX{<R||;v?n[`uLF|t4z#xF#-dF0m71W/iUN]dbqFd5<q}+6t0igeydl9uS&');

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
