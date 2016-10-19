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
define('DB_NAME', 'testwordpress');

/** MySQL database username */
define('DB_USER', 'george');

/** MySQL database password */
define('DB_PASSWORD', '3ZEJ3S9n6ZjWfmPu');

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
define('AUTH_KEY',         '=$&S=cPXmmm;IPHXx@3Q)[R^3SKH9;}N!{dqg|@wh<POpDHadB+qu3Ez0Ks.r+^+');
define('SECURE_AUTH_KEY',  'blZ2o)JBc+`R}BBrTc<rV1cnv{-5vzH;z+eZ?e+?I|+Szp  ,8t3t5Pw!qn,7qt*');
define('LOGGED_IN_KEY',    '<Hq>e?O=7(x<Z_fFj3 JdHbj^Gn;W* =G-{j9+njY 5fDLX.+htVRpQWK.o{Z$v?');
define('NONCE_KEY',        'DgLpzxHqqFb_w2ar|o<(NI_-dzO>tnM1B8]n%vZ8&{ qWF|k{~GsPDdA|(J+3^dv');
define('AUTH_SALT',        'V=AS<7r;6-r:t#?[!E,h;1KQcU-1~J},[jae$ZunG7#Jf,.dz][=7T!RiC1@PffP');
define('SECURE_AUTH_SALT', '*]sU>4gr4B-N1uz^xC{:ibzp/O]3|.x8`Ryd-/N8k0L# 9<|zUNmoblPth{9?f.M');
define('LOGGED_IN_SALT',   'ozT0KOE-+{YG1DKKP-Fb5 12Ec)y(1(ysFIw}?YVqrQC(=I|G?h)n6mF0wBo3Wy$');
define('NONCE_SALT',       '~o0;*Z%Zj8{L:&RfO$XL^<SXwq> q*]a~(MN|Z:;s+X*1y|>>MIs+jLa6m9+Ti:E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbtw_';

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
