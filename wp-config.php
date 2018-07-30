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
define('DB_NAME', 'wp-domotics');

/** MySQL database username */
define('DB_USER', 'wp-domotics');

/** MySQL database password */
define('DB_PASSWORD', 'YF5Wi2YLvcej7TKo');

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
define('AUTH_KEY',         'z::?V6^SUO^a7IY}5SZK=y)!i=s?5#=~<LwX}T<M*!s7_BNUpBjM3M53q21kx0I#');
define('SECURE_AUTH_KEY',  'A4r^j>.x$$P2*eY{BpZjm N7)QybYq,HldT_,h-TnL)#7KP,7dry4w@Z%_nv~Xj#');
define('LOGGED_IN_KEY',    'ufRmlS2KQxyuIMFKEkO1RNib,1DH0LcZpHL}xlAGy5r2%=oHZ0QnR&Yp@60[o2M ');
define('NONCE_KEY',        '1mQk-XUZC1XPZJoO$NV-qgG8TVid|MEC^Lo0}X>4~&_%jy8hetJkf[FOjXp8rL>B');
define('AUTH_SALT',        'f8P8wTBvqNhi5/:U8zfN>_[en2bZs={D<j_=]M./Y/OSJ0J*]5iU}5?tOAz65}yB');
define('SECURE_AUTH_SALT', ' VPy<|I_h@h>pRnxBs8mz?GRIMc;%a!+s6d6Zqj.:I7~~,$-)R#XW7+$$oj69&w7');
define('LOGGED_IN_SALT',   'am1/d:!B_4N~ m?SHHKUzCd)ks^]g|W|EW~rzO]_MJ&|AbtD<#eHEGHP^+->bFtS');
define('NONCE_SALT',       '_C/=U^Ab]^CJx*Hyz.JVsqU+iE>Ke9)*_@b#T~terf9q9/kK/|`{~u<F-mq/<6rC');

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
define('WP_MEMORY_LIMIT', '256M');

define('FS_METHOD', 'ftpext');
define('FTP_BASE', '/var/www/wordpress/');
define('FTP_CONTENT_DIR', '/var/www/wordpress/wp-content/');
define('FTP_PLUGIN_DIR ', '/var/www/wordpress/wp-content/plugins/');

define('FTP_USER', 'domotics');
define('FTP_PASS', 'iotdomotica');
define('FTP_HOST', 'switchome.vanadis.es');
define('FTP_SSL', false);
