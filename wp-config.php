<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'prana');

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
define('AUTH_KEY',         'LBU;h1SqS&mvoa,Xp}9l!rTpC>XfB}@qNXPx)9` r`mPRBsr%adv|qf[1 @C~s^-');
define('SECURE_AUTH_KEY',  'fWpkKqVd{o?Z9JH2RTJL;p{w}b7ND`K%xxc[0/5v6y~+%Twd?W9G|]WZJlXDA6JC');
define('LOGGED_IN_KEY',    'Kya]r4{GCnz-#4B R=lTYe2nIicjP9,=}PSrun|<P|+j|n|G2<niBLr1FMt1Z-Z}');
define('NONCE_KEY',        '[4{kSGZ=M[/~TcY1294it@}I@uvPTErVRJ3J`OS@:hheBTi;Ek{J}o^IO$,`RBzt');
define('AUTH_SALT',        '!Vi`%C^NH >KaMqxd%%~tD/c;Wt>pY`$`sT*]AAoT`u$oImnECswEX`1U3qZ5q6I');
define('SECURE_AUTH_SALT', 'cD:j-$V~ZBDYS~VGx>S{37uQ[G?)t2*%I@bRIm+`2{=$*aA!x1kDPKD#dt4JQ*o^');
define('LOGGED_IN_SALT',   'R{:sj8,$u}NkayWqp~(b5(JN/=vF*EBo+}2L;_}apZt17!=Y1{glpj7.v`[ANI*$');
define('NONCE_SALT',       'FlI5x3pj]o&OAzMf|0rl|mW#z}4^sonF_P,XFo/&Oj->QB:ta-ENeTCbHX+)4=&4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
