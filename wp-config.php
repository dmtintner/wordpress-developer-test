<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'sw-wordpress-test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '</ TM?XQq7VLIFM3e~@dgL&ZRr2l|Kq_!W4w<uY#e^hG&Vzl1M+jc3YZ?44p;x>&');
define('SECURE_AUTH_KEY',  '6}X5E${`Ugjq]bh.,!}kw,xId>pf0sF:hiz}5_#y)ql7c}U3Yq)]MdT]G@0Yt,S@');
define('LOGGED_IN_KEY',    'J~l(O[m4Fq)r_e_6UGW|o?ntQv`$C@O{YXh%Ux4F|^qPy!`B*{S}3u*tu?2LwR/V');
define('NONCE_KEY',        ')w*itr8:W^P=IrR]M5E<m|}pMp1tn0sKBZVJe0:Sknux$f/r>`131}@]Ttq!!cRn');
define('AUTH_SALT',        't5Ay9:=W8t],A)[sjHsE@pNqs~eqKTx-cJIwD.n;Vu=4niK^.9D)@nH*a$x+Vn=-');
define('SECURE_AUTH_SALT', 'zTD=v3|]o2=-vDl={s E]XFrL6_]d`/BlnR F&KZSc^XP<6.8xB5]5j__SE:Zm{P');
define('LOGGED_IN_SALT',   'BP=Xc)Q2]0#!1r,OJtkv%NKFHwZj[LS~b`;4^l(R@Ds.%zdM:=s(vpJA`sY+03Hy');
define('NONCE_SALT',       '{U>_E[v/vSABtUX.8y{c2HVzR@#Ky@r=G{RDNqZ%6i=IRFtw/L6I?phT=BMHffg.');

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
