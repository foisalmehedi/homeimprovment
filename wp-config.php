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
define('DB_NAME', 'homeimprovmentdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'T?}}O/:^)M/Qha,<QV$6$g`-x)IGhHa6L1/?!63OS2/ux;88$MYs2?5#a4GF6Ap9');
define('SECURE_AUTH_KEY',  ',%4O6n4l-MW2_-:KrB:YE{kGHGGh]q*YF%iLJ3@Z*hcrq.ERFwv|3Q5HVu#I<}fg');
define('LOGGED_IN_KEY',    'G51c->%En$;*_7#ib|ipo^A7]OOVO8*EeS[g7ppt)M${%-cZSs9X}Cau5Ig7&fyw');
define('NONCE_KEY',        '/}.^*)=rK,*F[SuK<W`3We_N!zxNAiY:7.VcY~ki@mHSA5Xvh`dg`qp}-dlrsHS_');
define('AUTH_SALT',        '(4_)/X_U|$|X*B`Vg_A(v`A<8#A 5D:mA>ufRx+:jd`b#rXLzFBc4IEBRDLfBFe#');
define('SECURE_AUTH_SALT', '/s%)U!<`$GRQBbf`pj+F.?lpp/>f&4_QX 3^_u3~qt,q)/a]jeqA=RaujT3)F90-');
define('LOGGED_IN_SALT',   '1/zJLHxcvYVOcS]:q~B|WC1b8}74q,7>b,*Q7oagFesulBw-Iet .MoEySbJq|  ');
define('NONCE_SALT',       '_ss{@3Sl <w^~NfRa0K*{E{sN2[oKjrsT(1[,7W_h0x=2|S%5kZyuMO$`Lz<<A2!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sd_';

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
