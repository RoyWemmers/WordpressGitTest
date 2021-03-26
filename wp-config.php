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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WordpressGitTest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'I2sr#1bsn]e$W_!D4T8[0% w4|Hxk7jlhiD-<<XAdq1qD5j=(a7S+RpQ}oyy;S}h' );
define( 'SECURE_AUTH_KEY',  'Em~#Gws6**b#Tb*e<{GQA;{~0hmO49O-+:H+QFYd5{h!#UbkKMB!%vp.XG`5;7@?' );
define( 'LOGGED_IN_KEY',    'wxoLLz[U}i8{mq-l>+4PnZ ]#_Sz%RIB=5t[d]h=UK0bP{jQPF#uU0C3]Wp*{m%4' );
define( 'NONCE_KEY',        'u_w$=WG:^T7ZKkT>`]Vi0DOQ#RAd:(o~{GT[Lq@.)`a[qJzM6%,PyO`||)=1$h+O' );
define( 'AUTH_SALT',        '?-h<RDG0(u(e]I!~3/6V/4ofc:ZN~e+9EaF*Vy^S6J-p2+I}R4CI%*VI~s0n&90X' );
define( 'SECURE_AUTH_SALT', '*[tK<lRl*.B+wHbEY}236@~AGZ:q&4,eQ.u*Ew-iTC}`%{_N$VC5J)oyXl<`TCT2' );
define( 'LOGGED_IN_SALT',   '+4<JPXoqAZ-xWML=hK*qsNJ=pY5zx-c%nt1,fBgM  b,|+WcaZ.+TSI4j(+2`-}4' );
define( 'NONCE_SALT',       ' s1 jPg!?duZFJii8;U85% 09*#?U@Wa%<.gQi*-_xHHz-XbR,179)V;S}U@/-kQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
