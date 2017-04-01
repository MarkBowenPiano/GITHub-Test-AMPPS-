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
define('DB_NAME', 'githubtest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'PcF@^RpQAq0khnZ}Dm}C!rwTUw.OuY^$a1q&V*eNQ]Ll!#XI;JBR8l.=CS>PRJ&H');
define('SECURE_AUTH_KEY',  'V+X*~?U$B&&ANi-m?_$Wk@9NVbEOp$O/bx[Km?U8h<[?(}eHz<t Qb39*fHD?uBO');
define('LOGGED_IN_KEY',    '~3ujih(:T.z0jJ 9-]](tPOj7g=L7 uyB`O6{UdD+[lQZxA6hO:T23iq=!}CMT#h');
define('NONCE_KEY',        '.-5v{7JC>w{po@l)6`_W/Ax=XJhOo0C[=&F)[xm#WL+l6,Hl]h7<J&b*n!nPak3U');
define('AUTH_SALT',        'iwbi%;g* 8[4s::8rx7h:TdA60$nOfBGH(LU*tVW=z!xj|HS;4C/q~(ub;x@fVTi');
define('SECURE_AUTH_SALT', '9jbbneI/GqNw#W]SN{0FKa;[QOB/v#a]K<jRjgIt/rmna#oA/FpJ1z0/B:1Kzw:o');
define('LOGGED_IN_SALT',   'UkS$>,UW(Jcx;hV`dp;>&`OMf&@c}*m}9 i}^{auP2NWc8WZQLvtt,f?iH#4o@aH');
define('NONCE_SALT',       'zuD,XSjQfmwH{*4l|}^4g92iT01a/X=^p!^35Je!iEwIL0fkq(ra54D,y6j5^#K{');

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
