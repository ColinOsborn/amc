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
define('DB_NAME', 'aloha');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '*tOFcM`9yvNM=!4%T^5&%a+krFq)&l`(TnVn(=oo%EM4D/M!fi0A3{c~zxMTA7Q:');
define('SECURE_AUTH_KEY',  ']>,97!f8pkse3X%N:L h%;sW:c68<w ^g0=*Khvy<<?*C9^.*O!j{o_C![lVNM{T');
define('LOGGED_IN_KEY',    'JrpFj6z`eX;1!;0XD_u!d{h3;%2xbP5p)$^[o^8r+K=90g$pphHy*BEn.9FY^Y%6');
define('NONCE_KEY',        'J4<S[t9KP$PC+e:GX,R^>3dWo$&&{yh[B|bHv#:7z{h9<VgKZJ/EQ{J$I`I3x:BM');
define('AUTH_SALT',        '6lH:Ff}dU[IIrARLq Av3d(!*f!L-G9+c.y#Y564a=o6~3&bqOn$p8$_37K 6U1x');
define('SECURE_AUTH_SALT', 'bqk:i`G`RsfByc%,%=3F^`2cvC,A@${BJ[Y:cV`oa[RASNq;yxICQ[#v|PO i;+J');
define('LOGGED_IN_SALT',   'u;HfDQobFwvH&&J1b+b+kiDaG`,(yll/6d=8?(xi8rf#v_h1M61,%yt:AJDU^uG!');
define('NONCE_SALT',       '&>i9ZG!SeFO(jAAqM|35m3YrR3W(SF2P{pF6oi~FN1)l%1l4<)dJ8M =Mmi:;$>0');

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
