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
define('DB_NAME', 'paidmembership');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ladygaga123');

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
define('AUTH_KEY',         ':HUbUM^!BJ+;!I$yC9R)hmyn}|ObGI.g*78mp.<rf&+E+(#+m2am)/,->Bw^jhPT');
define('SECURE_AUTH_KEY',  '+S)<5?&QL9<Mv(T!%qm=QyX,W4PxKy<}11o*e?e/+==1Kw+P+ B{kL^bm-qH$*A`');
define('LOGGED_IN_KEY',    'HZ+_u6q~|/W)!@H794djZF+0z+mb*A#g}0*WO/-JL+UZNTX=ZuZG^Q)rR1M&JeKH');
define('NONCE_KEY',        'F+ju%n`4;O,t2.w+:F+Tu_q?MG0@KlK`%z&VJ7Qvd?[_J.O:(zyx_JxlLbQ;^RFd');
define('AUTH_SALT',        'HXXnr062lOrwL$ sNx3S,Y+|OMv4`+?%=t-mJx.D|//93{NQzoNlr/+|Wj.;b~&y');
define('SECURE_AUTH_SALT', 'i@-w6D.xmh?lrz2}wCi)_k]0?m27GMu{?mlB@$hN^D(ft|L<_(Al#@{RPuB716sL');
define('LOGGED_IN_SALT',   'F3dDTPyP303P-~&xSB l9*8Y27+B#!v8F-</?*gw2wV|YrdxXwF+x)DLaz*>5?-+');
define('NONCE_SALT',       'P?`lL~Z|7C2` Fit8IO,`DCNg/pFo_lx<|~X]g|E%:J!!iyxyL@;WQtXGO]juT+[');

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
