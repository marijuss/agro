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
define('AUTH_KEY',         ';0|[6hV p]N`-p7E?7]IjJ/~-h4Wu Y,n=+7san)-X,y|Xm/ODZD 8p_W^O:#ZDL');
define('SECURE_AUTH_KEY',  'wqG8T|QpG{791Kj- ue{[U5<BLw*C{Y2.t(/CJO=V.O=/j$|=aJ33IGou!-M_Y}b');
define('LOGGED_IN_KEY',    'M`b#PZNf+gGLqyoIdWM^>{~c+ycs<d$H8`eZH7 cH8q+A)U;}{&VFEuWTS*4n5}F');
define('NONCE_KEY',        '`+-]-rp|TS+`vC!=D/D/E52OcP~+Dz{_[*QGVz+6-D`k_] Pa0/pI6AOEJfw<nVB');
define('AUTH_SALT',        'YNFy0s|>a6t5EfHQD&0Kj)/!?h`/5nkG~Ah#nd^V&Leug:-L}ju|cNri? `ra9+Z');
define('SECURE_AUTH_SALT', '{.a#Pv38Y@E^ ,=)r?Uwpn|Xg-{saBn2&JlPK08y+G-4Ilwq4c,+JZ|LSrqxDjF2');
define('LOGGED_IN_SALT',   'bkp2OI-s4b-#`E0fG*L4t}1n< bF1Y*lxZYl+o(?**$qH^l+*9;:^SWS-TuRBRuB');
define('NONCE_SALT',       'CI%4Wzls~}4gRX/n|?/~XRTH}tTB .:g1xQj+V*N9;+k-0!tx+N[hS|pZ -G90@]');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
