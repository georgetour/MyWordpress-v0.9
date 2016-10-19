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
define('AUTH_KEY',         '>8T(aXuSCZ+su0DzHnE,<?K(Y/c<hpn8Sh!SS>:3-.V3sC*l %OSCSmS;e,JhdtR');
define('SECURE_AUTH_KEY',  ',4kR,]uY}ZM3[>R*oyJ~ [)^!A~+7Yx,G@[00clKx,vA_y5/7t5,1bB5$F?}<C[Q');
define('LOGGED_IN_KEY',    '|C@a U+udjoy9HQV =8lB1]L|~!W,HX7dYizEj=#4@:ANJ+REtU6.<%2n[5(|#de');
define('NONCE_KEY',        'uK*mI!!%=&[L}*@8})6Gmlmi?MLNhhM?ew6&mpT6I0IzEn,`)?gAN1F~Te2_XKQP');
define('AUTH_SALT',        '*a=yF@:C?aN)`D|]4*L*;vB9cwU/+376Q<N&,`?k5$%*0n^@Nl;w*,z]C(rd!xyY');
define('SECURE_AUTH_SALT', '[b4emrDmA@)pXILRbT6%R6oq@~r@Tn27,*>Bs0i+mPIi*8tqDZXO3Dcps:EJM(@J');
define('LOGGED_IN_SALT',   '/i|$Ucx$S5jTdv--@()/v@kB[U)B_v,,;#Cj&jn[~rpcb.[I*54V=Nyp8]]?}=5&');
define('NONCE_SALT',       '7$.p$CYdx:G|g4[X2XFjda+w(ur*(+_TQ-.I+vfDn:9Eo*hSl,Xi;q-XFx?+>I>|');

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
