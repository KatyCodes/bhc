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
define('DB_NAME', 'bhc');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'xwg9D3sQQZZQiprg');

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
define('AUTH_KEY',         ')eP0G.vCB3~?5Q0s1/(_.Ee0pBz*R6gEAI?C]uCc!):6]Trq1n%.dYAf,-*~(i3t');
define('SECURE_AUTH_KEY',  '>z~5C]_NI|lQf8$F1.24X, t8wA skV.tve0s7S@O)0Fcr.H]DrQCxmi_RQx@XfG');
define('LOGGED_IN_KEY',    'Z;@NNa?E4Ow>e~R;yfAQ==9_t!#A$,h*ycCt<}%.-S/GMnJaMm@@jp|l]kPwBtZ#');
define('NONCE_KEY',        'J_2.}Y0ETpaw_bzEG)aZ_q<gkinW=v#nXstw}y%u%OG+B(A*cc# Ju2$ dK7Q<B ');
define('AUTH_SALT',        '&jGU$p!MO>Uk3u*IW8$Ax,m(HLmp dJ::P4/(f#s @UZh5`zNQrFE_gf!Wo8>,PV');
define('SECURE_AUTH_SALT', '#*&is%V@A[UAa-eJZy%Kxdp/J-}`G{gJo4x~Vr;1LhxLrVP8+f_I/c)WyT{n^]YX');
define('LOGGED_IN_SALT',   '#c~dtVlOp!.^uO57/^<0s(POrM+H*J86QD+K*dOHNPu/SBo8.YQt ^tU&cyi&VQ|');
define('NONCE_SALT',       'r5&h4S)l1J&I.G|c2|Z)}m,www]`! @ ZqZGbsGfqLRKZI`#b_VjfJ(Rf@DT]e5#');

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
